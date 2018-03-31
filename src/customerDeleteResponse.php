<?php

namespace Solarwinds\Soap;

class customerDeleteResponse
{

    /**
     * @var string $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string $return
     * @return \Solarwinds\Soap\customerDeleteResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
