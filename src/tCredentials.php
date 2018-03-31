<?php

namespace Solarwinds\Soap;

class tCredentials
{

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $username
     */
    protected $username = null;

    
    public function __construct()
    {
    
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
     * @return \Solarwinds\Soap\tCredentials
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \Solarwinds\Soap\tCredentials
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

}
