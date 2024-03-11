<?php
namespace AdsDspRtbadFacedCampaignUpdateCampaignBudget;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.campaign.dto.CampaignBudgetUpdateCommand";
    }
        
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $dayBudget;
    
    public function setDayBudget($dayBudget){
        $this->params['dayBudget'] = $dayBudget;
    }

    public function getDayBudget(){
        return $this->dayBudget;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>