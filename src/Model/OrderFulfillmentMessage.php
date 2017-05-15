<?php
/*******************************************************************************
 * @copyright Copyright 2017 Levin Mauritz
 * @license
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 ******************************************************************************/

/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;

use Hefekranz\MwsFeeds\Model\FulfillmentData;
use Hefekranz\MwsFeeds\Model\FulfillmentItemCollection;
use Hefekranz\MwsFeeds\Model\Message;

class OrderFulfillmentMessage
{
    /** @var  string */
    private $id;

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

    public function __construct()
    {
        $this->setId(uniqid("fulfillment-",true));
        $this->setFulfillmentData(new FulfillmentData());
        $this->setFulfillmentItemCollection(new FulfillmentItemCollection());
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

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
    public function setMerchantFulfillmentId(string $merchantFulfillmentId = null)
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