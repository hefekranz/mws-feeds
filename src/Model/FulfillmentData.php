<?php
/**
 * @author Levin Mauritz <l.mauritz@delinero.de>
 *
 */

namespace Hefekranz\MwsFeeds\Model;


class FulfillmentData
{
    /** @var  string */
    private $carrierCode;

    /** @var  string */
    private $shippingMethod;

    /** @var  string */
    private $shipperTrackingNumber;

    /**
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * @param string $carrierCode
     */
    public function setCarrierCode(string $carrierCode)
    {
        $this->carrierCode = $carrierCode;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * @param string $shippingMethod
     */
    public function setShippingMethod(string $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * @return string
     */
    public function getShipperTrackingNumber()
    {
        return $this->shipperTrackingNumber;
    }

    /**
     * @param string $shipperTrackingNumber
     */
    public function setShipperTrackingNumber(string $shipperTrackingNumber)
    {
        $this->shipperTrackingNumber = $shipperTrackingNumber;
    }
}