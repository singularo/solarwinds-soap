<?php

namespace Solarwinds\Soap;

class deviceData
{

    /**
     * @var int $CPUCount
     */
    protected $CPUCount = null;

    /**
     * @var string $CPUSpeedMHz
     */
    protected $CPUSpeedMHz = null;

    /**
     * @var string $computerName
     */
    protected $computerName = null;

    /**
     * @var string $computerSystemManufacturer
     */
    protected $computerSystemManufacturer = null;

    /**
     * @var string $computerSystemProductModel
     */
    protected $computerSystemProductModel = null;

    /**
     * @var string $computerSystemSerialNumber
     */
    protected $computerSystemSerialNumber = null;

    /**
     * @var int $customerID
     */
    protected $customerID = null;

    /**
     * @var string $customerName
     */
    protected $customerName = null;

    /**
     * @var boolean $deleted
     */
    protected $deleted = null;

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
     * @var string $IPAddress
     */
    protected $IPAddress = null;

    /**
     * @var \DateTime $installationDate
     */
    protected $installationDate = null;

    /**
     * @var string $nableURL
     */
    protected $nableURL = null;

    /**
     * @var string $OS_ReportedOS
     */
    protected $OS_ReportedOS = null;

    /**
     * @var string $OS_ServicePackVersion
     */
    protected $OS_ServicePackVersion = null;

    /**
     * @var string $OS_Version
     */
    protected $OS_Version = null;

    /**
     * @var int $physicalMemoryBytes
     */
    protected $physicalMemoryBytes = null;

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
    public function getCPUCount()
    {
      return $this->CPUCount;
    }

    /**
     * @param int $CPUCount
     * @return \Solarwinds\Soap\deviceData
     */
    public function setCPUCount($CPUCount)
    {
      $this->CPUCount = $CPUCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCPUSpeedMHz()
    {
      return $this->CPUSpeedMHz;
    }

    /**
     * @param string $CPUSpeedMHz
     * @return \Solarwinds\Soap\deviceData
     */
    public function setCPUSpeedMHz($CPUSpeedMHz)
    {
      $this->CPUSpeedMHz = $CPUSpeedMHz;
      return $this;
    }

    /**
     * @return string
     */
    public function getComputerName()
    {
      return $this->computerName;
    }

    /**
     * @param string $computerName
     * @return \Solarwinds\Soap\deviceData
     */
    public function setComputerName($computerName)
    {
      $this->computerName = $computerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getComputerSystemManufacturer()
    {
      return $this->computerSystemManufacturer;
    }

    /**
     * @param string $computerSystemManufacturer
     * @return \Solarwinds\Soap\deviceData
     */
    public function setComputerSystemManufacturer($computerSystemManufacturer)
    {
      $this->computerSystemManufacturer = $computerSystemManufacturer;
      return $this;
    }

    /**
     * @return string
     */
    public function getComputerSystemProductModel()
    {
      return $this->computerSystemProductModel;
    }

    /**
     * @param string $computerSystemProductModel
     * @return \Solarwinds\Soap\deviceData
     */
    public function setComputerSystemProductModel($computerSystemProductModel)
    {
      $this->computerSystemProductModel = $computerSystemProductModel;
      return $this;
    }

    /**
     * @return string
     */
    public function getComputerSystemSerialNumber()
    {
      return $this->computerSystemSerialNumber;
    }

    /**
     * @param string $computerSystemSerialNumber
     * @return \Solarwinds\Soap\deviceData
     */
    public function setComputerSystemSerialNumber($computerSystemSerialNumber)
    {
      $this->computerSystemSerialNumber = $computerSystemSerialNumber;
      return $this;
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
     * @return \Solarwinds\Soap\deviceData
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
     * @return \Solarwinds\Soap\deviceData
     */
    public function setCustomerName($customerName)
    {
      $this->customerName = $customerName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeleted()
    {
      return $this->deleted;
    }

    /**
     * @param boolean $deleted
     * @return \Solarwinds\Soap\deviceData
     */
    public function setDeleted($deleted)
    {
      $this->deleted = $deleted;
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
     * @return \Solarwinds\Soap\deviceData
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
     * @return \Solarwinds\Soap\deviceData
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
     * @return \Solarwinds\Soap\deviceData
     */
    public function setHardDrives(array $hardDrives = null)
    {
      $this->hardDrives = $hardDrives;
      return $this;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
      return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return \Solarwinds\Soap\deviceData
     */
    public function setIPAddress($IPAddress)
    {
      $this->IPAddress = $IPAddress;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInstallationDate()
    {
      if ($this->installationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->installationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $installationDate
     * @return \Solarwinds\Soap\deviceData
     */
    public function setInstallationDate(\DateTime $installationDate = null)
    {
      if ($installationDate == null) {
       $this->installationDate = null;
      } else {
        $this->installationDate = $installationDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getNableURL()
    {
      return $this->nableURL;
    }

    /**
     * @param string $nableURL
     * @return \Solarwinds\Soap\deviceData
     */
    public function setNableURL($nableURL)
    {
      $this->nableURL = $nableURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getOS_ReportedOS()
    {
      return $this->OS_ReportedOS;
    }

    /**
     * @param string $OS_ReportedOS
     * @return \Solarwinds\Soap\deviceData
     */
    public function setOS_ReportedOS($OS_ReportedOS)
    {
      $this->OS_ReportedOS = $OS_ReportedOS;
      return $this;
    }

    /**
     * @return string
     */
    public function getOS_ServicePackVersion()
    {
      return $this->OS_ServicePackVersion;
    }

    /**
     * @param string $OS_ServicePackVersion
     * @return \Solarwinds\Soap\deviceData
     */
    public function setOS_ServicePackVersion($OS_ServicePackVersion)
    {
      $this->OS_ServicePackVersion = $OS_ServicePackVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getOS_Version()
    {
      return $this->OS_Version;
    }

    /**
     * @param string $OS_Version
     * @return \Solarwinds\Soap\deviceData
     */
    public function setOS_Version($OS_Version)
    {
      $this->OS_Version = $OS_Version;
      return $this;
    }

    /**
     * @return int
     */
    public function getPhysicalMemoryBytes()
    {
      return $this->physicalMemoryBytes;
    }

    /**
     * @param int $physicalMemoryBytes
     * @return \Solarwinds\Soap\deviceData
     */
    public function setPhysicalMemoryBytes($physicalMemoryBytes)
    {
      $this->physicalMemoryBytes = $physicalMemoryBytes;
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
     * @return \Solarwinds\Soap\deviceData
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
     * @return \Solarwinds\Soap\deviceData
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
     * @return \Solarwinds\Soap\deviceData
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
     * @return \Solarwinds\Soap\deviceData
     */
    public function setSiteCustomerName($siteCustomerName)
    {
      $this->siteCustomerName = $siteCustomerName;
      return $this;
    }

}
