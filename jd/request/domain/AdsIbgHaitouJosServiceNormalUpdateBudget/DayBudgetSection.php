<?php
namespace AdsIbgHaitouJosServiceNormalUpdateBudget;
class DayBudgetSection{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.ht.domain.vo.DayBudgetSection";
    }
        
    private $startDate;
    
    public function setStartDate($startDate){
        $this->params['startDate'] = $startDate;
    }

    public function getStartDate(){
        return $this->startDate;
    }
            
    private $endDate;
    
    public function setEndDate($endDate){
        $this->params['endDate'] = $endDate;
    }

    public function getEndDate(){
        return $this->endDate;
    }
            
    private $budget;
    
    public function setBudget($budget){
        $this->params['budget'] = $budget;
    }

    public function getBudget(){
        return $this->budget;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>