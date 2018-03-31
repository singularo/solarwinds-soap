<?php

namespace Solarwinds\Soap;

class userRoleGetResponse
{

    /**
     * @var userRole $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return userRole
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param userRole $return
     * @return \Solarwinds\Soap\userRoleGetResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
