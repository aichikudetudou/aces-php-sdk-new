<?php
namespace AdsDspRtbGetSkuDetailInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.SkuQueryVO";
    }
        
    private $putType;
    
    public function setPutType($putType){
        $this->params['putType'] = $putType;
    }

    public function getPutType(){
        return $this->putType;
    }
            
    private $skuIds;
                        
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }
                    
            
    private $isSpu;
    
    public function setIsSpu($isSpu){
        $this->params['isSpu'] = $isSpu;
    }

    public function getIsSpu(){
        return $this->isSpu;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>