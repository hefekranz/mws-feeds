# mws-feeds

This is a library of models based on the Amazon Feed API. You can build your Feed Model,  
process it in whatever way you like and serialize it to the mws feeds xml.

So far there is only the MWS OrderFulfillment Model, feel free to create a PR if you have things to add.

JMS Serializer is used for serialization to XML.

## Requirements
PHP7 (Models use [Scalar type declarations](http://php.net/manual/de/migration70.new-features.php#migration70.new-features.scalar-type-declarations))

## Installation
composer.json
```json
{
  "require": {
      "hefekranz/mws-feeds": "dev-master"
  },
  "repositories": [
        {
          "type": "git",
          "url": "https://github.com/hefekranz/mws-feeds"
        }
  ]
}
  
```
run composer install

## Usage

Plain old OO style for building:

```php

use Hefekranz\MwsFeeds\Model\Feed;
use Hefekranz\MwsFeeds\Model\FulfillmentItem;
use Hefekranz\MwsFeeds\Model\OrderFulfillment;

        $feed = new Feed(Feed::TYPE_ORDER_FULFILLMENT);
        $feed->setMerchantIdentifier("merchantIdentifier");

        $fulfillment = new OrderFulfillment;
        $fulfillment->setAmazonOrderId("OrderId");
        $fulfillment->setMerchantFulfillmentId("FulfillmentId");
        $fulfillment->setFulfillmentDate(new \DateTime("2017-01-01T01:01:01+0000"));

        $fulfillment->getFulfillmentData()->setCarrierCode("DHL");
        $fulfillment->getFulfillmentData()->setShipperTrackingNumber("TrackingId");
        $fulfillment->getFulfillmentData()->setShippingMethod("ShippingMethod");

        $item = new FulfillmentItem();
        $item->setAmazonOrderItemCode("OrderItemId");
        $item->setMerchantFulfillmentItemId("FulfillmentId");
        $item->setQuantity(5);

        $fulfillment->getFulfillmentItemCollection()->add($item);

        $feed->getMessageCollection()->add($fulfillment);
```

Serialization:

```php
use Hefekranz\MwsFeeds\Serializer\SerializerFactory;

        $serializer = SerializerFactory::build();
        $xml = $serializer->serialize($feed,"xml");
```

Result:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<AmazonEnvelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:noNamespaceSchemaLocation="http://g-ecx.images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/amzn-envelope.xsd">
  <Header>
    <DocumentVersion><![CDATA[1.01]]></DocumentVersion>
    <MerchantIdentifier><![CDATA[merchantIdentifier]]></MerchantIdentifier>
  </Header>
  <MessageType><![CDATA[OrderFulfillment]]></MessageType>
  <Message>
    <MessageID>1</MessageID>
    <OrderFulfillment>
      <AmazonOrderID><![CDATA[OrderId]]></AmazonOrderID>
      <MerchantFulfillmentId><![CDATA[FulfillmentId]]></MerchantFulfillmentId>
      <FulfillmentDate><![CDATA[2017-01-01T01:01:01+00:00]]></FulfillmentDate>
      <FulfillmentData>
        <CarrierCode><![CDATA[DHL]]></CarrierCode>
        <ShippingMethod><![CDATA[ShippingMethod]]></ShippingMethod>
        <ShipperTrackingNumber><![CDATA[TrackingId]]></ShipperTrackingNumber>
      </FulfillmentData>
      <Item>
        <AmazonOrderItemCode><![CDATA[OrderItemId]]></AmazonOrderItemCode>
        <MerchantFulfillmentItemId><![CDATA[FulfillmentId]]></MerchantFulfillmentItemId>
        <Quantity>5</Quantity>
      </Item>
    </OrderFulfillment>
  </Message>
</AmazonEnvelope>

```