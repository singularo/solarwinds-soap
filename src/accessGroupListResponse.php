<?php

namespace Solarwinds\Soap;

class accessGroupListResponse
{

    /**
     * @var accessGroupEI[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return accessGroupEI[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param accessGroupEI[] $return
     * @return \Solarwinds\Soap\accessGroupListResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
