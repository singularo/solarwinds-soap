<?php

namespace Solarwinds\Soap;

class versionInfoGet
{

    /**
     * @var tCredentials $credentials
     */
    protected $credentials = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tCredentials
     */
    public function getCredentials()
    {
      return $this->credentials;
    }

    /**
     * @param tCredentials $credentials
     * @return \Solarwinds\Soap\versionInfoGet
     */
    public function setCredentials($credentials)
    {
      $this->credentials = $credentials;
      return $this;
    }

}
