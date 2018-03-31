<?php

namespace Solarwinds\Soap;

class userAdd
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
     * @var tKeyPair[] $settings
     */
    protected $settings = null;

    
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
     * @return \Solarwinds\Soap\userAdd
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
     * @return \Solarwinds\Soap\userAdd
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return tKeyPair[]
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param tKeyPair[] $settings
     * @return \Solarwinds\Soap\userAdd
     */
    public function setSettings(array $settings = null)
    {
      $this->settings = $settings;
      return $this;
    }

}
