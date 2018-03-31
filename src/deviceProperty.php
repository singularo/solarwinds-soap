<?php

namespace Solarwinds\Soap;

class deviceProperty
{

    /**
     * @var string $defaultValue
     */
    protected $defaultValue = null;

    /**
     * @var int $devicePropertyID
     */
    protected $devicePropertyID = null;

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
      return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     * @return \Solarwinds\Soap\deviceProperty
     */
    public function setDefaultValue($defaultValue)
    {
      $this->defaultValue = $defaultValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getDevicePropertyID()
    {
      return $this->devicePropertyID;
    }

    /**
     * @param int $devicePropertyID
     * @return \Solarwinds\Soap\deviceProperty
     */
    public function setDevicePropertyID($devicePropertyID)
    {
      $this->devicePropertyID = $devicePropertyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \Solarwinds\Soap\deviceProperty
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \Solarwinds\Soap\deviceProperty
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Solarwinds\Soap\deviceProperty
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
