<?php
class AdsIbgHaitouJosServiceNormalUpdateBudgetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.HaitouJosService.normalUpdateBudget";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $dayBudget;
    	                        
	public function setDayBudget($dayBudget){
		$this->dayBudget = $dayBudget;
         $this->apiParas["dayBudget"] = $dayBudget;
	}

	public function getDayBudget(){
	  return $this->dayBudget;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $startDate;
                              public function setStartDate($startDate ){
                 $this->startDate=$startDate;
                 $this->apiParas["startDate"] = $startDate;
              }

              public function getStartDate(){
              	return $this->startDate;
              }
                                                                                                                                                                                                                                                                                                                       private $endDate;
                              public function setEndDate($endDate ){
                 $this->endDate=$endDate;
                 $this->apiParas["endDate"] = $endDate;
              }

              public function getEndDate(){
              	return $this->endDate;
              }
                                                                                                                                                                                                                                                                                                                       private $budget;
                              public function setBudget($budget ){
                 $this->budget=$budget;
                 $this->apiParas["budget"] = $budget;
              }

              public function getBudget(){
              	return $this->budget;
              }
                                                                                                                                                                                        		                                    	                        	                        	                        	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                        	                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                        	                            }





        
 

