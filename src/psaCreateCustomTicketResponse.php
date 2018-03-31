<?php

namespace Solarwinds\Soap;

class psaCreateCustomTicketResponse
{

    /**
     * @var eiCustomPsaTicketResponse $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return eiCustomPsaTicketResponse
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param eiCustomPsaTicketResponse $return
     * @return \Solarwinds\Soap\psaCreateCustomTicketResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
