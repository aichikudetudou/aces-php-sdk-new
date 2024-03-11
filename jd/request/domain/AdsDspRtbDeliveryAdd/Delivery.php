<?php
namespace AdsDspRtbDeliveryAdd;
class Delivery{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.DeliveryVO";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $categoryId;
    
    public function setCategoryId($categoryId){
        $this->params['categoryId'] = $categoryId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }
            
    private $categoryName;
    
    public function setCategoryName($categoryName){
        $this->params['categoryName'] = $categoryName;
    }

    public function getCategoryName(){
        return $this->categoryName;
    }
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
            
    private $brandName;
    
    public function setBrandName($brandName){
        $this->params['brandName'] = $brandName;
    }

    public function getBrandName(){
        return $this->brandName;
    }
            
    private $shopId;
    
    public function setShopId($shopId){
        $this->params['shopId'] = $shopId;
    }

    public function getShopId(){
        return $this->shopId;
    }
            
    private $matchingType;
    
    public function setMatchingType($matchingType){
        $this->params['matchingType'] = $matchingType;
    }

    public function getMatchingType(){
        return $this->matchingType;
    }
            
    private $mobilePrice;
    
    public function setMobilePrice($mobilePrice){
        $this->params['mobilePrice'] = $mobilePrice;
    }

    public function getMobilePrice(){
        return $this->mobilePrice;
    }
            
    private $priceGrade;
    
    public function setPriceGrade($priceGrade){
        $this->params['priceGrade'] = $priceGrade;
    }

    public function getPriceGrade(){
        return $this->priceGrade;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>