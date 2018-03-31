<?php

namespace Solarwinds\Soap;

class tKeyValue
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string[] $value
     */
    protected $value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \Solarwinds\Soap\tKeyValue
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string[] $value
     * @return \Solarwinds\Soap\tKeyValue
     */
    public function setValue(array $value = null)
    {
      $this->value = $value;
      return $this;
    }

}
