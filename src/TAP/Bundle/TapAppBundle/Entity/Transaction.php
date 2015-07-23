<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 */
class Transaction
{
    /**
     * @var integer
     */
    private $tourKey;

    /**
     * @var integer
     */
    private $providerUserKey;

    /**
     * @var integer
     */
    private $consumerUserKey;

    /**
     * @var float
     */
    private $price;

    /**
     * @var boolean
     */
    private $status;

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
    private $transactionKey;


    /**
     * Set tourKey
     *
     * @param integer $tourKey
     * @return Transaction
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
     * Set providerUserKey
     *
     * @param integer $providerUserKey
     * @return Transaction
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
     * @return Transaction
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
     * Set price
     *
     * @param float $price
     * @return Transaction
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
     * Set status
     *
     * @param boolean $status
     * @return Transaction
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
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return Transaction
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
     * @return Transaction
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
     * @return Transaction
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
     * Get transactionKey
     *
     * @return integer 
     */
    public function getTransactionKey()
    {
        return $this->transactionKey;
    }
}
