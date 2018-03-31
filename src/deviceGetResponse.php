<?php

namespace Solarwinds\Soap;

class deviceGetResponse
{

    /**
     * @var deviceInfo[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return deviceInfo[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param deviceInfo[] $return
     * @return \Solarwinds\Soap\deviceGetResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
