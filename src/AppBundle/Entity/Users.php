<?php

namespace AppBundle\Entity;

/**
 * Users
 */
class Users
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $onlUsername;

    /**
     * @var string
     */
    private $passwordHash;

    /**
     * @var string
     */
    private $twitterToken;

    /**
     * @var string
     */
    private $facebookToken;

    /**
     * @var string
     */
    private $googleToken;

    /**
     * @var boolean
     */
    private $notifications = '0';

    /**
     * @var \DateTime
     */
    private $addedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $latestActivity;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set onlUsername
     *
     * @param string $onlUsername
     *
     * @return Users
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
     * Set passwordHash
     *
     * @param string $passwordHash
     *
     * @return Users
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    /**
     * Get passwordHash
     *
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * Set twitterToken
     *
     * @param string $twitterToken
     *
     * @return Users
     */
    public function setTwitterToken($twitterToken)
    {
        $this->twitterToken = $twitterToken;

        return $this;
    }

    /**
     * Get twitterToken
     *
     * @return string
     */
    public function getTwitterToken()
    {
        return $this->twitterToken;
    }

    /**
     * Set facebookToken
     *
     * @param string $facebookToken
     *
     * @return Users
     */
    public function setFacebookToken($facebookToken)
    {
        $this->facebookToken = $facebookToken;

        return $this;
    }

    /**
     * Get facebookToken
     *
     * @return string
     */
    public function getFacebookToken()
    {
        return $this->facebookToken;
    }

    /**
     * Set googleToken
     *
     * @param string $googleToken
     *
     * @return Users
     */
    public function setGoogleToken($googleToken)
    {
        $this->googleToken = $googleToken;

        return $this;
    }

    /**
     * Get googleToken
     *
     * @return string
     */
    public function getGoogleToken()
    {
        return $this->googleToken;
    }

    /**
     * Set notifications
     *
     * @param boolean $notifications
     *
     * @return Users
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * Get notifications
     *
     * @return boolean
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     *
     * @return Users
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
     * Set latestActivity
     *
     * @param \DateTime $latestActivity
     *
     * @return Users
     */
    public function setLatestActivity($latestActivity)
    {
        $this->latestActivity = $latestActivity;

        return $this;
    }

    /**
     * Get latestActivity
     *
     * @return \DateTime
     */
    public function getLatestActivity()
    {
        return $this->latestActivity;
    }
}

