<?php

namespace TAP\Bundle\TapAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 */
class Payment
{
    /**
     * @var integer
     */
    private $paymentKey;


    /**
     * Get paymentKey
     *
     * @return integer 
     */
    public function getPaymentKey()
    {
        return $this->paymentKey;
    }
}
