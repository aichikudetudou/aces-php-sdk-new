<?php
namespace AdsDspRtbadFacedCampaignQueryCampaignInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.campaign.dto.CampaignDetailQuery";
    }
        
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>