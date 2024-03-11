<?php
namespace AdsDspRtbadFacedAdgroupCreateAdGroup;
class TrafficStrategy{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.campaign.dto.TrafficStrategyDto";
    }
        
    private $sceneId;
    
    public function setSceneId($sceneId){
        $this->params['sceneId'] = $sceneId;
    }

    public function getSceneId(){
        return $this->sceneId;
    }
            
    private $strategyModel;
    
    public function setStrategyModel($strategyModel){
        $this->params['strategyModel'] = $strategyModel;
    }

    public function getStrategyModel(){
        return $this->strategyModel;
    }
            
    private $strategyId;
    
    public function setStrategyId($strategyId){
        $this->params['strategyId'] = $strategyId;
    }

    public function getStrategyId(){
        return $this->strategyId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>