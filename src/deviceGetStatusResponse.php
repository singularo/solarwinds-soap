<?php

namespace Solarwinds\Soap;

class deviceGetStatusResponse
{

    /**
     * @var deviceStatus[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return deviceStatus[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param deviceStatus[] $return
     * @return \Solarwinds\Soap\deviceGetStatusResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
