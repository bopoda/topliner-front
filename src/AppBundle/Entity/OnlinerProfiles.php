<?php

namespace AppBundle\Entity;

/**
 * OnlinerProfiles
 */
class OnlinerProfiles
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
     * @var boolean
     */
    private $onlBanned = '0';

    /**
     * @var \DateTime
     */
    private $onlRegisteredAt;

    /**
     * @var string
     */
    private $onlCity;

    /**
     * @var string
     */
    private $onlOccupation;

    /**
     * @var string
     */
    private $onlInterests;

    /**
     * @var string
     */
    private $onlBirthday;

    /**
     * @var string
     */
    private $onlEmail;

    /**
     * @var string
     */
    private $onlJabber;

    /**
     * @var string
     */
    private $onlIcq;

    /**
     * @var string
     */
    private $onlSkype;

    /**
     * @var string
     */
    private $onlAim;

    /**
     * @var string
     */
    private $onlSite;

    /**
     * @var string
     */
    private $onlBlog;

    /**
     * @var string
     */
    private $onlDevices;

    /**
     * @var integer
     */
    private $onlCommentatorsRating;

    /**
     * @var boolean
     */
    private $onlCards = '0';

    /**
     * @var \DateTime
     */
    private $addedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $enqueuedAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * @return OnlinerProfiles
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
     * Set onlBanned
     *
     * @param boolean $onlBanned
     *
     * @return OnlinerProfiles
     */
    public function setOnlBanned($onlBanned)
    {
        $this->onlBanned = $onlBanned;

        return $this;
    }

    /**
     * Get onlBanned
     *
     * @return boolean
     */
    public function getOnlBanned()
    {
        return $this->onlBanned;
    }

    /**
     * Set onlRegisteredAt
     *
     * @param \DateTime $onlRegisteredAt
     *
     * @return OnlinerProfiles
     */
    public function setOnlRegisteredAt($onlRegisteredAt)
    {
        $this->onlRegisteredAt = $onlRegisteredAt;

        return $this;
    }

    /**
     * Get onlRegisteredAt
     *
     * @return \DateTime
     */
    public function getOnlRegisteredAt()
    {
        return $this->onlRegisteredAt;
    }

    /**
     * Set onlCity
     *
     * @param string $onlCity
     *
     * @return OnlinerProfiles
     */
    public function setOnlCity($onlCity)
    {
        $this->onlCity = $onlCity;

        return $this;
    }

    /**
     * Get onlCity
     *
     * @return string
     */
    public function getOnlCity()
    {
        return $this->onlCity;
    }

    /**
     * Set onlOccupation
     *
     * @param string $onlOccupation
     *
     * @return OnlinerProfiles
     */
    public function setOnlOccupation($onlOccupation)
    {
        $this->onlOccupation = $onlOccupation;

        return $this;
    }

    /**
     * Get onlOccupation
     *
     * @return string
     */
    public function getOnlOccupation()
    {
        return $this->onlOccupation;
    }

    /**
     * Set onlInterests
     *
     * @param string $onlInterests
     *
     * @return OnlinerProfiles
     */
    public function setOnlInterests($onlInterests)
    {
        $this->onlInterests = $onlInterests;

        return $this;
    }

    /**
     * Get onlInterests
     *
     * @return string
     */
    public function getOnlInterests()
    {
        return $this->onlInterests;
    }

    /**
     * Set onlBirthday
     *
     * @param string $onlBirthday
     *
     * @return OnlinerProfiles
     */
    public function setOnlBirthday($onlBirthday)
    {
        $this->onlBirthday = $onlBirthday;

        return $this;
    }

    /**
     * Get onlBirthday
     *
     * @return string
     */
    public function getOnlBirthday()
    {
        return $this->onlBirthday;
    }

    /**
     * Set onlEmail
     *
     * @param string $onlEmail
     *
     * @return OnlinerProfiles
     */
    public function setOnlEmail($onlEmail)
    {
        $this->onlEmail = $onlEmail;

        return $this;
    }

    /**
     * Get onlEmail
     *
     * @return string
     */
    public function getOnlEmail()
    {
        return $this->onlEmail;
    }

    /**
     * Set onlJabber
     *
     * @param string $onlJabber
     *
     * @return OnlinerProfiles
     */
    public function setOnlJabber($onlJabber)
    {
        $this->onlJabber = $onlJabber;

        return $this;
    }

    /**
     * Get onlJabber
     *
     * @return string
     */
    public function getOnlJabber()
    {
        return $this->onlJabber;
    }

    /**
     * Set onlIcq
     *
     * @param string $onlIcq
     *
     * @return OnlinerProfiles
     */
    public function setOnlIcq($onlIcq)
    {
        $this->onlIcq = $onlIcq;

        return $this;
    }

    /**
     * Get onlIcq
     *
     * @return string
     */
    public function getOnlIcq()
    {
        return $this->onlIcq;
    }

    /**
     * Set onlSkype
     *
     * @param string $onlSkype
     *
     * @return OnlinerProfiles
     */
    public function setOnlSkype($onlSkype)
    {
        $this->onlSkype = $onlSkype;

        return $this;
    }

    /**
     * Get onlSkype
     *
     * @return string
     */
    public function getOnlSkype()
    {
        return $this->onlSkype;
    }

    /**
     * Set onlAim
     *
     * @param string $onlAim
     *
     * @return OnlinerProfiles
     */
    public function setOnlAim($onlAim)
    {
        $this->onlAim = $onlAim;

        return $this;
    }

    /**
     * Get onlAim
     *
     * @return string
     */
    public function getOnlAim()
    {
        return $this->onlAim;
    }

    /**
     * Set onlSite
     *
     * @param string $onlSite
     *
     * @return OnlinerProfiles
     */
    public function setOnlSite($onlSite)
    {
        $this->onlSite = $onlSite;

        return $this;
    }

    /**
     * Get onlSite
     *
     * @return string
     */
    public function getOnlSite()
    {
        return $this->onlSite;
    }

    /**
     * Set onlBlog
     *
     * @param string $onlBlog
     *
     * @return OnlinerProfiles
     */
    public function setOnlBlog($onlBlog)
    {
        $this->onlBlog = $onlBlog;

        return $this;
    }

    /**
     * Get onlBlog
     *
     * @return string
     */
    public function getOnlBlog()
    {
        return $this->onlBlog;
    }

    /**
     * Set onlDevices
     *
     * @param string $onlDevices
     *
     * @return OnlinerProfiles
     */
    public function setOnlDevices($onlDevices)
    {
        $this->onlDevices = $onlDevices;

        return $this;
    }

    /**
     * Get onlDevices
     *
     * @return string
     */
    public function getOnlDevices()
    {
        return $this->onlDevices;
    }

    /**
     * Set onlCommentatorsRating
     *
     * @param integer $onlCommentatorsRating
     *
     * @return OnlinerProfiles
     */
    public function setOnlCommentatorsRating($onlCommentatorsRating)
    {
        $this->onlCommentatorsRating = $onlCommentatorsRating;

        return $this;
    }

    /**
     * Get onlCommentatorsRating
     *
     * @return integer
     */
    public function getOnlCommentatorsRating()
    {
        return $this->onlCommentatorsRating;
    }

    /**
     * Set onlCards
     *
     * @param boolean $onlCards
     *
     * @return OnlinerProfiles
     */
    public function setOnlCards($onlCards)
    {
        $this->onlCards = $onlCards;

        return $this;
    }

    /**
     * Get onlCards
     *
     * @return boolean
     */
    public function getOnlCards()
    {
        return $this->onlCards;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     *
     * @return OnlinerProfiles
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

    /**
     * Set enqueuedAt
     *
     * @param \DateTime $enqueuedAt
     *
     * @return OnlinerProfiles
     */
    public function setEnqueuedAt($enqueuedAt)
    {
        $this->enqueuedAt = $enqueuedAt;

        return $this;
    }

    /**
     * Get enqueuedAt
     *
     * @return \DateTime
     */
    public function getEnqueuedAt()
    {
        return $this->enqueuedAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return OnlinerProfiles
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

