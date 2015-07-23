<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReviewTour
 */
class ReviewTour
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
    private $userKey;

    /**
     * @var integer
     */
    private $tourKey;

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
    private $comments;

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
    private $reviewTourKey;


    /**
     * Set status
     *
     * @param boolean $status
     * @return ReviewTour
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
     * @return ReviewTour
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
     * Set userKey
     *
     * @param integer $userKey
     * @return ReviewTour
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;

        return $this;
    }

    /**
     * Get userKey
     *
     * @return integer 
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * Set tourKey
     *
     * @param integer $tourKey
     * @return ReviewTour
     */
    public function setTourKey($tourKey)
    {
        $this->tourKey = $tourKey;

        return $this;
    }

    /**
     * Get tourKey
     *
     * @return integer 
     */
    public function getTourKey()
    {
        return $this->tourKey;
    }

    /**
     * Set reviewCriterial1
     *
     * @param string $reviewCriterial1
     * @return ReviewTour
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
     * @return ReviewTour
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
     * @return ReviewTour
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
     * @return ReviewTour
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
     * Set comments
     *
     * @param string $comments
     * @return ReviewTour
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return ReviewTour
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
     * @return ReviewTour
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
     * @return ReviewTour
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
     * Get reviewTourKey
     *
     * @return integer 
     */
    public function getReviewTourKey()
    {
        return $this->reviewTourKey;
    }
}
