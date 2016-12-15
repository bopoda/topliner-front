<?php

namespace AppBundle\Entity;

/**
 * OnlinerComments
 */
class OnlinerComments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $postId;

    /**
     * @var integer
     */
    private $onlCommentId;

    /**
     * @var integer
     */
    private $onlUserId;

    /**
     * @var \DateTime
     */
    private $onlPublishedAt;

    /**
     * @var boolean
     */
    private $onlCensored = '0';

    /**
     * @var boolean
     */
    private $onlRemoved = '0';

    /**
     * @var integer
     */
    private $onlLikesCount = '0';

    /**
     * @var string
     */
    private $onlComment;

    /**
     * @var string
     */
    private $onlCommentCensored;

    /**
     * @var \DateTime
     */
    private $addedAt = 'CURRENT_TIMESTAMP';

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
     * Set postId
     *
     * @param integer $postId
     *
     * @return OnlinerComments
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set onlCommentId
     *
     * @param integer $onlCommentId
     *
     * @return OnlinerComments
     */
    public function setOnlCommentId($onlCommentId)
    {
        $this->onlCommentId = $onlCommentId;

        return $this;
    }

    /**
     * Get onlCommentId
     *
     * @return integer
     */
    public function getOnlCommentId()
    {
        return $this->onlCommentId;
    }

    /**
     * Set onlUserId
     *
     * @param integer $onlUserId
     *
     * @return OnlinerComments
     */
    public function setOnlUserId($onlUserId)
    {
        $this->onlUserId = $onlUserId;

        return $this;
    }

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
     * Set onlPublishedAt
     *
     * @param \DateTime $onlPublishedAt
     *
     * @return OnlinerComments
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
     * Set onlCensored
     *
     * @param boolean $onlCensored
     *
     * @return OnlinerComments
     */
    public function setOnlCensored($onlCensored)
    {
        $this->onlCensored = $onlCensored;

        return $this;
    }

    /**
     * Get onlCensored
     *
     * @return boolean
     */
    public function getOnlCensored()
    {
        return $this->onlCensored;
    }

    /**
     * Set onlRemoved
     *
     * @param boolean $onlRemoved
     *
     * @return OnlinerComments
     */
    public function setOnlRemoved($onlRemoved)
    {
        $this->onlRemoved = $onlRemoved;

        return $this;
    }

    /**
     * Get onlRemoved
     *
     * @return boolean
     */
    public function getOnlRemoved()
    {
        return $this->onlRemoved;
    }

    /**
     * Set onlLikesCount
     *
     * @param integer $onlLikesCount
     *
     * @return OnlinerComments
     */
    public function setOnlLikesCount($onlLikesCount)
    {
        $this->onlLikesCount = $onlLikesCount;

        return $this;
    }

    /**
     * Get onlLikesCount
     *
     * @return integer
     */
    public function getOnlLikesCount()
    {
        return $this->onlLikesCount;
    }

    /**
     * Set onlComment
     *
     * @param string $onlComment
     *
     * @return OnlinerComments
     */
    public function setOnlComment($onlComment)
    {
        $this->onlComment = $onlComment;

        return $this;
    }

    /**
     * Get onlComment
     *
     * @return string
     */
    public function getOnlComment()
    {
        return $this->onlComment;
    }

    /**
     * Set onlCommentCensored
     *
     * @param string $onlCommentCensored
     *
     * @return OnlinerComments
     */
    public function setOnlCommentCensored($onlCommentCensored)
    {
        $this->onlCommentCensored = $onlCommentCensored;

        return $this;
    }

    /**
     * Get onlCommentCensored
     *
     * @return string
     */
    public function getOnlCommentCensored()
    {
        return $this->onlCommentCensored;
    }

    /**
     * Set addedAt
     *
     * @param \DateTime $addedAt
     *
     * @return OnlinerComments
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return OnlinerComments
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

