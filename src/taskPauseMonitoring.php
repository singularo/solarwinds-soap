<?php

namespace Solarwinds\Soap;

class taskPauseMonitoring
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
     * @var int[] $taskIDList
     */
    protected $taskIDList = null;

    
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
     * @return \Solarwinds\Soap\taskPauseMonitoring
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
     * @return \Solarwinds\Soap\taskPauseMonitoring
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getTaskIDList()
    {
      return $this->taskIDList;
    }

    /**
     * @param int[] $taskIDList
     * @return \Solarwinds\Soap\taskPauseMonitoring
     */
    public function setTaskIDList(array $taskIDList = null)
    {
      $this->taskIDList = $taskIDList;
      return $this;
    }

}
