<?php

namespace Solarwinds\Soap;

class devicePropertyList
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
     * @var int[] $deviceIDs
     */
    protected $deviceIDs = null;

    /**
     * @var string[] $deviceNames
     */
    protected $deviceNames = null;

    /**
     * @var int[] $filterIDs
     */
    protected $filterIDs = null;

    /**
     * @var string[] $filterNames
     */
    protected $filterNames = null;

    /**
     * @var boolean $reverseOrder
     */
    protected $reverseOrder = null;

    /**
     * @param boolean $reverseOrder
     */
    public function __construct($reverseOrder)
    {
      $this->reverseOrder = $reverseOrder;
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
     * @return \Solarwinds\Soap\devicePropertyList
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
     * @return \Solarwinds\Soap\devicePropertyList
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getDeviceIDs()
    {
      return $this->deviceIDs;
    }

    /**
     * @param int[] $deviceIDs
     * @return \Solarwinds\Soap\devicePropertyList
     */
    public function setDeviceIDs(array $deviceIDs = null)
    {
      $this->deviceIDs = $deviceIDs;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDeviceNames()
    {
      return $this->deviceNames;
    }

    /**
     * @param string[] $deviceNames
     * @return \Solarwinds\Soap\devicePropertyList
     */
    public function setDeviceNames(array $deviceNames = null)
    {
      $this->deviceNames = $deviceNames;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getFilterIDs()
    {
      return $this->filterIDs;
    }

    /**
     * @param int[] $filterIDs
     * @return \Solarwinds\Soap\devicePropertyList
     */
    public function setFilterIDs(array $filterIDs = null)
    {
      $this->filterIDs = $filterIDs;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getFilterNames()
    {
      return $this->filterNames;
    }

    /**
     * @param string[] $filterNames
     * @return \Solarwinds\Soap\devicePropertyList
     */
    public function setFilterNames(array $filterNames = null)
    {
      $this->filterNames = $filterNames;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReverseOrder()
    {
      return $this->reverseOrder;
    }

    /**
     * @param boolean $reverseOrder
     * @return \Solarwinds\Soap\devicePropertyList
     */
    public function setReverseOrder($reverseOrder)
    {
      $this->reverseOrder = $reverseOrder;
      return $this;
    }

}
