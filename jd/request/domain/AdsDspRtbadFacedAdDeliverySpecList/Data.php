<?php
namespace AdsDspRtbadFacedAdDeliverySpecList;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.trafficstrategy.dto.DeliverySpecQuery";
    }
        
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>