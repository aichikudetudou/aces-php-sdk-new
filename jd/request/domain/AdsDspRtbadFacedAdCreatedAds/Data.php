<?php
namespace AdsDspRtbadFacedAdCreatedAds;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.ad.dto.AdCreateCmd";
    }
        
    private $modifyMapping;
                                        
    public function setModifyMapping($modifyMapping){
        $size = count($modifyMapping);
        for ($i=0; $i<$size; $i++){
            $modifyMapping [$i] = $modifyMapping [$i] ->getInstance();
        }
        $this->params['modifyMapping'] = $modifyMapping;
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