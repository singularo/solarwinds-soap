<?php

namespace Solarwinds\Soap;

class jobStatusListResponse
{

    /**
     * @var jobStatus[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return jobStatus[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param jobStatus[] $return
     * @return \Solarwinds\Soap\jobStatusListResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
