<?php

namespace App\Http\Controllers;

use App\Helpers\Webwala\Webwala;
use App\Models\blogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BlogController extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->crudModel = new blogModel();
        $this->tableName = config('constants.BLOG_TABLE');
        $this->moduleName = trans('messages.blog');
        $this->folderName = config('constants.ADMIN_FOLDER') . 'blog/';
    }

    public function add(Request $request){

        $recordId = (!empty($request->input('record_id')) ? (int)Webwala::decode($request->input('record_id')) : 0);
        $formValidation = [];
        $formValidation['title'] = ['required'];
        $formValidation['content'] = ['required'];
        
        $validator = Validator::make($request->all(), $formValidation, [
            'title.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.title") ]),
            'content.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.content") ]),
        ]);

        if($validator->fails()){
            return apiResponse(404, $validator->errors()->first());
        }

        $uploadLogoImage = null;

        if (!empty($request->file('image'))) {
            if ($recordId > 0) {
                $whereData['countRecord'] = true;
                $whereData['i_id'] = $recordId;
                $oldRecord = $this->crudModel->getRecordDetails($whereData);
                if ($oldRecord && !empty($oldRecord->v_image)) {
                    $oldImagePath = public_path($oldRecord->v_image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }

            $fileUpload = $this->uploadFile($request, $this->folderName, 'image');
            if (isset($fileUpload['status']) && ($fileUpload['status'] != false)) {
                $uploadLogoImage = $fileUpload['filePath'];
            }
        }

        if ($recordId > 0 && empty($uploadLogoImage)) {
            $whereData['countRecord'] = true;
            $whereData['i_id'] = $recordId;
            $oldRecord = $this->crudModel->getRecordDetails($whereData);
            if ($oldRecord && !empty($oldRecord->v_image)) {
                $uploadLogoImage = $oldRecord->v_image;
            }
        }

        $recordData = [];
        $recordData['v_image'] = (!empty($uploadLogoImage) ? $uploadLogoImage : null);
        $recordData['v_title'] = (checkNotEmptyString($request->input('title')) ? trim($request->input('title')) : null);
        $recordData['v_author_name'] = (checkNotEmptyString($request->input('authorName')) ? trim($request->input('authorName')) : null);
        $recordData['v_content'] = (checkNotEmptyString($request->input('content')) ? trim($request->input('content')) : null);
        $recordData['v_seo_url'] = (checkNotEmptyString($request->input('seourl')) ? trim($request->input('seourl')) : null); 
        $recordData['i_category_id'] = (checkNotEmptyString($request->input('categoryId')) ? trim($request->input('categoryId')) : null);

        $successMessage = trans('messages.success-create', ['module' => $this->moduleName]);
		$errorMessage = trans('messages.error-create', ['module' => $this->moduleName]);
		
		$result = false;
		
		DB::beginTransaction();

        try{
            if($recordId > 0){
                $successMessage = trans ( 'messages.success-update', ['module' => $this->moduleName]);
                $errorMessage = trans ( 'messages.error-update', [ 'module' => $this->moduleName] );

                $this->crudModel->updateTableData(config('constants.BLOG_TABLE') , $recordData , ['i_id' => $recordId]);
            } else {
                $this->crudModel->insertTableData(config('constants.BLOG_TABLE') , $recordData);
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

    public function list(Request $request) {
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
                    $columnName = 'v_content';
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
                $rowData['content'] = (checkNotEmptyString($recordDetail->v_content) ? $recordDetail->v_content : '' );
                $rowData['autherName'] = (checkNotEmptyString($recordDetail->v_author_name) ? $recordDetail->v_author_name : '' );
                $rowData['seourl'] = (checkNotEmptyString($recordDetail->v_seo_url) ? $recordDetail->v_seo_url : '' );
                $rowData['category'] = (checkNotEmptyString($recordDetail->categoryInfo->v_category_name) ? $recordDetail->categoryInfo->v_category_name : '' );
                $rowData['publiceDate'] = (checkNotEmptyString($recordDetail->dt_created_at) ? dbDate($recordDetail->dt_created_at) : '' );
                $rowData['status'] = (!empty($recordDetail->t_is_active == config('constants.ACTIVE_STATUS')) ? true : false );
                
                if(!empty($recordDetail->v_image)){
                    $rowData['image'] = getUploadedAssetUrl($recordDetail->v_image);
                }
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

    private function commonFilterData($request = null){
		$whereData = $likeData = $additionalData = [];
		
		if(checkNotEmptyString($request->post('search_by')) ){
			$searchValue = trim($request->input ('search_by' ));
			$likeData = [ 'value' => $searchValue, 'columnName' => ['v_title' , 'v_author_name'] ];
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

    public function edit($recordId = null ) {
		
		if(!empty($recordId)){
			$recordId = (int)Webwala::decode($recordId);
			
			if( $recordId > 0 ){
				$whereData = [];
				$whereData['singleRecord'] = true;
				$whereData['i_id'] = $recordId;
				$recordInfo = $this->crudModel->getRecordDetails($whereData);
				
				if(!empty($recordInfo)){
					
					$data['title'] = $recordInfo->v_title;
					$data['content'] = $recordInfo->v_content;
                    $data['seourl'] = $recordInfo->v_seo_url;
                    $data['image'] = (!empty($recordInfo->v_image) ? getUploadedAssetUrl($recordInfo->v_image) : '');
                    $data['authorName'] = $recordInfo->v_author_name;
                    $data['categoryId'] = $recordInfo->i_category_id;
                    $data['record_id'] = Webwala::encode($recordInfo->i_id);
					return apiResponse(200, 'success', $data);
				}
			}
		}
	}

    public function delete(Request $request){
		if(!empty($request->input())){
			$recordId = (!empty($request->input('delete_record_id')) ? (int)Webwala::decode( $request->input('delete_record_id') ) : 0 );
			
			if($recordId  > 0 ){
				$errorFound = false;
				
				return $this->removeRecord($this->tableName, $recordId, $this->moduleName);
			}
		}
		
	}
	
	public function updateStatus(Request $request){
        
		if(!empty($request->input())){
			return $this->updateMasterStatus($request , $this->tableName,  $this->moduleName);
		}
	}
}

