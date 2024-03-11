<?php
namespace AdsDspRtbadFacedCampaignUpdateCampaignDate;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.campaign.dto.CampaignDeliveryScheduleUpdateCommand";
    }
        
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>