<?php

namespace AppBundle\Entity;

/**
 * OnlinerProfilesBanned
 */
class OnlinerProfilesBanned
{
    /**
     * @var integer
     */
    private $onlUserId;

    /**
     * @var string
     */
    private $onlUsername;

    /**
     * @var \DateTime
     */
    private $createdAt = 'CURRENT_TIMESTAMP';


    /**
     * Get onlUserId
     *
     * @return integer
     */
    public function getOnlUserId()
    {
        return $this->onlUserId;
    }

    /**
     * Set onlUsername
     *
     * @param string $onlUsername
     *
     * @return OnlinerProfilesBanned
     */
    public function setOnlUsername($onlUsername)
    {
        $this->onlUsername = $onlUsername;

        return $this;
    }

    /**
     * Get onlUsername
     *
     * @return string
     */
    public function getOnlUsername()
    {
        return $this->onlUsername;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return OnlinerProfilesBanned
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}

