<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;


class FulfillmentItem
{
    /** @var  string */
    private $merchantOrderItemId;

    /** @var  string */
    private $merchantFulfillmentItemId;

    /** @var  int */
    private $quantity;

    /**
     * @return string
     */
    public function getMerchantOrderItemId()
    {
        return $this->merchantOrderItemId;
    }

    /**
     * @param string $merchantOrderItemId
     */
    public function setMerchantOrderItemId(string $merchantOrderItemId)
    {
        $this->merchantOrderItemId = $merchantOrderItemId;
    }

    /**
     * @return string
     */
    public function getMerchantFulfillmentItemId()
    {
        return $this->merchantFulfillmentItemId;
    }

    /**
     * @param string $merchantFulfillmentItemId
     */
    public function setMerchantFulfillmentItemId(string $merchantFulfillmentItemId)
    {
        $this->merchantFulfillmentItemId = $merchantFulfillmentItemId;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

}