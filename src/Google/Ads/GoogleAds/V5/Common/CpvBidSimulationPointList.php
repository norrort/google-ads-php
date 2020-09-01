<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/simulation.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A container for simulation points for simulations of type CPV_BID.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.CpvBidSimulationPointList</code>
 */
class CpvBidSimulationPointList extends \Google\Protobuf\Internal\Message
{
    /**
     * Projected metrics for a series of CPV bid amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.CpvBidSimulationPoint points = 1;</code>
     */
    private $points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V5\Common\CpvBidSimulationPoint[]|\Google\Protobuf\Internal\RepeatedField $points
     *           Projected metrics for a series of CPV bid amounts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\Simulation::initOnce();
        parent::__construct($data);
    }

    /**
     * Projected metrics for a series of CPV bid amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.CpvBidSimulationPoint points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Projected metrics for a series of CPV bid amounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.CpvBidSimulationPoint points = 1;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\CpvBidSimulationPoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V5\Common\CpvBidSimulationPoint::class);
        $this->points = $arr;

        return $this;
    }

}

