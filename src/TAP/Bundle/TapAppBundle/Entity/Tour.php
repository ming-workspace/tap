<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tour
 */
class Tour {

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
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $startTime;

    /**
     * @var \DateTime
     */
    private $endTime;

    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var integer
     */
    private $occupancy;

    /**
     * @var boolean
     */
    private $invitationOnly;

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
    private $tourKey;

    /**
     * Set status
     *
     * @param boolean $status
     * @return Tour
     */
    public function setStatus($status) {
        $this -> status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus() {
        return $this -> status;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Tour
     */
    public function setTitle($title) {
        $this -> title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this -> title;
    }

    /**
     * Set providerUserKey
     *
     * @param integer $providerUserKey
     * @return Tour
     */
    public function setProviderUserKey($providerUserKey) {
        $this -> providerUserKey = $providerUserKey;

        return $this;
    }

    /**
     * Get providerUserKey
     *
     * @return integer
     */
    public function getProviderUserKey() {
        return $this -> providerUserKey;
    }

    /**
     * Set consumerUserKey
     *
     * @param integer $consumerUserKey
     * @return Tour
     */
    public function setConsumerUserKey($consumerUserKey) {
        $this -> consumerUserKey = $consumerUserKey;

        return $this;
    }

    /**
     * Get consumerUserKey
     *
     * @return integer
     */
    public function getConsumerUserKey() {
        return $this -> consumerUserKey;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Tour
     */
    public function setPrice($price) {
        $this -> price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice() {
        return $this -> price;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Tour
     */
    public function setCountry($country) {
        $this -> country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry() {
        return $this -> country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Tour
     */
    public function setCity($city) {
        $this -> city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity() {
        return $this -> city;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Tour
     */
    public function setCategory($category) {
        $this -> category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory() {
        return $this -> category;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Tour
     */
    public function setDescription($description) {
        $this -> description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this -> description;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Tour
     */
    public function setStartTime($startTime) {
        $this -> startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime() {
        return $this -> startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     * @return Tour
     */
    public function setEndTime($endTime) {
        $this -> endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime() {
        return $this -> endTime;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     * @return Tour
     */
    public function setCapacity($capacity) {
        $this -> capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity() {
        return $this -> capacity;
    }

    /**
     * Set occupancy
     *
     * @param integer $occupancy
     * @return Tour
     */
    public function setOccupancy($occupancy) {
        $this -> occupancy = $occupancy;

        return $this;
    }

    /**
     * Get occupancy
     *
     * @return integer
     */
    public function getOccupancy() {
        return $this -> occupancy;
    }

    /**
     * Set invitationOnly
     *
     * @param boolean $invitationOnly
     * @return Tour
     */
    public function setInvitationOnly($invitationOnly) {
        $this -> invitationOnly = $invitationOnly;

        return $this;
    }

    /**
     * Get invitationOnly
     *
     * @return boolean
     */
    public function getInvitationOnly() {
        return $this -> invitationOnly;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     * @return Tour
     */
    public function setCreateTime($createTime) {
        $this -> createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime
     */
    public function getCreateTime() {
        return $this -> createTime;
    }

    /**
     * Set updateTime
     *
     * @param \DateTime $updateTime
     * @return Tour
     */
    public function setUpdateTime($updateTime) {
        $this -> updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return \DateTime
     */
    public function getUpdateTime() {
        return $this -> updateTime;
    }

    /**
     * Set deleteTime
     *
     * @param \DateTime $deleteTime
     * @return Tour
     */
    public function setDeleteTime($deleteTime) {
        $this -> deleteTime = $deleteTime;

        return $this;
    }

    /**
     * Get deleteTime
     *
     * @return \DateTime
     */
    public function getDeleteTime() {
        return $this -> deleteTime;
    }

    /**
     * Get tourKey
     *
     * @return integer
     */
    public function getTourKey() {
        return $this -> tourKey;
    }

}
