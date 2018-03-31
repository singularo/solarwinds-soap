<?php

namespace Solarwinds\Soap;

class jobStatus
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
     * @return \Solarwinds\Soap\jobStatus
     */
    public function setInfo(array $info = null)
    {
      $this->info = $info;
      return $this;
    }

}
