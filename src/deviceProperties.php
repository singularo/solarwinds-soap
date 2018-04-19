<?php

namespace Solarwinds\Soap;

class deviceProperties
{

    /**
     * @var int $deviceID
     */
    protected $deviceID = null;

    /**
     * @var string $deviceName
     */
    protected $deviceName = null;

    /**
     * @var deviceProperty[] $properties
     */
    protected $properties = null;

    /**
     * @var string $url
     */
    protected $url = null;

    
    public function __construct()
    {
    
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
     * @return \Solarwinds\Soap\deviceProperties
     */
    public function setDeviceID($deviceID)
    {
      $this->deviceID = $deviceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeviceName()
    {
      return $this->deviceName;
    }

    /**
     * @param string $deviceName
     * @return \Solarwinds\Soap\deviceProperties
     */
    public function setDeviceName($deviceName)
    {
      $this->deviceName = $deviceName;
      return $this;
    }

    /**
     * @return deviceProperty[]
     */
    public function getProperties($key = NULL)
    {
        if (!isset($key)) {
            return $this->properties;
        }
        else {
            if (is_array($this->properties)) {
                foreach ($this->properties as $info) {
                    if ($info->getLabel() == $key) {
                        return $info->getValue();
                    }
                }
            }
        }
    }

    /**
     * @param deviceProperty[] $properties
     * @return \Solarwinds\Soap\deviceProperties
     */
    public function setProperties(array $properties = null)
    {
      $this->properties = $properties;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Solarwinds\Soap\deviceProperties
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
