<?php
namespace AdsDspRtbadFacedAdgroupUpdateCrowdInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.adgroup.dto.AdGroupCrowdUpdateCommand";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $dmpCrowdSettings;
                                        
    public function setDmpCrowdSettings($dmpCrowdSettings){
        $size = count($dmpCrowdSettings);
        for ($i=0; $i<$size; $i++){
            $dmpCrowdSettings [$i] = $dmpCrowdSettings [$i] ->getInstance();
        }
        $this->params['dmpCrowdSettings'] = $dmpCrowdSettings;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>