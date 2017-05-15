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
    public function setMerchantFulfillmentItemId(string $merchantFulfillmentItemId = null)
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
    public function setQuantity(int $quantity = null)
    {
        $this->quantity = $quantity;
    }

}