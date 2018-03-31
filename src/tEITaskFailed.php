<?php

namespace Solarwinds\Soap;

class tEITaskFailed
{

    /**
     * @var string $serviceDescription
     */
    protected $serviceDescription = null;

    /**
     * @var string $serviceState
     */
    protected $serviceState = null;

    /**
     * @var string $serviceStatus
     */
    protected $serviceStatus = null;

    /**
     * @var int $taskID
     */
    protected $taskID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getServiceDescription()
    {
      return $this->serviceDescription;
    }

    /**
     * @param string $serviceDescription
     * @return \Solarwinds\Soap\tEITaskFailed
     */
    public function setServiceDescription($serviceDescription)
    {
      $this->serviceDescription = $serviceDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceState()
    {
      return $this->serviceState;
    }

    /**
     * @param string $serviceState
     * @return \Solarwinds\Soap\tEITaskFailed
     */
    public function setServiceState($serviceState)
    {
      $this->serviceState = $serviceState;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceStatus()
    {
      return $this->serviceStatus;
    }

    /**
     * @param string $serviceStatus
     * @return \Solarwinds\Soap\tEITaskFailed
     */
    public function setServiceStatus($serviceStatus)
    {
      $this->serviceStatus = $serviceStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaskID()
    {
      return $this->taskID;
    }

    /**
     * @param int $taskID
     * @return \Solarwinds\Soap\tEITaskFailed
     */
    public function setTaskID($taskID)
    {
      $this->taskID = $taskID;
      return $this;
    }

}
