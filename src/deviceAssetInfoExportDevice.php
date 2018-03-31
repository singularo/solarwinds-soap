<?php

namespace Solarwinds\Soap;

class deviceAssetInfoExportDevice
{

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return \Solarwinds\Soap\deviceAssetInfoExportDevice
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \Solarwinds\Soap\deviceAssetInfoExportDevice
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Solarwinds\Soap\deviceAssetInfoExportDevice
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
