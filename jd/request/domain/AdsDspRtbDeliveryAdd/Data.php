<?php
namespace AdsDspRtbDeliveryAdd;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.DeliveryVO";
    }
        
    private $deliverys;
                                        
    public function setDeliverys($deliverys){
        $size = count($deliverys);
        for ($i=0; $i<$size; $i++){
            $deliverys [$i] = $deliverys [$i] ->getInstance();
        }
        $this->params['deliverys'] = $deliverys;
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