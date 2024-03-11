<?php
namespace AdsDspRtbKuaicheProductgroupAddV2;
class Delivery{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.DeliveryVO";
    }
        
    private $matchingType;
    
    public function setMatchingType($matchingType){
        $this->params['matchingType'] = $matchingType;
    }

    public function getMatchingType(){
        return $this->matchingType;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $mobilePrice;
    
    public function setMobilePrice($mobilePrice){
        $this->params['mobilePrice'] = $mobilePrice;
    }

    public function getMobilePrice(){
        return $this->mobilePrice;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>