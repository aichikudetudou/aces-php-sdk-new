<?php
namespace AdsDspRtbTpBatchUpdatePosPackageStatusV2;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.PosPackageVO";
    }
        
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
            
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $enable;
    
    public function setEnable($enable){
        $this->params['enable'] = $enable;
    }

    public function getEnable(){
        return $this->enable;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>