<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A plannable location: a country, a DMA, a metro region, a tv region,
 * a province.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.PlannableLocation</code>
 */
class PlannableLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * The location identifier.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 1;</code>
     */
    protected $id = null;
    /**
     * The unique location name in english.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     */
    protected $name = null;
    /**
     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parent_country_id = 3;</code>
     */
    protected $parent_country_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $id
     *           The location identifier.
     *     @type \Google\Protobuf\StringValue $name
     *           The unique location name in english.
     *     @type \Google\Protobuf\Int64Value $parent_country_id
     *           The parent country code, not present if location is a country.
     *           If present will always be a criterion id: additional information, such as
     *           country name are returned both via ListPlannableLocations or directly by
     *           accessing GeoTargetConstantService with the criterion id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The location identifier.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The location identifier.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 1;</code>
     * @return string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The location identifier.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The location identifier.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * The unique location name in english.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The unique location name in english.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * The unique location name in english.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The unique location name in english.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parent_country_id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getParentCountryId()
    {
        return isset($this->parent_country_id) ? $this->parent_country_id : null;
    }

    public function hasParentCountryId()
    {
        return isset($this->parent_country_id);
    }

    public function clearParentCountryId()
    {
        unset($this->parent_country_id);
    }

    /**
     * Returns the unboxed value from <code>getParentCountryId()</code>

     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parent_country_id = 3;</code>
     * @return int|string|null
     */
    public function getParentCountryIdUnwrapped()
    {
        return $this->readWrapperValue("parent_country_id");
    }

    /**
     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parent_country_id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setParentCountryId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->parent_country_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The parent country code, not present if location is a country.
     * If present will always be a criterion id: additional information, such as
     * country name are returned both via ListPlannableLocations or directly by
     * accessing GeoTargetConstantService with the criterion id.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value parent_country_id = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setParentCountryIdUnwrapped($var)
    {
        $this->writeWrapperValue("parent_country_id", $var);
        return $this;}

}

