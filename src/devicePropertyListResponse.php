<?php

namespace Solarwinds\Soap;

class devicePropertyListResponse
{

    /**
     * @var deviceProperties[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return deviceProperties[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param deviceProperties[] $return
     * @return \Solarwinds\Soap\devicePropertyListResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
