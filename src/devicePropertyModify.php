<?php

namespace Solarwinds\Soap;

class devicePropertyModify
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var deviceProperties[] $deviceProperties
     */
    protected $deviceProperties = null;

    
    public function __construct()
    {
    
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
     * @return \Solarwinds\Soap\devicePropertyModify
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
     * @return \Solarwinds\Soap\devicePropertyModify
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return deviceProperties[]
     */
    public function getDeviceProperties()
    {
      return $this->deviceProperties;
    }

    /**
     * @param deviceProperties[] $deviceProperties
     * @return \Solarwinds\Soap\devicePropertyModify
     */
    public function setDeviceProperties(array $deviceProperties = null)
    {
      $this->deviceProperties = $deviceProperties;
      return $this;
    }

}
