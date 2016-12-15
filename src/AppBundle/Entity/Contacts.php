<?php

namespace AppBundle\Entity;

/**
 * Contacts
 */
class Contacts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $addedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $answeredAt;

    /**
     * @var boolean
     */
    private $isViewed = '0';

    /**
     * @var boolean
     */
    private $isAnswered = '0';

    /**
     * @var boolean
     */
    private $isJunk = '0';


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
     * Set name
     *
     * @param string $name
     *
     * @return Contacts
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
     * Set email
     *
     * @param string $email
     *
     * @return Contacts
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
     * Set text
     *
     * @param string $text
     *
     * @return Contacts
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     *
     * @return Contacts
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
     * Set answeredAt
     *
     * @param \DateTime $answeredAt
     *
     * @return Contacts
     */
    public function setAnsweredAt($answeredAt)
    {
        $this->answeredAt = $answeredAt;

        return $this;
    }

    /**
     * Get answeredAt
     *
     * @return \DateTime
     */
    public function getAnsweredAt()
    {
        return $this->answeredAt;
    }

    /**
     * Set isViewed
     *
     * @param boolean $isViewed
     *
     * @return Contacts
     */
    public function setIsViewed($isViewed)
    {
        $this->isViewed = $isViewed;

        return $this;
    }

    /**
     * Get isViewed
     *
     * @return boolean
     */
    public function getIsViewed()
    {
        return $this->isViewed;
    }

    /**
     * Set isAnswered
     *
     * @param boolean $isAnswered
     *
     * @return Contacts
     */
    public function setIsAnswered($isAnswered)
    {
        $this->isAnswered = $isAnswered;

        return $this;
    }

    /**
     * Get isAnswered
     *
     * @return boolean
     */
    public function getIsAnswered()
    {
        return $this->isAnswered;
    }

    /**
     * Set isJunk
     *
     * @param boolean $isJunk
     *
     * @return Contacts
     */
    public function setIsJunk($isJunk)
    {
        $this->isJunk = $isJunk;

        return $this;
    }

    /**
     * Get isJunk
     *
     * @return boolean
     */
    public function getIsJunk()
    {
        return $this->isJunk;
    }
}
