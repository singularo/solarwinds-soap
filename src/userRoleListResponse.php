<?php

namespace Solarwinds\Soap;

class userRoleListResponse
{

    /**
     * @var userRole[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return userRole[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param userRole[] $return
     * @return \Solarwinds\Soap\userRoleListResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
