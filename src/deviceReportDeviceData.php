<?php

namespace Solarwinds\Soap;

class deviceReportDeviceData
{

    /**
     * @var float $CPUUtilizationPercentage
     */
    protected $CPUUtilizationPercentage = null;

    /**
     * @var string $deviceClass
     */
    protected $deviceClass = null;

    /**
     * @var int $deviceID
     */
    protected $deviceID = null;

    /**
     * @var deviceHardDriveData[] $hardDrives
     */
    protected $hardDrives = null;

    /**
     * @var float $memoryUtilizationPercentage
     */
    protected $memoryUtilizationPercentage = null;

    /**
     * @var int $numBackupFailures
     */
    protected $numBackupFailures = null;

    /**
     * @var int $numBackupPasses
     */
    protected $numBackupPasses = null;

    /**
     * @var int $numBackupWarnings
     */
    protected $numBackupWarnings = null;

    /**
     * @var int $numPatchAlerts
     */
    protected $numPatchAlerts = null;

    /**
     * @var int $numViruses
     */
    protected $numViruses = null;

    /**
     * @var float $serverAvailabilityPercentage
     */
    protected $serverAvailabilityPercentage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getCPUUtilizationPercentage()
    {
      return $this->CPUUtilizationPercentage;
    }

    /**
     * @param float $CPUUtilizationPercentage
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setCPUUtilizationPercentage($CPUUtilizationPercentage)
    {
      $this->CPUUtilizationPercentage = $CPUUtilizationPercentage;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeviceClass()
    {
      return $this->deviceClass;
    }

    /**
     * @param string $deviceClass
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setDeviceClass($deviceClass)
    {
      $this->deviceClass = $deviceClass;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeviceID()
    {
      return $this->deviceID;
    }

    /**
     * @param int $deviceID
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setDeviceID($deviceID)
    {
      $this->deviceID = $deviceID;
      return $this;
    }

    /**
     * @return deviceHardDriveData[]
     */
    public function getHardDrives()
    {
      return $this->hardDrives;
    }

    /**
     * @param deviceHardDriveData[] $hardDrives
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setHardDrives(array $hardDrives = null)
    {
      $this->hardDrives = $hardDrives;
      return $this;
    }

    /**
     * @return float
     */
    public function getMemoryUtilizationPercentage()
    {
      return $this->memoryUtilizationPercentage;
    }

    /**
     * @param float $memoryUtilizationPercentage
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setMemoryUtilizationPercentage($memoryUtilizationPercentage)
    {
      $this->memoryUtilizationPercentage = $memoryUtilizationPercentage;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumBackupFailures()
    {
      return $this->numBackupFailures;
    }

    /**
     * @param int $numBackupFailures
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setNumBackupFailures($numBackupFailures)
    {
      $this->numBackupFailures = $numBackupFailures;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumBackupPasses()
    {
      return $this->numBackupPasses;
    }

    /**
     * @param int $numBackupPasses
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setNumBackupPasses($numBackupPasses)
    {
      $this->numBackupPasses = $numBackupPasses;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumBackupWarnings()
    {
      return $this->numBackupWarnings;
    }

    /**
     * @param int $numBackupWarnings
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setNumBackupWarnings($numBackupWarnings)
    {
      $this->numBackupWarnings = $numBackupWarnings;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumPatchAlerts()
    {
      return $this->numPatchAlerts;
    }

    /**
     * @param int $numPatchAlerts
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setNumPatchAlerts($numPatchAlerts)
    {
      $this->numPatchAlerts = $numPatchAlerts;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumViruses()
    {
      return $this->numViruses;
    }

    /**
     * @param int $numViruses
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setNumViruses($numViruses)
    {
      $this->numViruses = $numViruses;
      return $this;
    }

    /**
     * @return float
     */
    public function getServerAvailabilityPercentage()
    {
      return $this->serverAvailabilityPercentage;
    }

    /**
     * @param float $serverAvailabilityPercentage
     * @return \Solarwinds\Soap\deviceReportDeviceData
     */
    public function setServerAvailabilityPercentage($serverAvailabilityPercentage)
    {
      $this->serverAvailabilityPercentage = $serverAvailabilityPercentage;
      return $this;
    }

}
