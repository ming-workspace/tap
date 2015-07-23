<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReviewUser
 */
class ReviewUser
{
    /**
     * @var boolean
     */
    private $status;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $providerUserKey;

    /**
     * @var integer
     */
    private $consumerUserKey;

    /**
     * @var string
     */
    private $reviewCriterial1;

    /**
     * @var string
     */
    private $reviewCriterial2;

    /**
     * @var string
     */
    private $reviewCriterial3;

    /**
     * @var string
     */
    private $reviewCriterial4;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $createTime;

    /**
     * @var \DateTime
     */
    private $updateTime;

    /**
     * @var \DateTime
     */
    private $deleteTime;

    /**
     * @var integer
     */
    private $reviewKey;


    /**
     * Set status
     *
     * @param boolean $status
     * @return ReviewUser
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ReviewUser
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set providerUserKey
     *
     * @param integer $providerUserKey
     * @return ReviewUser
     */
    public function setProviderUserKey($providerUserKey)
    {
        $this->providerUserKey = $providerUserKey;

        return $this;
    }

    /**
     * Get providerUserKey
     *
     * @return integer 
     */
    public function getProviderUserKey()
    {
        return $this->providerUserKey;
    }

    /**
     * Set consumerUserKey
     *
     * @param integer $consumerUserKey
     * @return ReviewUser
     */
    public function setConsumerUserKey($consumerUserKey)
    {
        $this->consumerUserKey = $consumerUserKey;

        return $this;
    }

    /**
     * Get consumerUserKey
     *
     * @return integer 
     */
    public function getConsumerUserKey()
    {
        return $this->consumerUserKey;
    }

    /**
     * Set reviewCriterial1
     *
     * @param string $reviewCriterial1
     * @return ReviewUser
     */
    public function setReviewCriterial1($reviewCriterial1)
    {
        $this->reviewCriterial1 = $reviewCriterial1;

        return $this;
    }

    /**
     * Get reviewCriterial1
     *
     * @return string 
     */
    public function getReviewCriterial1()
    {
        return $this->reviewCriterial1;
    }

    /**
     * Set reviewCriterial2
     *
     * @param string $reviewCriterial2
     * @return ReviewUser
     */
    public function setReviewCriterial2($reviewCriterial2)
    {
        $this->reviewCriterial2 = $reviewCriterial2;

        return $this;
    }

    /**
     * Get reviewCriterial2
     *
     * @return string 
     */
    public function getReviewCriterial2()
    {
        return $this->reviewCriterial2;
    }

    /**
     * Set reviewCriterial3
     *
     * @param string $reviewCriterial3
     * @return ReviewUser
     */
    public function setReviewCriterial3($reviewCriterial3)
    {
        $this->reviewCriterial3 = $reviewCriterial3;

        return $this;
    }

    /**
     * Get reviewCriterial3
     *
     * @return string 
     */
    public function getReviewCriterial3()
    {
        return $this->reviewCriterial3;
    }

    /**
     * Set reviewCriterial4
     *
     * @param string $reviewCriterial4
     * @return ReviewUser
     */
    public function setReviewCriterial4($reviewCriterial4)
    {
        $this->reviewCriterial4 = $reviewCriterial4;

        return $this;
    }

    /**
     * Get reviewCriterial4
     *
     * @return string 
     */
    public function getReviewCriterial4()
    {
        return $this->reviewCriterial4;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return ReviewUser
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return ReviewUser
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime 
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param \DateTime $updateTime
     * @return ReviewUser
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return \DateTime 
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set deleteTime
     *
     * @param \DateTime $deleteTime
     * @return ReviewUser
     */
    public function setDeleteTime($deleteTime)
    {
        $this->deleteTime = $deleteTime;

        return $this;
    }

    /**
     * Get deleteTime
     *
     * @return \DateTime 
     */
    public function getDeleteTime()
    {
        return $this->deleteTime;
    }

    /**
     * Get reviewKey
     *
     * @return integer 
     */
    public function getReviewKey()
    {
        return $this->reviewKey;
    }
}
