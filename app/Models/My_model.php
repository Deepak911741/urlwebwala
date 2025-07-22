<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class My_model extends Model
{
    //
    public $loggedUserId;
    public $loggedUserRole;
    public $loggedUserName;
    public $settingsInfo;
    public $currentDateTime;
    public $singleRecord;
    const CREATED_AT = 'dt_created_at';
    const UPDATED_AT = 'dt_updated_at';
    const DELETED_AT = 'dt_deleted_at';
	public function __construct(){
    	DB::enableQueryLog();
    	parent::__construct();
    	$this->loggedUserId = 999;
    	$this->currentDateTime = date('Y-m-d H:i:s');
    	$this->singleRecord = false;
    	
    	
    }
    
    public function defaultData(){
    	if( ( session()->has('user_id') ) && ( session()->get('user_id') > 0 ) ){
    		$this->loggedUserId = session()->get('user_id');
    	}
    }
    
    protected function errorLogEntry($data){
    	if (! file_exists ( config('constants.FILE_STORAGE_PATH') . 'custom-log/'  )) {
    		mkdir ( config('constants.FILE_STORAGE_PATH') . 'custom-log/' , 0777, true );
    	}
    
    	$fileName = config('constants.FILE_STORAGE_PATH') . 'custom-log/customer-log-'.date('Y-m-d').'.php' ;
    
    	if (file_exists($fileName)) {
    		$fh = fopen($fileName, 'a');
    	} else {
    		$fh = fopen($fileName, 'w');
    	}
    	fwrite($fh, print_r($data,true)."\n");
    	return false;
    }
    
    protected function insertDateTimeData() {
    	$this->defaultData();
    	$result ['i_created_id'] = ( !empty( $this->loggedUserId ) ) ? $this->loggedUserId : '1'; //$this->session->userdata('user_id');
    	$result ['dt_created_at'] = $this->currentDateTime;
    	$result['v_ip'] = Request::ip();
    	return $result;
    }
    
    protected function updateDateTimeData( $skipIpAddress = false) {
    	$this->defaultData();
    	$result ['i_updated_id'] = $this->loggedUserId;
    	$result ['dt_updated_at'] = $this->currentDateTime;
    	$result['v_ip'] = Request::ip();
    	if( $skipIpAddress != false ){
    		unset($result['v_ip']);
    	}
    	return $result;
    }
   
    protected function deleteDateTimeData( $skipIpAddress = false ) {
    	$this->defaultData();
    	$result ['i_deleted_id'] = $this->loggedUserId;
    	$result ['dt_deleted_at'] = $this->currentDateTime;
    	$result ['t_is_active'] = config('constants.INACTIVE_STATUS');
    	$result ['t_is_deleted'] = config('constants.ACTIVE_STATUS');
    	$result['v_ip'] = Request::ip();
    	if( $skipIpAddress != false ){
    		unset($result['v_ip']);
    	}
    	return $result;
    }
    
    public  function insertTableData($tableName,$insertData){
    
    	$recordId = 0;
    	try{
    			
    		if (! empty ( $insertData )) {
    			$insertData = array_merge ( $this->insertDateTimeData () , $insertData );
    			
    			$recordId = DB::table($tableName)->insertGetId($insertData);
    		
    		}
    			
    			
    	}catch(\Exception $e){
    		$this->errorLogEntry(['action' => 'insert query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
    	}
    
    	return $recordId;
    }
    
    public  function updateTableData($tableName,$updateData,$whereData,$updateSequence = false){
    
    	$result = false;
    
    	 
    	try{
    		
    		$updateQuery = DB::table($tableName);
    		
    		if(!empty($whereData)){
    			foreach($whereData as $key=>$value){
    				$updateQuery->where($key, $value);
    			}
    			
    			$skipIpAddress = false;
    			if( isset($updateData['skip_ip_address']) && ( $updateData['skip_ip_address'] == true ) ){
    				$skipIpAddress = true;
    				unset($updateData['skip_ip_address']);
    			}
    			
    			if( $updateSequence != true ){
    				$updateData = array_merge ( $this->updateDateTimeData ($skipIpAddress) , $updateData );
    			}
    			
    			$result = $updateQuery->update($updateData);
    			
    			
    		}
    	}catch(\Exception $e){
    		$this->errorLogEntry(['action' => 'update query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
    	}
    	return $result;
    }
    
    public  function deleteTableData($tableName,$updateData,$whereData){
    
    	$result = false;
    
    	try{
    		$deleteQuery = DB::table($tableName);
    		
    		if(!empty($whereData)){
    			foreach($whereData as $key=>$value){
    				$deleteQuery->where($key, $value);
    			}
    			$skipIpAddress = false;
    			if( isset($updateData['skip_ip_address']) && ( $updateData['skip_ip_address'] == true ) ){
    				$skipIpAddress = true;
    				unset($updateData['skip_ip_address']);
    			}
    
    			$updateData = array_merge (  $this->deleteDateTimeData ($skipIpAddress) , $updateData );
    
    			$result = $deleteQuery->update($updateData);
    		}
    	}catch(\Exception $e){
    		$this->errorLogEntry(['action' => 'delete query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
    	}
    	 
    
    	return $result;
    }
    
	public function selectData($tableName, $selectColumns = ['*'],$whereData = [] , $likeData = [] , $additionData = []){
	    $result = [];
	    
	    try{
	    	$query = DB::table($tableName);
	    	
	    	$query->select($selectColumns);
	    	
	    	if( isset($whereData['getCount']) && ( $whereData['getCount'] != false ) ){
	    		$query->select(DB::raw("count(1) as record_count"));
	    		unset($whereData['getCount']);
	    	}
	    	
	    	$defaultWhere = [];
	    	$defaultWhere['t_is_deleted'] = config('constants.INACTIVE_STATUS');
	    	
	    	$whereData = (!empty($whereData) ? array_merge($defaultWhere,$whereData) : $defaultWhere);
	    	
		    if(!empty($whereData)){
				foreach($whereData as $key => $where){
					$key = trim($key);
					switch($key){
						case 'offset':
							$query->skip($where);
							break;
						case 'limit':
							$query->take($where);
							break;
						case 'having':
							$query->havingRaw($where);
							break;
						case 'null_column':
							$query->whereNull($where);
							break;
						case 'find_in_set':
							
							break;
						case 'null_not_column':
							if(is_array($where)){
								foreach($where as $k => $v){
									$query->whereNotNull($v);
								}
							} else {
								$query->whereNotNull($where);
							}
							break;
							
						case 'custom_function':
						
							break;
						case 'group_by':
						
							break;
						case 'order_by':
							break;
						default:
							if( preg_match('/[!=><]/' , $key ) != false ){
								$key = explode(" " , $key);
								$query->where($key[0] , $key[1] , $where );
							} else {
								$query->where($key , $where );
							}
							
							break;
					}
				}
			}
			
			if((!empty($whereData)) && array_key_exists('group_by', $whereData)){
				$query->groupBy($whereData['group_by']);
			}
			
			if((!empty($whereData)) && array_key_exists('find_in_set', $whereData)){
				$findInSetColumn = $whereData['find_in_set'];
				$query->whereRaw("find_in_set(".$findInSetColumn[1].",".$findInSetColumn[0].")");
			}
			
			if((!empty($whereData)) && array_key_exists('custom_function', $whereData)){
				$customerFunctionWhere = $whereData['custom_function'];
				//echo '<pre> customerFunctionWhere';print_r($customerFunctionWhere);
				if(!empty($customerFunctionWhere)){
					if(is_array($customerFunctionWhere)){
						foreach($customerFunctionWhere as $key => $customerFunction){
							$query->whereRaw( $customerFunction );
						}
					} else {
						$query->whereRaw( $customerFunctionWhere);
					}
				}
			}
			
			if((!empty($whereData)) && array_key_exists('order_by', $whereData)){
				$orderByColumn = $whereData['order_by'];
					
				if(!empty($orderByColumn)){
					foreach($orderByColumn as  $key => $value){
						$query->orderBy($key, (!empty($value) ? $value : 'DESC' ) );
					}
				}
					
				//$orderByArray = explode(" " , $orderByColumn );
				//$query->orderBy($orderByArray[0], (!empty($orderByArray[1]) ? $orderByArray[1] : 'DESC' ) );
			}
			
	    	if(!empty($likeData)){
				$query->where(function($q) use ($likeData){
					foreach($likeData as $key => $like){
						$q->orWhere($key, 'like', '%' .$like . '%');
					}
				});
			}
			
			if(!empty($additionData)){
				foreach($additionData as $key => $addition){
					switch($key){
						case 'orWhere':
							$query->where(function($q) use ($addition){
								$firstElement = array_slice($addition, 0, 1);
								$q->where(key($firstElement), $firstElement[key($firstElement)] );
								array_shift($addition);
								foreach( $addition as $k => $v ){
									$q->orWhere($k, $v);
								}
							});
							break;
						case 'whereIn':
							$query->whereIn($addition[0] , $addition[1] );
							break;
					}
				}
			}
	    	
	    	$result  = $query->get();
	    	/*
	    	$query = DB::getQueryLog();
	    	$query = end($query);
	    	print_r($query);die;
	    	*/
	    	return $result;
	    }catch(\Exception $e){
	    	$this->errorLogEntry(['action' => 'select query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
	    }
	    
	
	    return $result;
	}
	
	public function selectJoinData($tableName, $selectColumns = [], $joinData = [] , $whereData = [] , $likeData = [] , $additionData = []){
		$result = [];
		
		try{
			$query = DB::table($tableName);
			$select = "";
			$defaultWhere = ['t_is_deleted' => config('constants.INACTIVE_STATUS')];
			//$selectColumns = "CONCAT(um.v_firstname,' ',um.v_lastname) as full_name";
			//$selectColumns =  [ 'um.i_id' ,  DB::raw("CONCAT(um.v_firstname,' ',um.v_lastname)  AS fullname") ]  ;
			$query->select($selectColumns);
			
			if(!empty($joinData)){
				foreach($joinData as $joinInfo){
					if( (!is_array($joinInfo['condition']))  &&  ( strpos($joinInfo['condition'], 'and') !== false) ) {
						$allJoinCondition = explode("and" , $joinInfo['condition']);
						switch(  $joinInfo['type'] ){
							case 'left':
								$query->leftJoin($joinInfo['tableName'], function($join) use ($allJoinCondition) {
									foreach($allJoinCondition  as $allJoinCond){
										$explodeCondition = explode("=" ,$allJoinCond);
										
										if (strpos($explodeCondition[1], '.') !== false) {
											$join->on(trim($explodeCondition[0]), '=', trim($explodeCondition[1]));
										} else {
											$join->on(trim($explodeCondition[0]), '=', DB::raw(trim($explodeCondition[1])) );
										}
									}
								});
							break;
							default: 
								$query->join($joinInfo['tableName'], function($join) use ($allJoinCondition) {
									foreach($allJoinCondition  as $allJoinCond){
										$explodeCondition = explode("=" ,$joinInfo['condition']);
										if (strpos($explodeCondition[1], '.') !== false) {
											$join->on(trim($explodeCondition[0]), '=', trim($explodeCondition[1]));
										} else {
											$join->on(trim($explodeCondition[0]), '=', DB::raw(trim($explodeCondition[1])) );
										}
									}
								
								});
								break;
						}
						
					} else {
						
						if(is_array($joinInfo['condition'])){
							$customJoin = $joinInfo['condition']['custom'];
							$query->leftJoin($joinInfo['tableName'], function($join) use ($customJoin) {
								 $join->on( DB::raw($customJoin) , ">" , DB::raw("'0'") );
							});
						} else {
							$explodeCondition = explode("=" ,$joinInfo['condition']);
							$query->join($joinInfo['tableName'], trim($explodeCondition[0]) , '=' , trim($explodeCondition[1]) , !empty($joinInfo['type']) ? $joinInfo['type'] : '' );
						}
						
						
					}
				}
			}
			//echo '<pre>';print_r($whereData);
			if(!empty($whereData)){
				foreach($whereData as $key => $where){
					switch($key){
						case 'offset':
							$query->skip($where);
							break;
						case 'limit':
							$query->take($where);
							break;
						case 'order_by':
							
							break;
						case 'group_by':
								
							break;
						case 'having':
							$query->havingRaw($where);
							break;
						case 'find_in_set':
						
							break;
						case 'null_column':
							$query->whereNull($where);
							break;
						case 'custom_function':
						
							break;
						case 'null_not_column':
							if(is_array($where)){
								foreach($where as $k => $v){
									$query->whereNotNull($v);
								}
							} else {
								$query->whereNotNull($where);
							}
							break;
						default:
							//$query->where($key , $where );
							if( preg_match('/[!=><]/' , $key ) != false ){
								$key = explode(" " , $key);
								$query->where($key[0] , $key[1] , $where );
							} else {
								$query->where($key , $where );
							}
							break;
					}
				}
			}
			
			if((!empty($whereData)) && array_key_exists('order_by', $whereData)){
				$orderByColumn = $whereData['order_by'];
				
				if(!empty($orderByColumn)){
					foreach($orderByColumn as  $key => $value){
						$query->orderBy($key, (!empty($value) ? $value : 'DESC' ) );
					}
				}
				/*
				$orderByArray = explode(" " , $orderByColumn );
				$query->orderBy($orderByArray[0], (!empty($orderByArray[1]) ? $orderByArray[1] : 'DESC' ) );
				*/
			}
			
			if((!empty($whereData)) && array_key_exists('find_in_set', $whereData)){
				$findInSetColumn = $whereData['find_in_set'];
				$query->whereRaw("find_in_set(".$findInSetColumn[1].",".$findInSetColumn[0].")");
			}
			
			if((!empty($whereData)) && array_key_exists('custom_function', $whereData)){
				$customerFunctionWhere = $whereData['custom_function'];
				//echo '<pre> customerFunctionWhere';print_r($customerFunctionWhere);
				if(!empty($customerFunctionWhere)){
					if(is_array($customerFunctionWhere)){
						foreach($customerFunctionWhere as $key => $customerFunction){
							$query->whereRaw( $customerFunction );
						}	
					} else {
						$query->whereRaw( $customerFunctionWhere);
					}
				}
			}
			
			//$query->whereRaw("date_format(l.v_closing_date,'%Y-%m') = ? " , [ '2020-03' ] );
			
			
			
			if((!empty($whereData)) && array_key_exists('group_by', $whereData)){
				$query->groupBy( $whereData['group_by'] );
			}
			
			
			
			if(!empty($likeData)){
				$query->where(function($q) use ($likeData){
					foreach($likeData as $key => $like){
						$q->orWhere($key, 'like', '%' .$like . '%');
					}
				});
			}
			
			if(!empty($additionData)){
				foreach($additionData as $key => $addition){
					switch($key){
						case 'orWhere':
							$query->where(function($q) use ($addition){
								$firstElement = array_slice($addition, 0, 1);
								$q->where(key($firstElement), $firstElement[key($firstElement)] );
								array_shift($addition);
								foreach( $addition as $k => $v ){
									$q->orWhere($k, $v);
								}
							});
							break;
						case 'whereIn':
							$query->whereIn($addition[0] , $addition[1] );
							break;
					}
				}
			}
			//dd($query);
			$result  = $query->get();
			//dd($result);
			/*
			$query = DB::getQueryLog();
			$query = end($query);
			print_r($query);die;
			*/
			//dd($result);
			return $result;
		}catch(\Exception $e){
			$this->errorLogEntry(['action' => 'select join query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
		}
		 
	
		return $result;
	}
	
	public function getSingleRecordById($tableName,$selectColumns = ['*'],$whereData = [], $likeData = [], $additionData = []){
		$result = [];
		 
		try{
			$query = DB::table($tableName);
	
			$query->select($selectColumns);
			
			$defaultWhere = [];
			$defaultWhere['t_is_deleted'] = config('constants.INACTIVE_STATUS');
			
			$whereData = (!empty($whereData) ? array_merge($defaultWhere,$whereData) : $defaultWhere);
			
			if(!empty($whereData)){
				foreach($whereData as $key => $where){
					switch($key){
						case 'offset':
							$query->skip($where);
							break;
						case 'limit':
							$query->take($where);
							break;
						case 'null_column':
							$query->whereNull($where);
							break;
						case 'null_not_column':
							if(is_array($where)){
								foreach($where as $k => $v){
									$query->whereNotNull($v);
								}
							} else {
								$query->whereNotNull($where);
							}
							break;
						case 'group_by':
						
							break;
						case 'custom_function':
							break;
						case 'find_in_set':
						
							break;
						case 'order_by':
							break;
						default:
							if( preg_match('/[!=><]/' , $key ) != false ){
								$key = explode(" " , $key);
								$query->where($key[0] , $key[1] , $where );
							} else {
								$query->where($key , $where );
							}
							break;
					}
				}
			}
			
			if((!empty($whereData)) && array_key_exists('order_by', $whereData)){
					$orderByColumn = $whereData['order_by'];
					
				if(!empty($orderByColumn)){
					foreach($orderByColumn as  $key => $value){
						$query->orderBy($key, (!empty($value) ? $value : 'DESC' ) );
					}
				}
				/*
				$orderByArray = explode(" " , $orderByColumn );
				$query->orderBy($orderByArray[0], (!empty($orderByArray[1]) ? $orderByArray[1] : 'DESC' ) );
				*/
			}
			
			if((!empty($whereData)) && array_key_exists('find_in_set', $whereData)){
				$findInSetColumn = $whereData['find_in_set'];
				$query->whereRaw("find_in_set(".$findInSetColumn[1].",".$findInSetColumn[0].")");
			}
			
			if((!empty($whereData)) && array_key_exists('group_by', $whereData)){
				$query->groupBy($whereData['group_by']);
			}
			
			if((!empty($whereData)) && array_key_exists('custom_function', $whereData)){
				$customerFunctionWhere = $whereData['custom_function'];
					
				if(!empty($customerFunctionWhere)){
					if(is_array($customerFunctionWhere)){
						foreach($customerFunctionWhere as $key => $customerFunction){
							$query->whereRaw( $key , $customerFunction );
						}
					} else {
						$query->whereRaw( $customerFunctionWhere);
					}
				}
			}
				
			if(!empty($likeData)){
				$query->where(function($q) use ($likeData){
					foreach($likeData as $key => $like){
						$q->orWhere($key, 'like', '%' .$like . '%');
					}
				});
			}
			
			if(!empty($additionData)){
				foreach($additionData as $key => $addition){
					switch($key){
						case 'orWhere':
							$query->where(function($q) use ($addition){
								$firstElement = array_slice($addition, 0, 1);
								$q->where(key($firstElement), $firstElement[key($firstElement)] );
								array_shift($addition);
								foreach( $addition as $k => $v ){
									$q->orWhere($k, $v);
								}
							});
							break;
						case 'whereIn':
							$query->whereIn($addition[0] , $addition[1] );
							break;
					}
				}
			}
	
			$result  = $query->first();
			return $result;
	
		}catch(\Exception $e){
			$this->errorLogEntry(['action' => 'select single record query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
		}
		return $result;
	}
	
	public function getSingleRecordWithJoinById($tableName,$selectColumns = [],$joinData = [],$whereData = [] , $likeData = [] , $additionData = []){
		$result = [];
		
		try{
			$query = DB::table($tableName);
	
			$query->select($selectColumns);
			
		if(!empty($joinData)){
				foreach($joinData as $joinInfo){
					
				if( (!is_array($joinInfo['condition']))  &&  ( strpos($joinInfo['condition'], 'and') !== false) ) {
						$allJoinCondition = explode("and" , $joinInfo['condition']);
						switch(  $joinInfo['type'] ){
							case 'left':
								$query->leftJoin($joinInfo['tableName'], function($join) use ($allJoinCondition) {
									foreach($allJoinCondition  as $allJoinCond){
										$explodeCondition = explode("=" ,$allJoinCond);
										
										if (strpos($explodeCondition[1], '.') !== false) {
											$join->on(trim($explodeCondition[0]), '=', trim($explodeCondition[1]));
										} else {
											$join->on(trim($explodeCondition[0]), '=', DB::raw(trim($explodeCondition[1])) );
										}
									}
								});
							break;
							default: 
								$query->join($joinInfo['tableName'], function($join) use ($allJoinCondition) {
									foreach($allJoinCondition  as $allJoinCond){
										$explodeCondition = explode("=" ,$joinInfo['condition']);
										if (strpos($explodeCondition[1], '.') !== false) {
											$join->on(trim($explodeCondition[0]), '=', trim($explodeCondition[1]));
										} else {
											$join->on(trim($explodeCondition[0]), '=', DB::raw(trim($explodeCondition[1])) );
										}
									}
								
								});
								break;
						}
						
					} else {
						
						if(is_array($joinInfo['condition'])){
							$customJoin = $joinInfo['condition']['custom'];
							$query->leftJoin($joinInfo['tableName'], function($join) use ($customJoin) {
								 $join->on( DB::raw($customJoin) , ">" , DB::raw("'0'") );
							});
						} else {
							$explodeCondition = explode("=" ,$joinInfo['condition']);
							$query->join($joinInfo['tableName'], trim($explodeCondition[0]) , '=' , trim($explodeCondition[1]) , !empty($joinInfo['type']) ? $joinInfo['type'] : '' );
						}
						
						
					}
					
					
					
				}
			}
			
			if(!empty($whereData)){
				foreach($whereData as $key => $where){
					switch($key){
						case 'offset':
							$query->skip($where);
							break;
						case 'limit':
							$query->take($where);
							break;
						case 'custom_function':
							break;
						case 'group_by':
						
							break;
						case 'order_by':
							break;
						default:
							if( preg_match('/[!=><]/' , $key ) != false ){
								$key = explode(" " , $key);
								$query->where($key[0] , $key[1] , $where );
							} else {
								$query->where($key , $where );
							}
							break;
					}
				}
			}
			
			if((!empty($whereData)) && array_key_exists('order_by', $whereData)){
				$orderByColumn = $whereData['order_by'];
			
				if(!empty($orderByColumn)){
					foreach($orderByColumn as  $key => $value){
						$query->orderBy($key, (!empty($value) ? $value : 'DESC' ) );
					}
				}
			
				//$orderByArray = explode(" " , $orderByColumn );
				//$query->orderBy($orderByArray[0], (!empty($orderByArray[1]) ? $orderByArray[1] : 'DESC' ) );
			}
			
			if((!empty($whereData)) && array_key_exists('custom_function', $whereData)){
				$customerFunctionWhere = $whereData['custom_function'];
			
				if(!empty($customerFunctionWhere)){
					if(is_array($customerFunctionWhere)){
						foreach($customerFunctionWhere as $key => $customerFunction){
							$query->whereRaw( $key , $customerFunction );
						}	
					} else {
						$query->whereRaw( $customerFunctionWhere);
					}
				}
			}
			
			
			if((!empty($whereData)) && array_key_exists('group_by', $whereData)){
				//$query->groupBy($whereData['group_by']);
				
				$query->groupBy( $whereData['group_by'] );
			}
			
			if(!empty($likeData)){
				$query->where(function($q) use ($likeData){
					foreach($likeData as $key => $like){
						$q->orWhere($key, 'like', '%' .$like . '%');
					}
				});
			}
	
			if(!empty($additionData)){
				foreach($additionData as $key => $addition){
					switch($key){
						case 'orWhere':
							$query->where(function($q) use ($addition){
								$firstElement = array_slice($addition, 0, 1);
								$q->where(key($firstElement), $firstElement[key($firstElement)] );
								array_shift($addition);
								foreach( $addition as $k => $v ){
									$q->orWhere($k, $v);
								}
							});
							break;
						case 'whereIn':
							$query->whereIn($addition[0] , $addition[1] );
							break;
					}
				}
			}
			
			$result  = $query->first();
			
			return $result;
		}catch(\Exception $e){
			$this->errorLogEntry(['action' => 'single join query' , 'data' => '' , 'error_message' => $e->getMessage() , 'file' => $e->getFile() , 'line' => $e->getLine()]);
		}
		 
		 
	
		return $result;
	}
	
	public function manageWhere($whereData , $query){
		

		if(!empty($whereData)){
			foreach($whereData as $key => $where){
				switch($key){
					case 'offset':
						$query->skip($where);
						break;
					case 'limit':
						$query->take($where);
						break;
					case 'order_by':
						break;
					default:
						if( preg_match('/[!=><]/' , $key ) != false ){
							$key = explode(" " , $key);
							$query->where($key[0] , $key[1] , $where );
						} else {
							$query->where($key , $where );
						}
						break;
				}
			}
		}
		
		if((!empty($whereData)) && array_key_exists('order_by', $whereData)){
			$orderByColumn = $whereData['order_by'];
			
			if(!empty($orderByColumn)){
				foreach($orderByColumn as  $key => $value){
					$query->orderBy($key, (!empty($value) ? $value : 'DESC' ) );
				}
			}
		}
		
		
		return $query;
		
	}
	
	public function manageLike($likeData , $query){
	
	
		if(!empty($likeData)){
			$query->where(function($q) use ($likeData){
				foreach($likeData as $key => $like){
					$q->orWhere($key, 'like', '%' .$like . '%');
				}
			});
			
		}
	
		return $query;
	
	}
	
	public function getUserDetail( $whereData = [] , $likeData = [] , $additionalData = [] ){
			
		if(isset($whereData['singleRecord'])){
			$this->singleRecord = true;
			unset($whereData['singleRecord']);
		} else {
			$this->singleRecord = false;
		}
	
		$defaultWhere = [];
		$defaultWhere['lm.t_is_deleted'] = config('constants.INACTIVE_STATUS');
		
		$tableName = config('constants.LOGIN_TABLE'). ' as lm';
			
		$selectData = [
				'lm.i_id',
				'lm.v_name',
				'lm.v_email',
				'lm.t_is_active',
				'lm.v_mobile',
				'lm.v_role',
		];
	
		
		$whereData = (!empty($whereData) ? array_merge( $defaultWhere , $whereData) : $defaultWhere );
			
		//DB::enableQueryLog();
		if( $this->singleRecord == true ){
			$data = $this->getSingleRecordById( $tableName, $selectData,  $whereData, $likeData, $additionalData );
		} else {
			$data = $this->selectData( $tableName, $selectData,   $whereData, $likeData, $additionalData );
		}
		
		//$query = DB::getQueryLog();
		//$query = end($query);
		//print_r($query);die;
			
		return $data;
			
	}
	
	public static function last_query(){
	
		$query = DB::getQueryLog();
		$query = end($query);
		$last_query = self::bindDataToQuery($query);
		return $last_query;
	
	}
	
	protected static function bindDataToQuery($queryItem){
		$query = $queryItem['query'];
		$bindings = $queryItem['bindings'];
		$arr = explode('?',$query);
		$res = '';
		foreach($arr as $idx => $ele){
			if($idx < count($arr) - 1){
				$res = $res.$ele."'".$bindings[$idx]."'";
			}
		}
		$res = $res.$arr[count($arr) -1];
		return $res;
	}
	
	
	
	public function multipleSearch( $fieldData , $columnName , $condition = 'OR'){
		$searchRegion = explode("," , $fieldData );
		$customWhere = ' ( ';
		foreach($searchRegion as $region){
			$customWhere.= "find_in_set(  '".$region."' , ".$columnName." ) ".$condition." ";
		}
		$customWhere = rtrim($customWhere , $condition.' ');
		$customWhere .= ' ) ';
		return $customWhere;
	}
	
	public function getNextSequence($tableName, $where = []){
		$count = 1;
		$result = $this->getSingleRecordById($tableName, [DB::raw('max(i_sequence) as result')], $where);	
		
		if (!empty($result)) {
			$count = $result->result + 1;
		}
			
		return $count;
	}
	
	public function commonWhereData($query , $whereData = [] , $likeData = [] , $additionalData = [] ){
		if(!empty($whereData)){
			foreach($whereData as $key => $where){
				switch($key){
					case 'offset':
						$query->skip($where);
						break;
					case 'limit':
						$query->take($where);
						break;
					case 'where_date':
						if (is_array($where)) {
							foreach ($where as $value) {
								$param = explode(" ", $value);
								if (isset($param) && !empty($param) && count($param) > 0) {
									if (count($param) > 2) {
										$query->whereDate($param[0], $param[1], $param[2]);
									} else {
										$query->whereDate($param[0], $param[1]);
									}
								}
							}
						} else {
							$param = explode(" ", $where);
							if (isset($param) && !empty($param) && count($param) > 0) {
								if (count($param) > 2) {
									$query->whereDate($param[0], $param[1], $param[2]);
								} else {
									$query->whereDate($param[0], $param[1]);
								}
							}
						}
						break;
					case 'whereHas':
						if (is_array($where) && count($where) == 3) {
							$wherehas = isset($where[0]) && !empty($where[0]) ? $where[0] : '';
							$columnSearch = isset($where[1]) && !empty($where[1]) ? $where[1] : '';
							$keySearch = isset($where[2]) && checkNotEmptyString($where[2]) ? $where[2] : '';
							if (isset($wherehas) && !empty($wherehas) && isset($columnSearch) && !empty($columnSearch)) {
								$query->whereHas($wherehas, function ($query) use ($keySearch, $columnSearch) {
									$query->where($columnSearch, $keySearch);
								});
							}
						}
						break;
					case 'order_by':
							
						break;
					case 'group_by':
	
						break;
					case 'having':
						$query->havingRaw($where);
						break;
					case 'find_in_set':
	
						break;
					case 'singleRecord':
	
						break;
					case 'custom_function':
	
						break;
					case 'null_column':
						$query->whereNull($where);
						break;
							
					case 'null_not_column':
						if(is_array($where)){
							foreach($where as $k => $v){
								$query->whereNotNull($v);
							}
						} else {
							$query->whereNotNull($where);
						}
						break;
					default:
						//$query->where($key , $where );
						if( preg_match('/[!=><]/' , $key ) != false ){
							$key = explode(" " , $key);
							$query->where($key[0] , $key[1] , $where );
						} else {
							$query->where($key , $where );
						}
						break;
				}
			}
		}
			
		if((!empty($whereData)) && array_key_exists('order_by', $whereData)){
			$orderByColumn = $whereData['order_by'];
			if(!empty($orderByColumn)){
				foreach($orderByColumn as  $key => $value){
					$query->orderBy($key, (!empty($value) ? $value : 'DESC' ) );
				}
			}
		}
			
		if((!empty($whereData)) && array_key_exists('find_in_set', $whereData)){
			$findInSetColumn = $whereData['find_in_set'];
			$query->whereRaw("find_in_set(".$findInSetColumn[1].",".$findInSetColumn[0].")");
		}
			
		if((!empty($whereData)) && array_key_exists('custom_function', $whereData)){
			$customerFunctionWhere = $whereData['custom_function'];
			if(!empty($customerFunctionWhere)){
				if(is_array($customerFunctionWhere)){
					foreach($customerFunctionWhere as $key => $customerFunction){
						$query->whereRaw( $customerFunction );
					}
				} else {
					$query->whereRaw( $customerFunctionWhere);
				}
			}
		}
			
		if((!empty($whereData)) && array_key_exists('group_by', $whereData)){
			$query->groupBy( $whereData['group_by'] );
		}
	
		if (isset($likeData) && !empty($likeData)){
			$searchString = ( isset($likeData['value']) ? $likeData['value'] : null );
	
			$allLikeColumns = ( isset($likeData['columnName']) ? $likeData['columnName'] : [] );
				
			$relationShipColumns = ( isset($likeData['relationShip']) ? $likeData['relationShip'] : [] );
				
			if(!empty($relationShipColumns)){
				$query->where(function ($q1) use($searchString,$relationShipColumns,$allLikeColumns){
					foreach($relationShipColumns as $relationShipColumn){
						$relationShipName = ( isset($relationShipColumn['relationShipName']) ? $relationShipColumn['relationShipName'] : "" );
						$relationColumns = ( isset($relationShipColumn['relationShipColumns']) ? $relationShipColumn['relationShipColumns'] : [] );
						if( (!empty($relationColumns)) && (!empty($relationShipName)) ){
							$q1->whereHas($relationShipName, function($query) use($searchString,$relationColumns) {
								$allLikeColumns = $relationColumns;
								$query->where(function($q) use ($allLikeColumns,$searchString){
									foreach($allLikeColumns as $key => $allLikeColumn){
										$q->orWhere($allLikeColumn, 'like', "%" .$searchString . "%");
									}
								});
							});
						}
					}
						
					if( (checkNotEmptyString($searchString)) && (!empty($allLikeColumns)) ){
						$q1->orWhere(function($q) use ($searchString,$allLikeColumns){
							foreach($allLikeColumns as $key => $allLikeColumn){
								$q->orWhere($allLikeColumn, 'like', "%" .$searchString . "%");
							}
						});
					}
				});
			} else {
				if( (checkNotEmptyString($searchString)) && (!empty($allLikeColumns)) ){
					$query->where(function($q) use ($allLikeColumns,$searchString){
						foreach($allLikeColumns as $key => $allLikeColumn){
							$q->orWhere($allLikeColumn, 'like', "%" .$searchString . "%");
						}
					});
				}
			}
		}
	
		return $query;
	}
}
