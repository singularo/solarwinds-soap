<?php

namespace Solarwinds\Soap;

class deviceAssetInfoExportDeviceResponse
{

    /**
     * @var device[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return device[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param device[] $return
     * @return \Solarwinds\Soap\deviceAssetInfoExportDeviceResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
