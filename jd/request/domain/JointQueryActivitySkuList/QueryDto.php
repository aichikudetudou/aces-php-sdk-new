<?php
namespace JointQueryActivitySkuList;
class QueryDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.joint.client.dto.ActivityQueryDTO";
    }
        
    private $jointActivityId;
    
    public function setJointActivityId($jointActivityId){
        $this->params['jointActivityId'] = $jointActivityId;
    }

    public function getJointActivityId(){
        return $this->jointActivityId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>