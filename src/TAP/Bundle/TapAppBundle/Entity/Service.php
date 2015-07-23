<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 */
class Service
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
     * @var float
     */
    private $price;

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
    private $serviceKey;


    /**
     * Set status
     *
     * @param boolean $status
     * @return Service
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
     * @return Service
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
     * Set price
     *
     * @param float $price
     * @return Service
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * Get serviceKey
     *
     * @return integer 
     */
    public function getServiceKey()
    {
        return $this->serviceKey;
    }
}
