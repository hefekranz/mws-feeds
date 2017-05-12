<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;

use Hefekranz\MwsFeeds\Model\FulfillmentData;
use Hefekranz\MwsFeeds\Model\FulfillmentItemCollection;
use Hefekranz\MwsFeeds\Model\Message;

class OrderFulfillmentMessage extends Message
{
    /** @var  string */
    private $merchantOrderId;

    /** @var  string */
    private $merchantFulfillmentId;

    /** @var  \DateTime */
    private $fulfillmentDate;

    /** @var  FulfillmentData */
    private $fulfillmentData;

    /** @var  FulfillmentItemCollection */
    private $fulfillmentItemCollection;

    /**
     * @return string
     */
    public function getMerchantOrderId()
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string $merchantOrderId
     */
    public function setMerchantOrderId(string $merchantOrderId)
    {
        $this->merchantOrderId = $merchantOrderId;
    }

    /**
     * @return string
     */
    public function getMerchantFulfillmentId()
    {
        return $this->merchantFulfillmentId;
    }

    /**
     * @param string $merchantFulfillmentId
     */
    public function setMerchantFulfillmentId(string $merchantFulfillmentId)
    {
        $this->merchantFulfillmentId = $merchantFulfillmentId;
    }

    /**
     * @return \DateTime
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * @param \DateTime $fulfillmentDate
     */
    public function setFulfillmentDate(\DateTime $fulfillmentDate)
    {
        $this->fulfillmentDate = $fulfillmentDate;
    }

    /**
     * @return FulfillmentData
     */
    public function getFulfillmentData()
    {
        return $this->fulfillmentData;
    }

    /**
     * @param FulfillmentData $fulfillmentData
     */
    public function setFulfillmentData(FulfillmentData $fulfillmentData)
    {
        $this->fulfillmentData = $fulfillmentData;
    }

    /**
     * @return FulfillmentItemCollection
     */
    public function getFulfillmentItemCollection()
    {
        return $this->fulfillmentItemCollection;
    }

    /**
     * @param FulfillmentItemCollection $fulfillmentItemCollection
     */
    public function setFulfillmentItemCollection(FulfillmentItemCollection $fulfillmentItemCollection)
    {
        $this->fulfillmentItemCollection = $fulfillmentItemCollection;
    }

}