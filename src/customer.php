<?php

namespace Solarwinds\Soap;

class customer
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
     * @return \Solarwinds\Soap\customer
     */
    public function setInfo(array $info = null)
    {
      $this->info = $info;
      return $this;
    }

}
