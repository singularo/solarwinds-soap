<?php

namespace Solarwinds\Soap;

class accessGroupEI
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
     * @return \Solarwinds\Soap\accessGroupEI
     */
    public function setInfo(array $info = null)
    {
      $this->info = $info;
      return $this;
    }

}
