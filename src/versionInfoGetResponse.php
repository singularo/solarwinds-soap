<?php

namespace Solarwinds\Soap;

class versionInfoGetResponse
{

    /**
     * @var configValue[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return configValue[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param configValue[] $return
     * @return \Solarwinds\Soap\versionInfoGetResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
