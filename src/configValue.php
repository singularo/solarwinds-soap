<?php

namespace Solarwinds\Soap;

class configValue
{

    /**
     * @var string $datatype
     */
    protected $datatype = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $PKey
     */
    protected $PKey = null;

    /**
     * @var string $PValue
     */
    protected $PValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDatatype()
    {
      return $this->datatype;
    }

    /**
     * @param string $datatype
     * @return \Solarwinds\Soap\configValue
     */
    public function setDatatype($datatype)
    {
      $this->datatype = $datatype;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Solarwinds\Soap\configValue
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getPKey()
    {
      return $this->PKey;
    }

    /**
     * @param string $PKey
     * @return \Solarwinds\Soap\configValue
     */
    public function setPKey($PKey)
    {
      $this->PKey = $PKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPValue()
    {
      return $this->PValue;
    }

    /**
     * @param string $PValue
     * @return \Solarwinds\Soap\configValue
     */
    public function setPValue($PValue)
    {
      $this->PValue = $PValue;
      return $this;
    }

}
