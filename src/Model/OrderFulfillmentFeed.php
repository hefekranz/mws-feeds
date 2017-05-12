<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;


use Hefekranz\MwsFeeds\Model\Feed;

class OrderFulfillmentFeed extends Feed
{
    public function __construct()
    {
        parent::__construct(parent::TYPE_ORDER_FULFILLMENT);
    }

}