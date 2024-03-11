<?php
namespace AdsDspRtbAdgroupQueryBidSuggest;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AutoBiddingVO";
    }
        
    private $automatedBiddingType;
    
    public function setAutomatedBiddingType($automatedBiddingType){
        $this->params['automatedBiddingType'] = $automatedBiddingType;
    }

    public function getAutomatedBiddingType(){
        return $this->automatedBiddingType;
    }
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $skuIds;
                        
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }
                    
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $biddingTarget;
    
    public function setBiddingTarget($biddingTarget){
        $this->params['biddingTarget'] = $biddingTarget;
    }

    public function getBiddingTarget(){
        return $this->biddingTarget;
    }
            
    private $businessType;
    
    public function setBusinessType($businessType){
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType(){
        return $this->businessType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>