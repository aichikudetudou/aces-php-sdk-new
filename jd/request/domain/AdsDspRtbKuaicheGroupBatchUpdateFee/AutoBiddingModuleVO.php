<?php
namespace AdsDspRtbKuaicheGroupBatchUpdateFee;
class AutoBiddingModuleVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AutoBiddingModuleVO";
    }
        
    private $dayCost;
    
    public function setDayCost($dayCost){
        $this->params['dayCost'] = $dayCost;
    }

    public function getDayCost(){
        return $this->dayCost;
    }
            
    private $tcpaMaxClickBid;
    
    public function setTcpaMaxClickBid($tcpaMaxClickBid){
        $this->params['tcpaMaxClickBid'] = $tcpaMaxClickBid;
    }

    public function getTcpaMaxClickBid(){
        return $this->tcpaMaxClickBid;
    }
            
    private $biddingControlType;
    
    public function setBiddingControlType($biddingControlType){
        $this->params['biddingControlType'] = $biddingControlType;
    }

    public function getBiddingControlType(){
        return $this->biddingControlType;
    }
            
    private $automatedBiddingType;
    
    public function setAutomatedBiddingType($automatedBiddingType){
        $this->params['automatedBiddingType'] = $automatedBiddingType;
    }

    public function getAutomatedBiddingType(){
        return $this->automatedBiddingType;
    }
            
    private $deliveryTarget;
    
    public function setDeliveryTarget($deliveryTarget){
        $this->params['deliveryTarget'] = $deliveryTarget;
    }

    public function getDeliveryTarget(){
        return $this->deliveryTarget;
    }
            
    private $tcpaBid;
    
    public function setTcpaBid($tcpaBid){
        $this->params['tcpaBid'] = $tcpaBid;
    }

    public function getTcpaBid(){
        return $this->tcpaBid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>