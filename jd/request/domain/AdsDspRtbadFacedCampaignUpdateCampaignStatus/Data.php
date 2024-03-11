<?php
namespace AdsDspRtbadFacedCampaignUpdateCampaignStatus;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.campaign.dto.CampaignStatusUpdateCommand";
    }
        
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $campaignIds;
                        
    public function setCampaignIds($campaignIds){
        $this->params['campaignIds'] = $campaignIds;
    }
                    
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>