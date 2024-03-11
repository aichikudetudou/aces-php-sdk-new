<?php
namespace AdsDspRtbadFacedAdCreatedAds;
class Creative{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.ad.dto.CreativeInfo";
    }
        
    private $mediumTrafficPackageId;
    
    public function setMediumTrafficPackageId($mediumTrafficPackageId){
        $this->params['mediumTrafficPackageId'] = $mediumTrafficPackageId;
    }

    public function getMediumTrafficPackageId(){
        return $this->mediumTrafficPackageId;
    }
            
    private $creativeType;
    
    public function setCreativeType($creativeType){
        $this->params['creativeType'] = $creativeType;
    }

    public function getCreativeType(){
        return $this->creativeType;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $displayScene;
    
    public function setDisplayScene($displayScene){
        $this->params['displayScene'] = $displayScene;
    }

    public function getDisplayScene(){
        return $this->displayScene;
    }
            
    private $creativeMediaSpecId;
    
    public function setCreativeMediaSpecId($creativeMediaSpecId){
        $this->params['creativeMediaSpecId'] = $creativeMediaSpecId;
    }

    public function getCreativeMediaSpecId(){
        return $this->creativeMediaSpecId;
    }
            
    private $materialElementList;
                                        
    public function setMaterialElementList($materialElementList){
        $size = count($materialElementList);
        for ($i=0; $i<$size; $i++){
            $materialElementList [$i] = $materialElementList [$i] ->getInstance();
        }
        $this->params['materialElementList'] = $materialElementList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>