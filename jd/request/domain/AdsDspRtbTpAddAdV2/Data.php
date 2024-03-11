<?php
namespace AdsDspRtbTpAddAdV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.AdVO";
    }
        
    private $customTitle;
    
    public function setCustomTitle($customTitle){
        $this->params['customTitle'] = $customTitle;
    }

    public function getCustomTitle(){
        return $this->customTitle;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $imgUrl;
    
    public function setImgUrl($imgUrl){
        $this->params['imgUrl'] = $imgUrl;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $materialType;
    
    public function setMaterialType($materialType){
        $this->params['materialType'] = $materialType;
    }

    public function getMaterialType(){
        return $this->materialType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>