<?php
namespace AdsDspRtbadFacedAdgroupUpdateCrowdInfo;
class Crowds{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.adgroup.dto.CrowdDTO";
    }
        
    private $crowdId;
    
    public function setCrowdId($crowdId){
        $this->params['crowdId'] = $crowdId;
    }

    public function getCrowdId(){
        return $this->crowdId;
    }
            
    private $isUsed;
    
    public function setIsUsed($isUsed){
        $this->params['isUsed'] = $isUsed;
    }

    public function getIsUsed(){
        return $this->isUsed;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>