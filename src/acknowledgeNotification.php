<?php

namespace Solarwinds\Soap;

class acknowledgeNotification
{

    /**
     * @var int[] $activeNotificationTriggerIDArray
     */
    protected $activeNotificationTriggerIDArray = null;

    /**
     * @var int[] $correlatedProfileIDArray
     */
    protected $correlatedProfileIDArray = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $note
     */
    protected $note = null;

    /**
     * @var boolean $addToDeviceNotes
     */
    protected $addToDeviceNotes = null;

    /**
     * @var boolean $suppressOnEscalation
     */
    protected $suppressOnEscalation = null;

    /**
     * @param boolean $addToDeviceNotes
     * @param boolean $suppressOnEscalation
     */
    public function __construct($addToDeviceNotes, $suppressOnEscalation)
    {
      $this->addToDeviceNotes = $addToDeviceNotes;
      $this->suppressOnEscalation = $suppressOnEscalation;
    }

    /**
     * @return int[]
     */
    public function getActiveNotificationTriggerIDArray()
    {
      return $this->activeNotificationTriggerIDArray;
    }

    /**
     * @param int[] $activeNotificationTriggerIDArray
     * @return \Solarwinds\Soap\acknowledgeNotification
     */
    public function setActiveNotificationTriggerIDArray(array $activeNotificationTriggerIDArray = null)
    {
      $this->activeNotificationTriggerIDArray = $activeNotificationTriggerIDArray;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCorrelatedProfileIDArray()
    {
      return $this->correlatedProfileIDArray;
    }

    /**
     * @param int[] $correlatedProfileIDArray
     * @return \Solarwinds\Soap\acknowledgeNotification
     */
    public function setCorrelatedProfileIDArray(array $correlatedProfileIDArray = null)
    {
      $this->correlatedProfileIDArray = $correlatedProfileIDArray;
      return $this;
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
     * @return \Solarwinds\Soap\acknowledgeNotification
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
     * @return \Solarwinds\Soap\acknowledgeNotification
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param string $note
     * @return \Solarwinds\Soap\acknowledgeNotification
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddToDeviceNotes()
    {
      return $this->addToDeviceNotes;
    }

    /**
     * @param boolean $addToDeviceNotes
     * @return \Solarwinds\Soap\acknowledgeNotification
     */
    public function setAddToDeviceNotes($addToDeviceNotes)
    {
      $this->addToDeviceNotes = $addToDeviceNotes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressOnEscalation()
    {
      return $this->suppressOnEscalation;
    }

    /**
     * @param boolean $suppressOnEscalation
     * @return \Solarwinds\Soap\acknowledgeNotification
     */
    public function setSuppressOnEscalation($suppressOnEscalation)
    {
      $this->suppressOnEscalation = $suppressOnEscalation;
      return $this;
    }

}
