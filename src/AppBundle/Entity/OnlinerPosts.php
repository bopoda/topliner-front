<?php

namespace AppBundle\Entity;

/**
 * OnlinerPosts
 */
class OnlinerPosts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $project;

    /**
     * @var integer
     */
    private $onlPostId;

    /**
     * @var string
     */
    private $onlLink;

    /**
     * @var binary
     */
    private $onlLinkHash;

    /**
     * @var string
     */
    private $onlCaption;

    /**
     * @var string
     */
    private $onlImage;

    /**
     * @var string
     */
    private $onlAuthor;

    /**
     * @var \DateTime
     */
    private $onlPublishedAt;

    /**
     * @var integer
     */
    private $onlCountComments = '0';

    /**
     * @var integer
     */
    private $onlCountViews = '0';

    /**
     * @var string
     */
    private $onlShortText;

    /**
     * @var string
     */
    private $onlText;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set project
     *
     * @param string $project
     *
     * @return OnlinerPosts
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set onlPostId
     *
     * @param integer $onlPostId
     *
     * @return OnlinerPosts
     */
    public function setOnlPostId($onlPostId)
    {
        $this->onlPostId = $onlPostId;

        return $this;
    }

    /**
     * Get onlPostId
     *
     * @return integer
     */
    public function getOnlPostId()
    {
        return $this->onlPostId;
    }

    /**
     * Set onlLink
     *
     * @param string $onlLink
     *
     * @return OnlinerPosts
     */
    public function setOnlLink($onlLink)
    {
        $this->onlLink = $onlLink;

        return $this;
    }

    /**
     * Get onlLink
     *
     * @return string
     */
    public function getOnlLink()
    {
        return $this->onlLink;
    }

    /**
     * Set onlLinkHash
     *
     * @param binary $onlLinkHash
     *
     * @return OnlinerPosts
     */
    public function setOnlLinkHash($onlLinkHash)
    {
        $this->onlLinkHash = $onlLinkHash;

        return $this;
    }

    /**
     * Get onlLinkHash
     *
     * @return binary
     */
    public function getOnlLinkHash()
    {
        return $this->onlLinkHash;
    }

    /**
     * Set onlCaption
     *
     * @param string $onlCaption
     *
     * @return OnlinerPosts
     */
    public function setOnlCaption($onlCaption)
    {
        $this->onlCaption = $onlCaption;

        return $this;
    }

    /**
     * Get onlCaption
     *
     * @return string
     */
    public function getOnlCaption()
    {
        return $this->onlCaption;
    }

    /**
     * Set onlImage
     *
     * @param string $onlImage
     *
     * @return OnlinerPosts
     */
    public function setOnlImage($onlImage)
    {
        $this->onlImage = $onlImage;

        return $this;
    }

    /**
     * Get onlImage
     *
     * @return string
     */
    public function getOnlImage()
    {
        return $this->onlImage;
    }

    /**
     * Set onlAuthor
     *
     * @param string $onlAuthor
     *
     * @return OnlinerPosts
     */
    public function setOnlAuthor($onlAuthor)
    {
        $this->onlAuthor = $onlAuthor;

        return $this;
    }

    /**
     * Get onlAuthor
     *
     * @return string
     */
    public function getOnlAuthor()
    {
        return $this->onlAuthor;
    }

    /**
     * Set onlPublishedAt
     *
     * @param \DateTime $onlPublishedAt
     *
     * @return OnlinerPosts
     */
    public function setOnlPublishedAt($onlPublishedAt)
    {
        $this->onlPublishedAt = $onlPublishedAt;

        return $this;
    }

    /**
     * Get onlPublishedAt
     *
     * @return \DateTime
     */
    public function getOnlPublishedAt()
    {
        return $this->onlPublishedAt;
    }

    /**
     * Set onlCountComments
     *
     * @param integer $onlCountComments
     *
     * @return OnlinerPosts
     */
    public function setOnlCountComments($onlCountComments)
    {
        $this->onlCountComments = $onlCountComments;

        return $this;
    }

    /**
     * Get onlCountComments
     *
     * @return integer
     */
    public function getOnlCountComments()
    {
        return $this->onlCountComments;
    }

    /**
     * Set onlCountViews
     *
     * @param integer $onlCountViews
     *
     * @return OnlinerPosts
     */
    public function setOnlCountViews($onlCountViews)
    {
        $this->onlCountViews = $onlCountViews;

        return $this;
    }

    /**
     * Get onlCountViews
     *
     * @return integer
     */
    public function getOnlCountViews()
    {
        return $this->onlCountViews;
    }

    /**
     * Set onlShortText
     *
     * @param string $onlShortText
     *
     * @return OnlinerPosts
     */
    public function setOnlShortText($onlShortText)
    {
        $this->onlShortText = $onlShortText;

        return $this;
    }

    /**
     * Get onlShortText
     *
     * @return string
     */
    public function getOnlShortText()
    {
        return $this->onlShortText;
    }

    /**
     * Set onlText
     *
     * @param string $onlText
     *
     * @return OnlinerPosts
     */
    public function setOnlText($onlText)
    {
        $this->onlText = $onlText;

        return $this;
    }

    /**
     * Get onlText
     *
     * @return string
     */
    public function getOnlText()
    {
        return $this->onlText;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     *
     * @return OnlinerPosts
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
     * @return OnlinerPosts
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
     * @return OnlinerPosts
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

