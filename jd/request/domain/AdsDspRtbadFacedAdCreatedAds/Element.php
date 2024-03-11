<?php
namespace AdsDspRtbadFacedAdCreatedAds;
class Element{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.ad.dto.MaterialElementDto";
    }
        
    private $content;
    
    public function setContent($content){
        $this->params['content'] = $content;
    }

    public function getContent(){
        return $this->content;
    }
            
    private $subType;
    
    public function setSubType($subType){
        $this->params['subType'] = $subType;
    }

    public function getSubType(){
        return $this->subType;
    }
            
    private $elementType;
    
    public function setElementType($elementType){
        $this->params['elementType'] = $elementType;
    }

    public function getElementType(){
        return $this->elementType;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>