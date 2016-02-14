<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessLog
 */
class AccessLog
{
    /**
     * @var \DateTime
     */
    private $dateAccess;

    /**
     * @var string
     */
    private $ipOrigin;

    /**
     * @var string
     */
    private $eventKey;

    /**
     * @var integer
     */
    private $idAccessLog;


    /**
     * Set dateAccess
     *
     * @param \DateTime $dateAccess
     * @return AccessLog
     */
    public function setDateAccess($dateAccess)
    {
        $this->dateAccess = $dateAccess;

        return $this;
    }

    /**
     * Get dateAccess
     *
     * @return \DateTime 
     */
    public function getDateAccess()
    {
        return $this->dateAccess;
    }

    /**
     * Set ipOrigin
     *
     * @param string $ipOrigin
     * @return AccessLog
     */
    public function setIpOrigin($ipOrigin)
    {
        $this->ipOrigin = $ipOrigin;

        return $this;
    }

    /**
     * Get ipOrigin
     *
     * @return string 
     */
    public function getIpOrigin()
    {
        return $this->ipOrigin;
    }

    /**
     * Set eventKey
     *
     * @param string $eventKey
     * @return AccessLog
     */
    public function setEventKey($eventKey)
    {
        $this->eventKey = $eventKey;

        return $this;
    }

    /**
     * Get eventKey
     *
     * @return string 
     */
    public function getEventKey()
    {
        return $this->eventKey;
    }

    /**
     * Get idAccessLog
     *
     * @return integer 
     */
    public function getIdAccessLog()
    {
        return $this->idAccessLog;
    }
}
