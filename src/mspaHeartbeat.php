<?php

namespace Solarwinds\Soap;

class mspaHeartbeat
{

    /**
     * @var string $uuid
     */
    protected $uuid = null;

    /**
     * @var int $eventType
     */
    protected $eventType = null;

    /**
     * @var int $validity
     */
    protected $validity = null;

    /**
     * @param int $eventType
     * @param int $validity
     */
    public function __construct($eventType, $validity)
    {
      $this->eventType = $eventType;
      $this->validity = $validity;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
      return $this->uuid;
    }

    /**
     * @param string $uuid
     * @return \Solarwinds\Soap\mspaHeartbeat
     */
    public function setUuid($uuid)
    {
      $this->uuid = $uuid;
      return $this;
    }

    /**
     * @return int
     */
    public function getEventType()
    {
      return $this->eventType;
    }

    /**
     * @param int $eventType
     * @return \Solarwinds\Soap\mspaHeartbeat
     */
    public function setEventType($eventType)
    {
      $this->eventType = $eventType;
      return $this;
    }

    /**
     * @return int
     */
    public function getValidity()
    {
      return $this->validity;
    }

    /**
     * @param int $validity
     * @return \Solarwinds\Soap\mspaHeartbeat
     */
    public function setValidity($validity)
    {
      $this->validity = $validity;
      return $this;
    }

}
