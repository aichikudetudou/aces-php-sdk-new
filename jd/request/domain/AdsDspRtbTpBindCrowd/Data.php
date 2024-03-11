<?php
namespace AdsDspRtbTpBindCrowd;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.dmp.DmpVO";
    }
        
    private $crowdVOS;
                                        
    public function setCrowdVOS($crowdVOS){
        $size = count($crowdVOS);
        for ($i=0; $i<$size; $i++){
            $crowdVOS [$i] = $crowdVOS [$i] ->getInstance();
        }
        $this->params['crowdVOS'] = $crowdVOS;
    }
                                    
            
    private $adGroupId;
    
    public function setAdGroupId($adGroupId){
        $this->params['adGroupId'] = $adGroupId;
    }

    public function getAdGroupId(){
        return $this->adGroupId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>