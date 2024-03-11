<?php
namespace JointQueryActivityByParam;
class JointActivitySecVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.joint.client.dto.JointActivitySecDTO";
    }
        
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $jointActivityId;
    
    public function setJointActivityId($jointActivityId){
        $this->params['jointActivityId'] = $jointActivityId;
    }

    public function getJointActivityId(){
        return $this->jointActivityId;
    }
            
    private $queryStatus;
                        
    public function setQueryStatus($queryStatus){
        $this->params['queryStatus'] = $queryStatus;
    }
                    
            
    private $offset;
    
    public function setOffset($offset){
        $this->params['offset'] = $offset;
    }

    public function getOffset(){
        return $this->offset;
    }
            
    private $activityName;
    
    public function setActivityName($activityName){
        $this->params['activityName'] = $activityName;
    }

    public function getActivityName(){
        return $this->activityName;
    }
            
    private $deliverySystemType;
    
    public function setDeliverySystemType($deliverySystemType){
        $this->params['deliverySystemType'] = $deliverySystemType;
    }

    public function getDeliverySystemType(){
        return $this->deliverySystemType;
    }
            
    private $queryType;
    
    public function setQueryType($queryType){
        $this->params['queryType'] = $queryType;
    }

    public function getQueryType(){
        return $this->queryType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>