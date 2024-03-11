<?php
namespace AdsDspRtbadFacedCampaignUpdateCampaignTimeRange;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.campaign.dto.CampaignTimeRangeUpdateCommand";
    }
        
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $timeRangePriceCoef;
    
    public function setTimeRangePriceCoef($timeRangePriceCoef){
        $this->params['timeRangePriceCoef'] = $timeRangePriceCoef;
    }

    public function getTimeRangePriceCoef(){
        return $this->timeRangePriceCoef;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>