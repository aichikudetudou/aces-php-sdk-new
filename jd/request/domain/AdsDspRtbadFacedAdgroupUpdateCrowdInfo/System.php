<?php
namespace AdsDspRtbadFacedAdgroupUpdateCrowdInfo;
class System{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.common.dto.ParamExt";
    }
        
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $josRemoteIp;
    
    public function setJosRemoteIp($josRemoteIp){
        $this->params['josRemoteIp'] = $josRemoteIp;
    }

    public function getJosRemoteIp(){
        return $this->josRemoteIp;
    }
            
    private $josApiName;
    
    public function setJosApiName($josApiName){
        $this->params['josApiName'] = $josApiName;
    }

    public function getJosApiName(){
        return $this->josApiName;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $authType;
    
    public function setAuthType($authType){
        $this->params['authType'] = $authType;
    }

    public function getAuthType(){
        return $this->authType;
    }
            
    private $accessPin;
    
    public function setAccessPin($accessPin){
        $this->params['accessPin'] = $accessPin;
    }

    public function getAccessPin(){
        return $this->accessPin;
    }
            
    private $requestFrom;
    
    public function setRequestFrom($requestFrom){
        $this->params['requestFrom'] = $requestFrom;
    }

    public function getRequestFrom(){
        return $this->requestFrom;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>