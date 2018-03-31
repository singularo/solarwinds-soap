<?php

namespace Solarwinds\Soap;

class eiCustomPsaTicketResponse
{

    /**
     * @var boolean $inconsistencyDetected
     */
    protected $inconsistencyDetected = null;

    /**
     * @var string $lastStatus
     */
    protected $lastStatus = null;

    /**
     * @var string $lastStatusTimestamp
     */
    protected $lastStatusTimestamp = null;

    /**
     * @var string $newConfirmedStatus
     */
    protected $newConfirmedStatus = null;

    /**
     * @var int $psaCustomTicketId
     */
    protected $psaCustomTicketId = null;

    /**
     * @var string $psaTicketNumber
     */
    protected $psaTicketNumber = null;

    /**
     * @var string $ticketCreationDate
     */
    protected $ticketCreationDate = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param boolean $inconsistencyDetected
     * @param int $psaCustomTicketId
     */
    public function __construct($inconsistencyDetected, $psaCustomTicketId)
    {
      $this->inconsistencyDetected = $inconsistencyDetected;
      $this->psaCustomTicketId = $psaCustomTicketId;
    }

    /**
     * @return boolean
     */
    public function getInconsistencyDetected()
    {
      return $this->inconsistencyDetected;
    }

    /**
     * @param boolean $inconsistencyDetected
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setInconsistencyDetected($inconsistencyDetected)
    {
      $this->inconsistencyDetected = $inconsistencyDetected;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastStatus()
    {
      return $this->lastStatus;
    }

    /**
     * @param string $lastStatus
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setLastStatus($lastStatus)
    {
      $this->lastStatus = $lastStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastStatusTimestamp()
    {
      return $this->lastStatusTimestamp;
    }

    /**
     * @param string $lastStatusTimestamp
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setLastStatusTimestamp($lastStatusTimestamp)
    {
      $this->lastStatusTimestamp = $lastStatusTimestamp;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewConfirmedStatus()
    {
      return $this->newConfirmedStatus;
    }

    /**
     * @param string $newConfirmedStatus
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setNewConfirmedStatus($newConfirmedStatus)
    {
      $this->newConfirmedStatus = $newConfirmedStatus;
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
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setPsaCustomTicketId($psaCustomTicketId)
    {
      $this->psaCustomTicketId = $psaCustomTicketId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPsaTicketNumber()
    {
      return $this->psaTicketNumber;
    }

    /**
     * @param string $psaTicketNumber
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setPsaTicketNumber($psaTicketNumber)
    {
      $this->psaTicketNumber = $psaTicketNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketCreationDate()
    {
      return $this->ticketCreationDate;
    }

    /**
     * @param string $ticketCreationDate
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setTicketCreationDate($ticketCreationDate)
    {
      $this->ticketCreationDate = $ticketCreationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Solarwinds\Soap\eiCustomPsaTicketResponse
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
