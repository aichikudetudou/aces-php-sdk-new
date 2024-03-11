<?php
namespace AdsIbgHaitouJosServiceNormalUpdateBudget;
class OpenApiSysDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.platform.finance.component.janus.dto.OpenApiSysDto";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
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
            
    private $accessPin;
    
    public function setAccessPin($accessPin){
        $this->params['accessPin'] = $accessPin;
    }

    public function getAccessPin(){
        return $this->accessPin;
    }
            
    private $authType;
    
    public function setAuthType($authType){
        $this->params['authType'] = $authType;
    }

    public function getAuthType(){
        return $this->authType;
    }
            
    private $requestFrom;
    
    public function setRequestFrom($requestFrom){
        $this->params['requestFrom'] = $requestFrom;
    }

    public function getRequestFrom(){
        return $this->requestFrom;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
            
    private $tenantCode;
    
    public function setTenantCode($tenantCode){
        $this->params['tenantCode'] = $tenantCode;
    }

    public function getTenantCode(){
        return $this->tenantCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>