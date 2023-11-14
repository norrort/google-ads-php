<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/criteria.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A custom audience criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.CustomAudienceInfo</code>
 */
class CustomAudienceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The CustomAudience resource name.
     *
     * Generated from protobuf field <code>string custom_audience = 1;</code>
     */
    protected $custom_audience = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $custom_audience
     *           The CustomAudience resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The CustomAudience resource name.
     *
     * Generated from protobuf field <code>string custom_audience = 1;</code>
     * @return string
     */
    public function getCustomAudience()
    {
        return $this->custom_audience;
    }

    /**
     * The CustomAudience resource name.
     *
     * Generated from protobuf field <code>string custom_audience = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_audience = $var;

        return $this;
    }

}
