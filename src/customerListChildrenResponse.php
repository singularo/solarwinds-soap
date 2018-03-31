<?php

namespace Solarwinds\Soap;

class customerListChildrenResponse
{

    /**
     * @var customer[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return customer[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param customer[] $return
     * @return \Solarwinds\Soap\customerListChildrenResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
