<?php
namespace AdsDspRtbadFacedAdgroupCreateAdGroup;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.adgroup.dto.AdGroupCreateCommand";
    }
        
    private $fee;
    
    public function setFee($fee){
        $this->params['fee'] = $fee;
    }

    public function getFee(){
        return $this->fee;
    }
            
    private $dmpCrowdSettings;
                                        
    public function setDmpCrowdSettings($dmpCrowdSettings){
        $size = count($dmpCrowdSettings);
        for ($i=0; $i<$size; $i++){
            $dmpCrowdSettings [$i] = $dmpCrowdSettings [$i] ->getInstance();
        }
        $this->params['dmpCrowdSettings'] = $dmpCrowdSettings;
    }
                                    
            
    private $biddingControlType;
    
    public function setBiddingControlType($biddingControlType){
        $this->params['biddingControlType'] = $biddingControlType;
    }

    public function getBiddingControlType(){
        return $this->biddingControlType;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $deliveryTarget;
    
    public function setDeliveryTarget($deliveryTarget){
        $this->params['deliveryTarget'] = $deliveryTarget;
    }

    public function getDeliveryTarget(){
        return $this->deliveryTarget;
    }
            
    private $trafficStrategyList;
                                        
    public function setTrafficStrategyList($trafficStrategyList){
        $size = count($trafficStrategyList);
        for ($i=0; $i<$size; $i++){
            $trafficStrategyList [$i] = $trafficStrategyList [$i] ->getInstance();
        }
        $this->params['trafficStrategyList'] = $trafficStrategyList;
    }
                                    
            
    private $newAreaIds;
                        
    public function setNewAreaIds($newAreaIds){
        $this->params['newAreaIds'] = $newAreaIds;
    }
                    
            
    private $marketType;
    
    public function setMarketType($marketType){
        $this->params['marketType'] = $marketType;
    }

    public function getMarketType(){
        return $this->marketType;
    }
            
    private $billingType;
    
    public function setBillingType($billingType){
        $this->params['billingType'] = $billingType;
    }

    public function getBillingType(){
        return $this->billingType;
    }
            
    private $biddingTarget;
    
    public function setBiddingTarget($biddingTarget){
        $this->params['biddingTarget'] = $biddingTarget;
    }

    public function getBiddingTarget(){
        return $this->biddingTarget;
    }
            
    private $dayBudget;
    
    public function setDayBudget($dayBudget){
        $this->params['dayBudget'] = $dayBudget;
    }

    public function getDayBudget(){
        return $this->dayBudget;
    }
            
    private $categoryIdList;
                        
    public function setCategoryIdList($categoryIdList){
        $this->params['categoryIdList'] = $categoryIdList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>