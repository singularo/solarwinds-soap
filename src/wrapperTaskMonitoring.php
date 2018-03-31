<?php

namespace Solarwinds\Soap;

class wrapperTaskMonitoring
{

    /**
     * @var string $msg
     */
    protected $msg = null;

    /**
     * @var tEITaskFailed[] $values
     */
    protected $values = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMsg()
    {
      return $this->msg;
    }

    /**
     * @param string $msg
     * @return \Solarwinds\Soap\wrapperTaskMonitoring
     */
    public function setMsg($msg)
    {
      $this->msg = $msg;
      return $this;
    }

    /**
     * @return tEITaskFailed[]
     */
    public function getValues()
    {
      return $this->values;
    }

    /**
     * @param tEITaskFailed[] $values
     * @return \Solarwinds\Soap\wrapperTaskMonitoring
     */
    public function setValues(array $values = null)
    {
      $this->values = $values;
      return $this;
    }

}
