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
        $this->setMessageCollection(new MessageCollection());
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