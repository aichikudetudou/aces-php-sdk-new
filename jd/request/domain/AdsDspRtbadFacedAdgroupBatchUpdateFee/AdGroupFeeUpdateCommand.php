<?php
namespace AdsDspRtbadFacedAdgroupBatchUpdateFee;
class AdGroupFeeUpdateCommand{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.adgroup.dto.AdGroupFeeUpdateCommand";
    }
        
    private $fee;
    
    public function setFee($fee){
        $this->params['fee'] = $fee;
    }

    public function getFee(){
        return $this->fee;
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