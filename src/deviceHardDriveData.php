<?php

namespace Solarwinds\Soap;

class deviceHardDriveData
{

    /**
     * @var int $capacityBytes
     */
    protected $capacityBytes = null;

    /**
     * @var int $usedBytes
     */
    protected $usedBytes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCapacityBytes()
    {
      return $this->capacityBytes;
    }

    /**
     * @param int $capacityBytes
     * @return \Solarwinds\Soap\deviceHardDriveData
     */
    public function setCapacityBytes($capacityBytes)
    {
      $this->capacityBytes = $capacityBytes;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsedBytes()
    {
      return $this->usedBytes;
    }

    /**
     * @param int $usedBytes
     * @return \Solarwinds\Soap\deviceHardDriveData
     */
    public function setUsedBytes($usedBytes)
    {
      $this->usedBytes = $usedBytes;
      return $this;
    }

}
