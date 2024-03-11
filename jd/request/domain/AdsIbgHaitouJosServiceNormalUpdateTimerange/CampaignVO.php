<?php
namespace AdsIbgHaitouJosServiceNormalUpdateTimerange;
class CampaignVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.ht.domain.vo.CampaignVO";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $discountPriceCoefList;
                        
    public function setDiscountPriceCoefList($discountPriceCoefList){
        $this->params['discountPriceCoefList'] = $discountPriceCoefList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>