<?php
namespace AdsDspRtbDeliveryDelete;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dsp.platform.gateway.api.vo.common.DeliveryVO";
    }
        
    private $productDeliveryMatchingIdS;
                        
    public function setProductDeliveryMatchingIdS($productDeliveryMatchingIdS){
        $this->params['productDeliveryMatchingIdS'] = $productDeliveryMatchingIdS;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>