<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;


class Message
{
    /** @var  int */
    private $messageId;

    /**
     * @return int
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param int $messageId
     */
    public function setMessageId(int $messageId)
    {
        $this->messageId = $messageId;
    }


}