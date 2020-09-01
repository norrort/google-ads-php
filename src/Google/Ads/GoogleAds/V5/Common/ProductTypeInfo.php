<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/criteria.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Type of a product offer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.ProductTypeInfo</code>
 */
class ProductTypeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Value of the type.
     *
     * Generated from protobuf field <code>string value = 3;</code>
     */
    protected $value = null;
    /**
     * Level of the type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ProductTypeLevelEnum.ProductTypeLevel level = 2;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           Value of the type.
     *     @type int $level
     *           Level of the type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Value of the type.
     *
     * Generated from protobuf field <code>string value = 3;</code>
     * @return string
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : '';
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Value of the type.
     *
     * Generated from protobuf field <code>string value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Level of the type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ProductTypeLevelEnum.ProductTypeLevel level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Level of the type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ProductTypeLevelEnum.ProductTypeLevel level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\ProductTypeLevelEnum\ProductTypeLevel::class);
        $this->level = $var;

        return $this;
    }

}

