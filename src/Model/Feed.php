<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;


class Feed
{
    const TYPE_ORDER_FULFILLMENT = "OrderFulfillment";

    /** @var  Header */
    private $header;

    /** @var  string */
    private $messageType;

    /** @var  MessageCollection */
    private $messageCollection;

    public function __construct($messageType)
    {
        $this->setMessageType($messageType);
        $this->setHeader(new Header());
    }

    public function setMerchantIdentifier(string $merchantId) {
        $this->getHeader()->setMerchantIdentifier($merchantId);
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param Header $header
     */
    public function setHeader(Header $header)
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @param string $messageType
     */
    public function setMessageType(string $messageType)
    {
        $this->messageType = $messageType;
    }

    /**
     * @return MessageCollection
     */
    public function getMessageCollection()
    {
        return $this->messageCollection;
    }

    /**
     * @param MessageCollection $messageCollection
     */
    public function setMessageCollection(MessageCollection $messageCollection)
    {
        $this->messageCollection = $messageCollection;
    }

}