<?php

namespace Solarwinds\Soap;

class deviceReportData
{

    /**
     * @var int $customerID
     */
    protected $customerID = null;

    /**
     * @var string $customerName
     */
    protected $customerName = null;

    /**
     * @var deviceReportDeviceData[] $devices
     */
    protected $devices = null;

    /**
     * @var int $numDevices
     */
    protected $numDevices = null;

    /**
     * @var int $numLowDiskServers
     */
    protected $numLowDiskServers = null;

    /**
     * @var int $numServerDevices
     */
    protected $numServerDevices = null;

    /**
     * @var int $numWinServerDevices
     */
    protected $numWinServerDevices = null;

    /**
     * @var int $numWinWorkstationDevices
     */
    protected $numWinWorkstationDevices = null;

    /**
     * @var int $numWorkstationDevices
     */
    protected $numWorkstationDevices = null;

    /**
     * @var int $SOCustomerID
     */
    protected $SOCustomerID = null;

    /**
     * @var string $SOCustomerName
     */
    protected $SOCustomerName = null;

    /**
     * @var int $siteCustomerID
     */
    protected $siteCustomerID = null;

    /**
     * @var string $siteCustomerName
     */
    protected $siteCustomerName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
      return $this->customerID;
    }

    /**
     * @param int $customerID
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setCustomerID($customerID)
    {
      $this->customerID = $customerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->customerName;
    }

    /**
     * @param string $customerName
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setCustomerName($customerName)
    {
      $this->customerName = $customerName;
      return $this;
    }

    /**
     * @return deviceReportDeviceData[]
     */
    public function getDevices()
    {
      return $this->devices;
    }

    /**
     * @param deviceReportDeviceData[] $devices
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setDevices(array $devices = null)
    {
      $this->devices = $devices;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumDevices()
    {
      return $this->numDevices;
    }

    /**
     * @param int $numDevices
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setNumDevices($numDevices)
    {
      $this->numDevices = $numDevices;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumLowDiskServers()
    {
      return $this->numLowDiskServers;
    }

    /**
     * @param int $numLowDiskServers
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setNumLowDiskServers($numLowDiskServers)
    {
      $this->numLowDiskServers = $numLowDiskServers;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumServerDevices()
    {
      return $this->numServerDevices;
    }

    /**
     * @param int $numServerDevices
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setNumServerDevices($numServerDevices)
    {
      $this->numServerDevices = $numServerDevices;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumWinServerDevices()
    {
      return $this->numWinServerDevices;
    }

    /**
     * @param int $numWinServerDevices
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setNumWinServerDevices($numWinServerDevices)
    {
      $this->numWinServerDevices = $numWinServerDevices;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumWinWorkstationDevices()
    {
      return $this->numWinWorkstationDevices;
    }

    /**
     * @param int $numWinWorkstationDevices
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setNumWinWorkstationDevices($numWinWorkstationDevices)
    {
      $this->numWinWorkstationDevices = $numWinWorkstationDevices;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumWorkstationDevices()
    {
      return $this->numWorkstationDevices;
    }

    /**
     * @param int $numWorkstationDevices
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setNumWorkstationDevices($numWorkstationDevices)
    {
      $this->numWorkstationDevices = $numWorkstationDevices;
      return $this;
    }

    /**
     * @return int
     */
    public function getSOCustomerID()
    {
      return $this->SOCustomerID;
    }

    /**
     * @param int $SOCustomerID
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setSOCustomerID($SOCustomerID)
    {
      $this->SOCustomerID = $SOCustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSOCustomerName()
    {
      return $this->SOCustomerName;
    }

    /**
     * @param string $SOCustomerName
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setSOCustomerName($SOCustomerName)
    {
      $this->SOCustomerName = $SOCustomerName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteCustomerID()
    {
      return $this->siteCustomerID;
    }

    /**
     * @param int $siteCustomerID
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setSiteCustomerID($siteCustomerID)
    {
      $this->siteCustomerID = $siteCustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiteCustomerName()
    {
      return $this->siteCustomerName;
    }

    /**
     * @param string $siteCustomerName
     * @return \Solarwinds\Soap\deviceReportData
     */
    public function setSiteCustomerName($siteCustomerName)
    {
      $this->siteCustomerName = $siteCustomerName;
      return $this;
    }

}
