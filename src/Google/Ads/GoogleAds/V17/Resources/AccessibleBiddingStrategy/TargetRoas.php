<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/accessible_bidding_strategy.proto

namespace Google\Ads\GoogleAds\V17\Resources\AccessibleBiddingStrategy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy that helps you maximize revenue while
 * averaging a specific target return on ad spend (ROAS).
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.AccessibleBiddingStrategy.TargetRoas</code>
 */
class TargetRoas extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The chosen revenue (based on conversion data) per unit of
     * spend.
     *
     * Generated from protobuf field <code>optional double target_roas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_roas = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $target_roas
     *           Output only. The chosen revenue (based on conversion data) per unit of
     *           spend.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\AccessibleBiddingStrategy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The chosen revenue (based on conversion data) per unit of
     * spend.
     *
     * Generated from protobuf field <code>optional double target_roas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getTargetRoas()
    {
        return isset($this->target_roas) ? $this->target_roas : 0.0;
    }

    public function hasTargetRoas()
    {
        return isset($this->target_roas);
    }

    public function clearTargetRoas()
    {
        unset($this->target_roas);
    }

    /**
     * Output only. The chosen revenue (based on conversion data) per unit of
     * spend.
     *
     * Generated from protobuf field <code>optional double target_roas = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setTargetRoas($var)
    {
        GPBUtil::checkDouble($var);
        $this->target_roas = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetRoas::class, \Google\Ads\GoogleAds\V17\Resources\AccessibleBiddingStrategy_TargetRoas::class);

