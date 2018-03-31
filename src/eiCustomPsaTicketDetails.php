<?php

namespace Solarwinds\Soap;

class eiCustomPsaTicketDetails
{

    /**
     * @var string $creationDate
     */
    protected $creationDate = null;

    /**
     * @var string $lastStatusChangeTimestamp
     */
    protected $lastStatusChangeTimestamp = null;

    /**
     * @var int $psaCustomTicketId
     */
    protected $psaCustomTicketId = null;

    /**
     * @var string $ticketDetails
     */
    protected $ticketDetails = null;

    /**
     * @var string $ticketStatus
     */
    protected $ticketStatus = null;

    /**
     * @var string $ticketTitle
     */
    protected $ticketTitle = null;

    /**
     * @param int $psaCustomTicketId
     */
    public function __construct($psaCustomTicketId)
    {
      $this->psaCustomTicketId = $psaCustomTicketId;
    }

    /**
     * @return string
     */
    public function getCreationDate()
    {
      return $this->creationDate;
    }

    /**
     * @param string $creationDate
     * @return \Solarwinds\Soap\eiCustomPsaTicketDetails
     */
    public function setCreationDate($creationDate)
    {
      $this->creationDate = $creationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastStatusChangeTimestamp()
    {
      return $this->lastStatusChangeTimestamp;
    }

    /**
     * @param string $lastStatusChangeTimestamp
     * @return \Solarwinds\Soap\eiCustomPsaTicketDetails
     */
    public function setLastStatusChangeTimestamp($lastStatusChangeTimestamp)
    {
      $this->lastStatusChangeTimestamp = $lastStatusChangeTimestamp;
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
     * @return \Solarwinds\Soap\eiCustomPsaTicketDetails
     */
    public function setPsaCustomTicketId($psaCustomTicketId)
    {
      $this->psaCustomTicketId = $psaCustomTicketId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketDetails()
    {
      return $this->ticketDetails;
    }

    /**
     * @param string $ticketDetails
     * @return \Solarwinds\Soap\eiCustomPsaTicketDetails
     */
    public function setTicketDetails($ticketDetails)
    {
      $this->ticketDetails = $ticketDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketStatus()
    {
      return $this->ticketStatus;
    }

    /**
     * @param string $ticketStatus
     * @return \Solarwinds\Soap\eiCustomPsaTicketDetails
     */
    public function setTicketStatus($ticketStatus)
    {
      $this->ticketStatus = $ticketStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketTitle()
    {
      return $this->ticketTitle;
    }

    /**
     * @param string $ticketTitle
     * @return \Solarwinds\Soap\eiCustomPsaTicketDetails
     */
    public function setTicketTitle($ticketTitle)
    {
      $this->ticketTitle = $ticketTitle;
      return $this;
    }

}
