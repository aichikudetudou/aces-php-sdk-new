<?php
namespace AdsDspRtbadFacedCampaignCreateCampaign;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.campaign.dto.CampaignCreateCommand";
    }
        
    private $scenarioType;
    
    public function setScenarioType($scenarioType){
        $this->params['scenarioType'] = $scenarioType;
    }

    public function getScenarioType(){
        return $this->scenarioType;
    }
            
    private $dpaMode;
    
    public function setDpaMode($dpaMode){
        $this->params['dpaMode'] = $dpaMode;
    }

    public function getDpaMode(){
        return $this->dpaMode;
    }
            
    private $dayBudget;
    
    public function setDayBudget($dayBudget){
        $this->params['dayBudget'] = $dayBudget;
    }

    public function getDayBudget(){
        return $this->dayBudget;
    }
            
    private $campaignType;
    
    public function setCampaignType($campaignType){
        $this->params['campaignType'] = $campaignType;
    }

    public function getCampaignType(){
        return $this->campaignType;
    }
            
    private $playPlatform;
    
    public function setPlayPlatform($playPlatform){
        $this->params['playPlatform'] = $playPlatform;
    }

    public function getPlayPlatform(){
        return $this->playPlatform;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $timeRangePriceCoef;
    
    public function setTimeRangePriceCoef($timeRangePriceCoef){
        $this->params['timeRangePriceCoef'] = $timeRangePriceCoef;
    }

    public function getTimeRangePriceCoef(){
        return $this->timeRangePriceCoef;
    }
            
    private $noPurchasePeriod;
    
    public function setNoPurchasePeriod($noPurchasePeriod){
        $this->params['noPurchasePeriod'] = $noPurchasePeriod;
    }

    public function getNoPurchasePeriod(){
        return $this->noPurchasePeriod;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $mediaResourceType;
    
    public function setMediaResourceType($mediaResourceType){
        $this->params['mediaResourceType'] = $mediaResourceType;
    }

    public function getMediaResourceType(){
        return $this->mediaResourceType;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $businessType;
    
    public function setBusinessType($businessType){
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType(){
        return $this->businessType;
    }
            
    private $newGuestScope;
    
    public function setNewGuestScope($newGuestScope){
        $this->params['newGuestScope'] = $newGuestScope;
    }

    public function getNewGuestScope(){
        return $this->newGuestScope;
    }
            
    private $promotedTargetType;
    
    public function setPromotedTargetType($promotedTargetType){
        $this->params['promotedTargetType'] = $promotedTargetType;
    }

    public function getPromotedTargetType(){
        return $this->promotedTargetType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>