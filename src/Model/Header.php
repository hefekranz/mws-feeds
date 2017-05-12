<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;


class Header
{
    const DOCUMENT_VERSION_1_01 = "1.01";

    /** @var  string */
    private $documentVersion;

    /** @var  string */
    private $merchantIdentifier;

    public function __construct()
    {
        $this->setDocumentVersion(self::DOCUMENT_VERSION_1_01);
    }

    /**
     * @return string
     */
    public function getDocumentVersion()
    {
        return $this->documentVersion;
    }

    /**
     * @param string $documentVersion
     */
    public function setDocumentVersion(string $documentVersion)
    {
        $this->documentVersion = $documentVersion;
    }

    /**
     * @return string
     */
    public function getMerchantIdentifier()
    {
        return $this->merchantIdentifier;
    }

    /**
     * @param string $merchantIdentifier
     */
    public function setMerchantIdentifier(string $merchantIdentifier)
    {
        $this->merchantIdentifier = $merchantIdentifier;
    }

}