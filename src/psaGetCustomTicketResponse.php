<?php

namespace Solarwinds\Soap;

class psaGetCustomTicketResponse
{

    /**
     * @var eiCustomPsaTicketDetails $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return eiCustomPsaTicketDetails
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param eiCustomPsaTicketDetails $return
     * @return \Solarwinds\Soap\psaGetCustomTicketResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
