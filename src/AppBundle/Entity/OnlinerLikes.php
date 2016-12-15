<?php

namespace AppBundle\Entity;

/**
 * OnlinerLikes
 */
class OnlinerLikes
{
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
    private $onlCounter;

    /**
     * @var \DateTime
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';


    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return OnlinerLikes
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
     * @return OnlinerLikes
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
     * Set onlCounter
     *
     * @param integer $onlCounter
     *
     * @return OnlinerLikes
     */
    public function setOnlCounter($onlCounter)
    {
        $this->onlCounter = $onlCounter;

        return $this;
    }

    /**
     * Get onlCounter
     *
     * @return integer
     */
    public function getOnlCounter()
    {
        return $this->onlCounter;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return OnlinerLikes
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

