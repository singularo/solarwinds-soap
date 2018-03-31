<?php

namespace Solarwinds\Soap;

class userRoleAddResponse
{

    /**
     * @var int $return
     */
    protected $return = null;

    /**
     * @param int $return
     */
    public function __construct($return)
    {
      $this->return = $return;
    }

    /**
     * @return int
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param int $return
     * @return \Solarwinds\Soap\userRoleAddResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
