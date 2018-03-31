<?php

namespace Solarwinds\Soap;

class taskResumeMonitoringResponse
{

    /**
     * @var wrapperTaskMonitoring $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return wrapperTaskMonitoring
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param wrapperTaskMonitoring $return
     * @return \Solarwinds\Soap\taskResumeMonitoringResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
