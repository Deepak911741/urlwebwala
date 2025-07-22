<?php

namespace App\Http\Controllers;

use App\Helpers\Webwala\Webwala;
use App\Models\seoContentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class seoContentController extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        $this->crudModel = new seoContentModel();
        $this->tableName = config('constants.SEOCONTENT_TABLE');
        $this->moduleName = trans('messages.seo-content');
        $this->folderName = config('constants.ADMIN_FOLDER') . 'seocontent/';
    }
    
    public function add(Request $request) {
        $recordId = (!empty($request->input('record_id')) ? (int)Webwala::decode($request->input('record_id')) : 0);
        $formValidation = [];
        $formValidation['seourl'] = ['required'];
        $formValidation['pageTitle'] = ['required'];
        $formValidation['pagename'] = ['required'];
        $formValidation['keywords'] = ['required'];

        $validator = Validator::make($request->all(), $formValidation, [
            'seourl.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.seo-url") ]),
            'pageTitle.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.page-title") ]),
            'pagename.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.page-name") ]),
            'keywords.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.keywords") ]),
        ]);

        if($validator->fails()){
            return apiResponse(404, $validator->errors()->first());
        }

        $recordData = [];
        $recordData['v_title'] = (checkNotEmptyString($request->input('title')) ? trim($request->input('title')) : null);
        $recordData['v_page_title'] = (checkNotEmptyString($request->input('pageTitle')) ? trim($request->input('pageTitle')) : null);
        $recordData['v_pagename'] = (checkNotEmptyString($request->input('pageName')) ? trim($request->input('pageName')) : null);
        $recordData['v_description'] = (checkNotEmptyString($request->input('description')) ? trim($request->input('description')) : null);
        $recordData['v_keywords'] = (checkNotEmptyString($request->input('keywords')) ? trim($request->input('keywords')) : null);
        $recordData['v_author'] = (checkNotEmptyString($request->input('author')) ? trim($request->input('author')) : null);
        $recordData['v_canonical_url'] = (checkNotEmptyString($request->input('canonicalurl')) ? trim($request->input('canonicalurl')) : null);
        $recordData['v_seo_url'] = (checkNotEmptyString($request->input('seourl')) ? trim($request->input('seourl')) : null);
        $recordData['v_robots'] = (checkNotEmptyString($request->input('robots')) ? trim($request->input('robots')) : null);

        $successMessage = trans('messages.success-create', ['module' => $this->moduleName]);
		$errorMessage = trans('messages.error-create', ['module' => $this->moduleName]);
		
		$result = false;
		
		DB::beginTransaction();

        try{
            if($recordId > 0){
                $successMessage = trans ( 'messages.success-update', ['module' => $this->moduleName]);
                $errorMessage = trans ( 'messages.error-update', [ 'module' => $this->moduleName] );

                $this->crudModel->updateTableData(config('constants.SEOCONTENT_TABLE') , $recordData , ['i_id' => $recordId]);
            } else {
                $this->crudModel->insertTableData(config('constants.SEOCONTENT_TABLE') , $recordData);
            }
			$result = true;
		}catch(\Exception $e){
			$result = false;
			\Log::error($e->getMessage());
			DB::rollBack();
		}
		
		if( $result != false ){
			DB::commit();
			return apiResponse(200, 'success', $successMessage);
		} else {
			DB::rollBack();
			return apiResponse(500, 'error', $errorMessage);
		}
    }


    public function list(Request $request){
        $whereData = $likeData  = $additionalData =  [];

        $fieldData = $this->convertFilterRequest($request);
        $searchValue = $fieldData['tableSearch'];
        $columnName = $fieldData['sortColumnName'];
        $columnSortOrder = $fieldData['columnSortOrder'];
        $offset = $fieldData['offset'];
        $draw = $fieldData['draw'];
        $limit = $fieldData['limit'];
        
        $filterData = $this->commonFilterData($request);
        $whereData = (isset($filterData['where']) ? $filterData['where'] : []);
        $likeData = (isset($filterData['like']) ? $filterData['like'] : []);
        
        if(!empty($columnName)) {
            switch($columnName){
                case 'title':
                    $columnName = 'v_title';
                    break;
                case 'content':
                    $columnName = 'v_pagename';
                    break;
            }
            $whereData['order_by'] = [ $columnName =>  ( (!empty($columnSortOrder)) ? $columnSortOrder : 'DESC' ) ];
        } else {
            $whereData['order_by'] =  [ 'i_id' =>  'desc'];
        }

        $whereData['countRecord'] = true;
        
        $totalRecords = $this->crudModel->getRecordDetails( $whereData  , $likeData  );
        
        unset($whereData['countRecord']);

        $whereData['offset'] = $offset;

        $whereData['limit'] = $limit;
        
        $recordDetails = $this->crudModel->getRecordDetails( $whereData , $likeData );
        
        $finalData = [];

        if(!empty($recordDetails)){
            $index = $offset;
            foreach($recordDetails as $key => $recordDetail){
                $encodeRecordId = Webwala::encode($recordDetail->i_id);
                
                $rowData = [];
                $rowData['sr_no'] = ++$index;
                $rowData['record_id'] = (!empty($encodeRecordId) ? $encodeRecordId : '');
                $rowData['title'] = (checkNotEmptyString($recordDetail->v_title) ? $recordDetail->v_title : '' );
                $rowData['pageTitle'] = (checkNotEmptyString($recordDetail->v_page_title) ? $recordDetail->v_page_title : '' );
                $rowData['description'] = (checkNotEmptyString($recordDetail->v_description) ? $recordDetail->v_description : '' );
                $rowData['autherName'] = (checkNotEmptyString($recordDetail->v_author) ? $recordDetail->v_author : '' );
                $rowData['keywords'] = (checkNotEmptyString($recordDetail->v_keywords) ? $recordDetail->v_keywords : '' );
                $rowData['canonicalurl'] = (checkNotEmptyString($recordDetail->v_canonical_url) ? ($recordDetail->v_canonical_url) : '' );
                $rowData['seourl'] = (checkNotEmptyString($recordDetail->v_seo_url) ? ($recordDetail->v_seo_url) : '' );
                $rowData['robots'] = (checkNotEmptyString($recordDetail->v_robots) ? ($recordDetail->v_robots) : '' );
                
                $finalData[] = $rowData;    
            }
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => count($finalData),
            "iTotalDisplayRecords" => $totalRecords,
            "aaData" => $finalData
        );
            
        return apiResponse(200, 'success', $response);
    }

    public function edit($recordId = null ) {
		
		if(!empty($recordId)){
			$recordId = (int)Webwala::decode($recordId);
			
			if( $recordId > 0 ){
				$whereData = [];
				$whereData['singleRecord'] = true;
				$whereData['i_id'] = $recordId;
				$recordDetail = $this->crudModel->getRecordDetails($whereData);
				
				if(!empty($recordDetail)){

                    $rowData['record_id'] = Webwala::encode($recordDetail->i_id);
					$rowData['title'] = (checkNotEmptyString($recordDetail->v_title) ? $recordDetail->v_title : '' );
                    $rowData['pageTitle'] = (checkNotEmptyString($recordDetail->v_page_title) ? $recordDetail->v_page_title : '' );
                    $rowData['description'] = (checkNotEmptyString($recordDetail->v_description) ? $recordDetail->v_description : '' );
                    $rowData['autherName'] = (checkNotEmptyString($recordDetail->v_author) ? $recordDetail->v_author : '' );
                    $rowData['keywords'] = (checkNotEmptyString($recordDetail->v_keywords) ? $recordDetail->v_keywords : '' );
                    $rowData['canonicalurl'] = (checkNotEmptyString($recordDetail->v_canonical_url) ? ($recordDetail->v_canonical_url) : '' );
                    $rowData['seourl'] = (checkNotEmptyString($recordDetail->v_seo_url) ? ($recordDetail->v_seo_url) : '' );
                    $rowData['robots'] = (checkNotEmptyString($recordDetail->v_robots) ? ($recordDetail->v_robots) : '' );

					return apiResponse(200, 'success', $rowData);
				}
			}
            
		}
	}
        

    private function commonFilterData($request = null){
		$whereData = $likeData = $additionalData = [];
		
		if(checkNotEmptyString($request->post('search_by')) ){
			$searchValue = trim($request->input ('search_by' ));
			$likeData = [ 'value' => $searchValue, 'columnName' => ['v_author' , 'v_page_title'] ];
		}
			
		if( !empty($request->post('search_status')) ){
			$whereData['t_is_active'] = trim($request->post('search_status')) == config('constants.ENABLE_STATUS') ? config('constants.ACTIVE_STATUS') : config('constants.INACTIVE_STATUS');
		}
	
		$response = [];
		$response['where'] = $whereData;
		$response['like'] = $likeData;
		$response['additional'] = $additionalData;
	
		return $response;
	}
        
}
