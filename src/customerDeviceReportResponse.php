<?php

namespace Solarwinds\Soap;

class customerDeviceReportResponse
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
     * @return \Solarwinds\Soap\customerDeviceReportResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
