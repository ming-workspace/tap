<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 */
class Video
{
    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $userKey;

    /**
     * @var float
     */
    private $size;

    /**
     * @var string
     */
    private $path;

    /**
     * @var \DateTime
     */
    private $createTime;

    /**
     * @var integer
     */
    private $videoKey;


    /**
     * Set status
     *
     * @param boolean $status
     * @return Video
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
     * Set userKey
     *
     * @param integer $userKey
     * @return Video
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
     * Set size
     *
     * @param float $size
     * @return Video
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return float 
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Video
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return Video
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
     * Get videoKey
     *
     * @return integer 
     */
    public function getVideoKey()
    {
        return $this->videoKey;
    }
}
