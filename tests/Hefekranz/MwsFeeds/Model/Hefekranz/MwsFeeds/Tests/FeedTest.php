<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Tests;

use Hefekranz\MwsFeeds\Model\Feed;
use Hefekranz\MwsFeeds\Model\FulfillmentData;
use Hefekranz\MwsFeeds\Model\FulfillmentItem;
use Hefekranz\MwsFeeds\Model\FulfillmentItemCollection;
use Hefekranz\MwsFeeds\Model\MessageCollection;
use Hefekranz\MwsFeeds\Model\OrderFulfillmentMessage;
use Hefekranz\MwsFeeds\Serializer\SerializerFactory;
use Hefekranz\MwsFeeds\Model\OrderFulfillmentFeed;

class FeedTest extends \PHPUnit_Framework_TestCase
{
    public function buildFulfillmentFeed()
    {

        $feed = new Feed(Feed::TYPE_ORDER_FULFILLMENT);
        $feed->setMerchantIdentifier("merchantIdentifier");

        $messageCollection = new MessageCollection();

        $fulfillment = new OrderFulfillmentMessage();
        $fulfillment->setMerchantOrderId("OrderId");
        $fulfillment->setMerchantFulfillmentId("FulfillmentId");
        $fulfillment->setFulfillmentDate(new \DateTime());

        $fulfillmentData = new FulfillmentData();
        $fulfillmentData->setCarrierCode("DHL");
        $fulfillmentData->setShipperTrackingNumber("TrackingId");
        $fulfillmentData->setShippingMethod("ShippingMethod");

        $fulfillment->setFulfillmentData($fulfillmentData);

        $fulfillmentItems = new FulfillmentItemCollection();

        $item = new FulfillmentItem();
        $item->setMerchantOrderItemId("OrderItemId");
        $item->setMerchantFulfillmentItemId("FulfillmentId");
        $item->setQuantity(5);

        $fulfillmentItems->add($item);
        $fulfillment->setFulfillmentItemCollection($fulfillmentItems);

        $messageCollection->add($fulfillment);


        $fulfillment = new OrderFulfillmentMessage();
        $fulfillment->setMerchantOrderId("OrderId");
        $fulfillment->setMerchantFulfillmentId("FulfillmentId");
        $fulfillment->setFulfillmentDate(new \DateTime());

        $fulfillmentData = new FulfillmentData();
        $fulfillmentData->setCarrierCode("DHL");
        $fulfillmentData->setShipperTrackingNumber("TrackingId");
        $fulfillmentData->setShippingMethod("ShippingMethod");

        $fulfillment->setFulfillmentData($fulfillmentData);

        $fulfillmentItems = new FulfillmentItemCollection();

        $item = new FulfillmentItem();
        $item->setMerchantOrderItemId("OrderItemId");
        $item->setMerchantFulfillmentItemId("FulfillmentId");
        $item->setQuantity(5);

        $fulfillmentItems->add($item);
        $fulfillment->setFulfillmentItemCollection($fulfillmentItems);

        $messageCollection->add($fulfillment);

        $feed->setMessageCollection($messageCollection);

        return $feed;

    }

    public function testSerialization() {
        $feed = $this->buildFulfillmentFeed();

        $serializer = SerializerFactory::build();

        $data = $serializer->serialize($feed,"xml");
        print_r($serializer->getMetadataFactory()->getMetadataForClass("Hefekranz\\MwsFeeds\\Model\\Feed"));

        print_r($data);

    }


}
