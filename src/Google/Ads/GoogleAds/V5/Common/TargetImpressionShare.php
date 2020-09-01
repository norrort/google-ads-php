<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/bidding.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy that sets bids so that a certain percentage of
 * search ads are shown at the top of the first page (or other targeted
 * location).
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.TargetImpressionShare</code>
 */
class TargetImpressionShare extends \Google\Protobuf\Internal\Message
{
    /**
     * The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1;</code>
     */
    protected $location = 0;
    /**
     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>int64 location_fraction_micros = 4;</code>
     */
    protected $location_fraction_micros = null;
    /**
     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>int64 cpc_bid_ceiling_micros = 5;</code>
     */
    protected $cpc_bid_ceiling_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $location
     *           The targeted location on the search results page.
     *     @type int|string $location_fraction_micros
     *           The desired fraction of ads to be shown in the targeted location in micros.
     *           E.g. 1% equals 10,000.
     *     @type int|string $cpc_bid_ceiling_micros
     *           The highest CPC bid the automated bidding system is permitted to specify.
     *           This is a required field entered by the advertiser that sets the ceiling
     *           and specified in local micros.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1;</code>
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\TargetImpressionShareLocationEnum\TargetImpressionShareLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>int64 location_fraction_micros = 4;</code>
     * @return int|string
     */
    public function getLocationFractionMicros()
    {
        return isset($this->location_fraction_micros) ? $this->location_fraction_micros : 0;
    }

    public function hasLocationFractionMicros()
    {
        return isset($this->location_fraction_micros);
    }

    public function clearLocationFractionMicros()
    {
        unset($this->location_fraction_micros);
    }

    /**
     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>int64 location_fraction_micros = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocationFractionMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->location_fraction_micros = $var;

        return $this;
    }

    /**
     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>int64 cpc_bid_ceiling_micros = 5;</code>
     * @return int|string
     */
    public function getCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros) ? $this->cpc_bid_ceiling_micros : 0;
    }

    public function hasCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros);
    }

    public function clearCpcBidCeilingMicros()
    {
        unset($this->cpc_bid_ceiling_micros);
    }

    /**
     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>int64 cpc_bid_ceiling_micros = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

}

