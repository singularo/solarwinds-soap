<?php

namespace Solarwinds\Soap;

class activeIssuesListResponse
{

    /**
     * @var deviceIssue[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return deviceIssue[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param deviceIssue[] $return
     * @return \Solarwinds\Soap\activeIssuesListResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
