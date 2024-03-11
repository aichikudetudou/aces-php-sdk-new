<?php
namespace AdsDspRtbadFacedAdUpdateAdStatus;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.ad.dto.AdStatusUpdateCommand";
    }
        
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>