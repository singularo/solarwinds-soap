<?php

namespace Solarwinds\Soap;

class accessGroupAddResponse
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
     * @return \Solarwinds\Soap\accessGroupAddResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
