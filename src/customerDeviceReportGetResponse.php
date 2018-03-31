<?php

namespace Solarwinds\Soap;

class customerDeviceReportGetResponse
{

    /**
     * @var deviceReportData[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return deviceReportData[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param deviceReportData[] $return
     * @return \Solarwinds\Soap\customerDeviceReportGetResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
