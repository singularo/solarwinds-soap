<?php

namespace Solarwinds\Soap;

class psaGetCustomTicket
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var int $psaCustomTicketId
     */
    protected $psaCustomTicketId = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $psaCustomTicketId
     */
    public function __construct($username, $password, $psaCustomTicketId)
    {
      $this->username = $username;
      $this->password = $password;
      $this->psaCustomTicketId = $psaCustomTicketId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \Solarwinds\Soap\psaGetCustomTicket
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Solarwinds\Soap\psaGetCustomTicket
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getPsaCustomTicketId()
    {
      return $this->psaCustomTicketId;
    }

    /**
     * @param int $psaCustomTicketId
     * @return \Solarwinds\Soap\psaGetCustomTicket
     */
    public function setPsaCustomTicketId($psaCustomTicketId)
    {
      $this->psaCustomTicketId = $psaCustomTicketId;
      return $this;
    }

}
