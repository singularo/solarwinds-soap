<?php

namespace Solarwinds\Soap;

class tKeyPair
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
    public function __construct(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value;
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
     * @return \Solarwinds\Soap\tKeyPair
     */
    public function setKey(string $key)
    {
      $this->key = $key;
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
     * @return \Solarwinds\Soap\tKeyPair
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return \Solarwinds\Soap\tKeyPair
     */
    public function setKeyValue(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        return $this;
    }
}
