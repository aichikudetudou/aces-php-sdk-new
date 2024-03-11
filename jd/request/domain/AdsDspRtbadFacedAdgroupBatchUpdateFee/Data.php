<?php
namespace AdsDspRtbadFacedAdgroupBatchUpdateFee;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.rtbad.api.rpc.delivery.adgroup.dto.AdGroupFeeBatchUpdateCommand";
    }
        
    private $adGroupFeeUpdateCommandList;
                                        
    public function setAdGroupFeeUpdateCommandList($adGroupFeeUpdateCommandList){
        $size = count($adGroupFeeUpdateCommandList);
        for ($i=0; $i<$size; $i++){
            $adGroupFeeUpdateCommandList [$i] = $adGroupFeeUpdateCommandList [$i] ->getInstance();
        }
        $this->params['adGroupFeeUpdateCommandList'] = $adGroupFeeUpdateCommandList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>