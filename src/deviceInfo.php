<?php

namespace Solarwinds\Soap;

class deviceInfo
{

    /**
     * @var tKeyValue[] $info
     */
    protected $info = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tKeyValue[]
     */
    public function getInfo()
    {
      return $this->info;
    }

    /**
     * @param tKeyValue[] $info
     * @return \Solarwinds\Soap\deviceInfo
     */
    public function setInfo(array $info = null)
    {
      $this->info = $info;
      return $this;
    }

}
