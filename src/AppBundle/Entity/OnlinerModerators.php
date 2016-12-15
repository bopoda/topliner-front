<?php

namespace AppBundle\Entity;

/**
 * OnlinerModerators
 */
class OnlinerModerators
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
     * @var string
     */
    private $moderatedOnlUserIds;

    /**
     * @var \DateTime
     */
    private $firstActivityAt;

    /**
     * @var \DateTime
     */
    private $latestActivityAt;

    /**
     * @var \DateTime
     */
    private $addedAt = 'CURRENT_TIMESTAMP';


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
     * @return OnlinerModerators
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
     * Set moderatedOnlUserIds
     *
     * @param string $moderatedOnlUserIds
     *
     * @return OnlinerModerators
     */
    public function setModeratedOnlUserIds($moderatedOnlUserIds)
    {
        $this->moderatedOnlUserIds = $moderatedOnlUserIds;

        return $this;
    }

    /**
     * Get moderatedOnlUserIds
     *
     * @return string
     */
    public function getModeratedOnlUserIds()
    {
        return $this->moderatedOnlUserIds;
    }

    /**
     * Set firstActivityAt
     *
     * @param \DateTime $firstActivityAt
     *
     * @return OnlinerModerators
     */
    public function setFirstActivityAt($firstActivityAt)
    {
        $this->firstActivityAt = $firstActivityAt;

        return $this;
    }

    /**
     * Get firstActivityAt
     *
     * @return \DateTime
     */
    public function getFirstActivityAt()
    {
        return $this->firstActivityAt;
    }

    /**
     * Set latestActivityAt
     *
     * @param \DateTime $latestActivityAt
     *
     * @return OnlinerModerators
     */
    public function setLatestActivityAt($latestActivityAt)
    {
        $this->latestActivityAt = $latestActivityAt;

        return $this;
    }

    /**
     * Get latestActivityAt
     *
     * @return \DateTime
     */
    public function getLatestActivityAt()
    {
        return $this->latestActivityAt;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     *
     * @return OnlinerModerators
     */
    public function setAddedAt($addedAt)
    {
        $this->addedAt = $addedAt;

        return $this;
    }

    /**
     * Get addedAt
     *
     * @return \DateTime
     */
    public function getAddedAt()
    {
        return $this->addedAt;
    }
}

