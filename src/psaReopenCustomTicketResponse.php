<?php

namespace Solarwinds\Soap;

class psaReopenCustomTicketResponse
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
     * @return \Solarwinds\Soap\psaReopenCustomTicketResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
