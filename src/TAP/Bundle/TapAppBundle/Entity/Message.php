<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 */
class Message
{
    /**
     * @var integer
     */
    private $fromUserKey;

    /**
     * @var integer
     */
    private $toUserKey;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $createTime;

    /**
     * @var integer
     */
    private $messageKey;


    /**
     * Set fromUserKey
     *
     * @param integer $fromUserKey
     * @return Message
     */
    public function setFromUserKey($fromUserKey)
    {
        $this->fromUserKey = $fromUserKey;

        return $this;
    }

    /**
     * Get fromUserKey
     *
     * @return integer 
     */
    public function getFromUserKey()
    {
        return $this->fromUserKey;
    }

    /**
     * Set toUserKey
     *
     * @param integer $toUserKey
     * @return Message
     */
    public function setToUserKey($toUserKey)
    {
        $this->toUserKey = $toUserKey;

        return $this;
    }

    /**
     * Get toUserKey
     *
     * @return integer 
     */
    public function getToUserKey()
    {
        return $this->toUserKey;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Message
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
     * Set content
     *
     * @param string $content
     * @return Message
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return Message
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
     * Get messageKey
     *
     * @return integer 
     */
    public function getMessageKey()
    {
        return $this->messageKey;
    }
}
