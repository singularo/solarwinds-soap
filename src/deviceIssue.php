<?php

namespace Solarwinds\Soap;

class deviceIssue
{

    /**
     * @var tKeyPair[] $issue
     */
    protected $issue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tKeyPair[]
     */
    public function getIssue()
    {
      return $this->issue;
    }

    /**
     * @param tKeyPair[] $issue
     * @return \Solarwinds\Soap\deviceIssue
     */
    public function setIssue(array $issue = null)
    {
      $this->issue = $issue;
      return $this;
    }

}
