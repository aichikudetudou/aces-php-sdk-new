<?php
namespace AdsDspRtbadFacedAdgroupGetAdGroup;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.adgroup.dto.AdGroupQuery";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>