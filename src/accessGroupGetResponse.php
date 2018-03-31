<?php

namespace Solarwinds\Soap;

class accessGroupGetResponse
{

    /**
     * @var accessGroupEI $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return accessGroupEI
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param accessGroupEI $return
     * @return \Solarwinds\Soap\accessGroupGetResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
