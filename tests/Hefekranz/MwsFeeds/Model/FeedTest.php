<?php
/**
 * Copyright 2017 Levin Mauritz
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Hefekranz\MwsFeeds\Tests;

use Hefekranz\MwsFeeds\Model\Feed;
use Hefekranz\MwsFeeds\Model\FulfillmentItem;
use Hefekranz\MwsFeeds\Model\OrderFulfillmentMessage;
use Hefekranz\MwsFeeds\Serializer\SerializerFactory;

class FeedTest extends \PHPUnit_Framework_TestCase
{
    public function buildFulfillmentFeed()
    {

        $feed = new Feed(Feed::TYPE_ORDER_FULFILLMENT);
        $feed->setMerchantIdentifier("merchantIdentifier");

        $fulfillment = new OrderFulfillmentMessage();
        $fulfillment->setMerchantOrderId("OrderId");
        $fulfillment->setMerchantFulfillmentId("FulfillmentId");
        $fulfillment->setFulfillmentDate(new \DateTime());

        $fulfillment->getFulfillmentData()->setCarrierCode("DHL");
        $fulfillment->getFulfillmentData()->setShipperTrackingNumber("TrackingId");
        $fulfillment->getFulfillmentData()->setShippingMethod("ShippingMethod");

        $item = new FulfillmentItem();
        $item->setMerchantOrderItemId("OrderItemId");
        $item->setMerchantFulfillmentItemId("FulfillmentId");
        $item->setQuantity(5);

        $fulfillment->getFulfillmentItemCollection()->add($item);

        $feed->getMessageCollection()->add($fulfillment);

        return $feed;

    }

    public function testXmlSerialization() {

        $feed = $this->buildFulfillmentFeed();
        $serializer = SerializerFactory::build();
        $data = $serializer->serialize($feed,"xml");

        print_r($data);

    }


}
