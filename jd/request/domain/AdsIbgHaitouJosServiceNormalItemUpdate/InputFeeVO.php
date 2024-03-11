<?php
namespace AdsIbgHaitouJosServiceNormalItemUpdate;
class InputFeeVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.ht.domain.vo.InputFeeVO";
    }
        
    private $biddingInfo;
            
    public function setBiddingInfo($biddingInfo){
        $this->params['biddingInfo'] = $biddingInfo ->getInstance();
    }
        
            
    private $budget;
    
    public function setBudget($budget){
        $this->params['budget'] = $budget;
    }

    public function getBudget(){
        return $this->budget;
    }
            
    private $budgetType;
    
    public function setBudgetType($budgetType){
        $this->params['budgetType'] = $budgetType;
    }

    public function getBudgetType(){
        return $this->budgetType;
    }
            
    private $recommendFee;
    
    public function setRecommendFee($recommendFee){
        $this->params['recommendFee'] = $recommendFee;
    }

    public function getRecommendFee(){
        return $this->recommendFee;
    }
            
    private $searchFee;
    
    public function setSearchFee($searchFee){
        $this->params['searchFee'] = $searchFee;
    }

    public function getSearchFee(){
        return $this->searchFee;
    }
            
    private $wirelessRecommendFee;
    
    public function setWirelessRecommendFee($wirelessRecommendFee){
        $this->params['wirelessRecommendFee'] = $wirelessRecommendFee;
    }

    public function getWirelessRecommendFee(){
        return $this->wirelessRecommendFee;
    }
            
    private $wirelessSearchFee;
    
    public function setWirelessSearchFee($wirelessSearchFee){
        $this->params['wirelessSearchFee'] = $wirelessSearchFee;
    }

    public function getWirelessSearchFee(){
        return $this->wirelessSearchFee;
    }
            
    private $campaignId;
    
    public function setCampaignId($campaignId){
        $this->params['campaignId'] = $campaignId;
    }

    public function getCampaignId(){
        return $this->campaignId;
    }
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $specBrandCategoryJson;
    
    public function setSpecBrandCategoryJson($specBrandCategoryJson){
        $this->params['specBrandCategoryJson'] = $specBrandCategoryJson;
    }

    public function getSpecBrandCategoryJson(){
        return $this->specBrandCategoryJson;
    }
            
    private $discountPriceCoefList;
                        
    public function setDiscountPriceCoefList($discountPriceCoefList){
        $this->params['discountPriceCoefList'] = $discountPriceCoefList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>