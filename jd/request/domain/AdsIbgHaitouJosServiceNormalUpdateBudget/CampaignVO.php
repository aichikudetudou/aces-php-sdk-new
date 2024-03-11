<?php
namespace AdsIbgHaitouJosServiceNormalUpdateBudget;
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
            
    private $dayBudget;
    
    public function setDayBudget($dayBudget){
        $this->params['dayBudget'] = $dayBudget;
    }

    public function getDayBudget(){
        return $this->dayBudget;
    }
            
    private $dayBudgetSections;
                                        
    public function setDayBudgetSections($dayBudgetSections){
        $size = count($dayBudgetSections);
        for ($i=0; $i<$size; $i++){
            $dayBudgetSections [$i] = $dayBudgetSections [$i] ->getInstance();
        }
        $this->params['dayBudgetSections'] = $dayBudgetSections;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>