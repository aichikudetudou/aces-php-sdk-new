<?php
namespace AdsIbgHaitouJosServiceNormalItemUpdate;
class BiddingInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.ht.domain.vo.InputFeeVO";
    }
        
    private $deliveryTarget;
    
    public function setDeliveryTarget($deliveryTarget){
        $this->params['deliveryTarget'] = $deliveryTarget;
    }

    public function getDeliveryTarget(){
        return $this->deliveryTarget;
    }
            
    private $biddingType;
    
    public function setBiddingType($biddingType){
        $this->params['biddingType'] = $biddingType;
    }

    public function getBiddingType(){
        return $this->biddingType;
    }
            
    private $biddingTarget;
    
    public function setBiddingTarget($biddingTarget){
        $this->params['biddingTarget'] = $biddingTarget;
    }

    public function getBiddingTarget(){
        return $this->biddingTarget;
    }
            
    private $biddingControlType;
    
    public function setBiddingControlType($biddingControlType){
        $this->params['biddingControlType'] = $biddingControlType;
    }

    public function getBiddingControlType(){
        return $this->biddingControlType;
    }
            
    private $maxClickBid;
    
    public function setMaxClickBid($maxClickBid){
        $this->params['maxClickBid'] = $maxClickBid;
    }

    public function getMaxClickBid(){
        return $this->maxClickBid;
    }
            
    private $premiumCoef;
    
    public function setPremiumCoef($premiumCoef){
        $this->params['premiumCoef'] = $premiumCoef;
    }

    public function getPremiumCoef(){
        return $this->premiumCoef;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>