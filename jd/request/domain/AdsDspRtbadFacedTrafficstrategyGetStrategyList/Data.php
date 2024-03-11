<?php
namespace AdsDspRtbadFacedTrafficstrategyGetStrategyList;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.common.dto.TrafficStrategyQuery";
    }
        
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $businessType;
    
    public function setBusinessType($businessType){
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType(){
        return $this->businessType;
    }
            
    private $mediaResourceType;
    
    public function setMediaResourceType($mediaResourceType){
        $this->params['mediaResourceType'] = $mediaResourceType;
    }

    public function getMediaResourceType(){
        return $this->mediaResourceType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>