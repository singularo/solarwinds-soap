<?php

namespace Solarwinds\Soap;

class psaCreateCustomTicket
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
     * @var string $ticketNumber
     */
    protected $ticketNumber = null;

    /**
     * @var string $ticketUrl
     */
    protected $ticketUrl = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $psaCustomTicketId
     * @param string $ticketNumber
     * @param string $ticketUrl
     */
    public function __construct($username, $password, $psaCustomTicketId, $ticketNumber, $ticketUrl)
    {
      $this->username = $username;
      $this->password = $password;
      $this->psaCustomTicketId = $psaCustomTicketId;
      $this->ticketNumber = $ticketNumber;
      $this->ticketUrl = $ticketUrl;
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
     * @return \Solarwinds\Soap\psaCreateCustomTicket
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
     * @return \Solarwinds\Soap\psaCreateCustomTicket
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
     * @return \Solarwinds\Soap\psaCreateCustomTicket
     */
    public function setPsaCustomTicketId($psaCustomTicketId)
    {
      $this->psaCustomTicketId = $psaCustomTicketId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->ticketNumber;
    }

    /**
     * @param string $ticketNumber
     * @return \Solarwinds\Soap\psaCreateCustomTicket
     */
    public function setTicketNumber($ticketNumber)
    {
      $this->ticketNumber = $ticketNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketUrl()
    {
      return $this->ticketUrl;
    }

    /**
     * @param string $ticketUrl
     * @return \Solarwinds\Soap\psaCreateCustomTicket
     */
    public function setTicketUrl($ticketUrl)
    {
      $this->ticketUrl = $ticketUrl;
      return $this;
    }

}
