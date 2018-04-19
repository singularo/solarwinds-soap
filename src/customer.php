<?php

namespace Solarwinds\Soap;

class customer
{

    /**
     * @var tKeyPair[] $info
     */
    protected $info = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return tKeyPair[]
     */
    public function getInfo($key = NULL)
    {
        if (!isset($key)) {
            return $this->info;
        }
        else {
            if (is_array($this->info)) {
                foreach ($this->info as $info) {
                    if ($info->getKey() == $key) {
                        return $info->getValue();
                    }
                }
            }
        }
    }

    /**
     * @param tKeyPair[] $info
     * @return \Solarwinds\Soap\customer
     */
    public function setInfo(array $info = null)
    {
      $this->info = $info;
      return $this;
    }

}
