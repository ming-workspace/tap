<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
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
     * @var string
     */
    private $description;

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
    private $categoryKey;


    /**
     * Set status
     *
     * @param boolean $status
     * @return Category
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
     * @return Category
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
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return Category
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
     * @return Category
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
     * @return Category
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
     * Get categoryKey
     *
     * @return integer 
     */
    public function getCategoryKey()
    {
        return $this->categoryKey;
    }
}
