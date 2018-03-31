<?php

namespace Solarwinds\Soap;

class deviceStatus
{

    /**
     * @var tKeyPair[] $info
     */
    protected $info = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tKeyPair[]
     */
    public function getInfo()
    {
      return $this->info;
    }

    /**
     * @param tKeyPair[] $info
     * @return \Solarwinds\Soap\deviceStatus
     */
    public function setInfo(array $info = null)
    {
      $this->info = $info;
      return $this;
    }

}
