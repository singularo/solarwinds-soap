<?php

namespace Solarwinds\Soap;

class deviceAssetInfoExportResponse
{

    /**
     * @var deviceData[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return deviceData[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param deviceData[] $return
     * @return \Solarwinds\Soap\deviceAssetInfoExportResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
