<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/feed_mapping.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Maps from feed attribute id to a placeholder or criterion field id.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.AttributeFieldMapping</code>
 */
class AttributeFieldMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Feed attribute from which to map.
     *
     * Generated from protobuf field <code>optional int64 feed_attribute_id = 24 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $feed_attribute_id = null;
    /**
     * Output only. The placeholder field ID. If a placeholder field enum is not
     * published in the current API version, then this field will be populated and
     * the field oneof will be empty. This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 field_id = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $field_id = null;
    protected $field;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $feed_attribute_id
     *           Immutable. Feed attribute from which to map.
     *     @type int|string $field_id
     *           Output only. The placeholder field ID. If a placeholder field enum is not
     *           published in the current API version, then this field will be populated and
     *           the field oneof will be empty. This field is read-only.
     *     @type int $sitelink_field
     *           Immutable. Sitelink Placeholder Fields.
     *     @type int $call_field
     *           Immutable. Call Placeholder Fields.
     *     @type int $app_field
     *           Immutable. App Placeholder Fields.
     *     @type int $location_field
     *           Output only. Location Placeholder Fields. This field is read-only.
     *     @type int $affiliate_location_field
     *           Output only. Affiliate Location Placeholder Fields. This field is
     *           read-only.
     *     @type int $callout_field
     *           Immutable. Callout Placeholder Fields.
     *     @type int $structured_snippet_field
     *           Immutable. Structured Snippet Placeholder Fields.
     *     @type int $message_field
     *           Immutable. Message Placeholder Fields.
     *     @type int $price_field
     *           Immutable. Price Placeholder Fields.
     *     @type int $promotion_field
     *           Immutable. Promotion Placeholder Fields.
     *     @type int $ad_customizer_field
     *           Immutable. Ad Customizer Placeholder Fields
     *     @type int $dsa_page_feed_field
     *           Immutable. Dynamic Search Ad Page Feed Fields.
     *     @type int $location_extension_targeting_field
     *           Immutable. Location Target Fields.
     *     @type int $education_field
     *           Immutable. Education Placeholder Fields
     *     @type int $flight_field
     *           Immutable. Flight Placeholder Fields
     *     @type int $custom_field
     *           Immutable. Custom Placeholder Fields
     *     @type int $hotel_field
     *           Immutable. Hotel Placeholder Fields
     *     @type int $real_estate_field
     *           Immutable. Real Estate Placeholder Fields
     *     @type int $travel_field
     *           Immutable. Travel Placeholder Fields
     *     @type int $local_field
     *           Immutable. Local Placeholder Fields
     *     @type int $job_field
     *           Immutable. Job Placeholder Fields
     *     @type int $image_field
     *           Immutable. Image Placeholder Fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\FeedMapping::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Feed attribute from which to map.
     *
     * Generated from protobuf field <code>optional int64 feed_attribute_id = 24 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getFeedAttributeId()
    {
        return isset($this->feed_attribute_id) ? $this->feed_attribute_id : 0;
    }

    public function hasFeedAttributeId()
    {
        return isset($this->feed_attribute_id);
    }

    public function clearFeedAttributeId()
    {
        unset($this->feed_attribute_id);
    }

    /**
     * Immutable. Feed attribute from which to map.
     *
     * Generated from protobuf field <code>optional int64 feed_attribute_id = 24 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeedAttributeId($var)
    {
        GPBUtil::checkInt64($var);
        $this->feed_attribute_id = $var;

        return $this;
    }

    /**
     * Output only. The placeholder field ID. If a placeholder field enum is not
     * published in the current API version, then this field will be populated and
     * the field oneof will be empty. This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 field_id = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getFieldId()
    {
        return isset($this->field_id) ? $this->field_id : 0;
    }

    public function hasFieldId()
    {
        return isset($this->field_id);
    }

    public function clearFieldId()
    {
        unset($this->field_id);
    }

    /**
     * Output only. The placeholder field ID. If a placeholder field enum is not
     * published in the current API version, then this field will be populated and
     * the field oneof will be empty. This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 field_id = 25 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFieldId($var)
    {
        GPBUtil::checkInt64($var);
        $this->field_id = $var;

        return $this;
    }

    /**
     * Immutable. Sitelink Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.SitelinkPlaceholderFieldEnum.SitelinkPlaceholderField sitelink_field = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getSitelinkField()
    {
        return $this->readOneof(3);
    }

    public function hasSitelinkField()
    {
        return $this->hasOneof(3);
    }

    /**
     * Immutable. Sitelink Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.SitelinkPlaceholderFieldEnum.SitelinkPlaceholderField sitelink_field = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setSitelinkField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\SitelinkPlaceholderFieldEnum\SitelinkPlaceholderField::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Immutable. Call Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.CallPlaceholderFieldEnum.CallPlaceholderField call_field = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getCallField()
    {
        return $this->readOneof(4);
    }

    public function hasCallField()
    {
        return $this->hasOneof(4);
    }

    /**
     * Immutable. Call Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.CallPlaceholderFieldEnum.CallPlaceholderField call_field = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setCallField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\CallPlaceholderFieldEnum\CallPlaceholderField::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Immutable. App Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AppPlaceholderFieldEnum.AppPlaceholderField app_field = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getAppField()
    {
        return $this->readOneof(5);
    }

    public function hasAppField()
    {
        return $this->hasOneof(5);
    }

    /**
     * Immutable. App Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AppPlaceholderFieldEnum.AppPlaceholderField app_field = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setAppField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\AppPlaceholderFieldEnum\AppPlaceholderField::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Output only. Location Placeholder Fields. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LocationPlaceholderFieldEnum.LocationPlaceholderField location_field = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLocationField()
    {
        return $this->readOneof(6);
    }

    public function hasLocationField()
    {
        return $this->hasOneof(6);
    }

    /**
     * Output only. Location Placeholder Fields. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LocationPlaceholderFieldEnum.LocationPlaceholderField location_field = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLocationField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\LocationPlaceholderFieldEnum\LocationPlaceholderField::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. Affiliate Location Placeholder Fields. This field is
     * read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AffiliateLocationPlaceholderFieldEnum.AffiliateLocationPlaceholderField affiliate_location_field = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAffiliateLocationField()
    {
        return $this->readOneof(7);
    }

    public function hasAffiliateLocationField()
    {
        return $this->hasOneof(7);
    }

    /**
     * Output only. Affiliate Location Placeholder Fields. This field is
     * read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AffiliateLocationPlaceholderFieldEnum.AffiliateLocationPlaceholderField affiliate_location_field = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAffiliateLocationField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\AffiliateLocationPlaceholderFieldEnum\AffiliateLocationPlaceholderField::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Immutable. Callout Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.CalloutPlaceholderFieldEnum.CalloutPlaceholderField callout_field = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getCalloutField()
    {
        return $this->readOneof(8);
    }

    public function hasCalloutField()
    {
        return $this->hasOneof(8);
    }

    /**
     * Immutable. Callout Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.CalloutPlaceholderFieldEnum.CalloutPlaceholderField callout_field = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setCalloutField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\CalloutPlaceholderFieldEnum\CalloutPlaceholderField::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Immutable. Structured Snippet Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.StructuredSnippetPlaceholderFieldEnum.StructuredSnippetPlaceholderField structured_snippet_field = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getStructuredSnippetField()
    {
        return $this->readOneof(9);
    }

    public function hasStructuredSnippetField()
    {
        return $this->hasOneof(9);
    }

    /**
     * Immutable. Structured Snippet Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.StructuredSnippetPlaceholderFieldEnum.StructuredSnippetPlaceholderField structured_snippet_field = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setStructuredSnippetField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\StructuredSnippetPlaceholderFieldEnum\StructuredSnippetPlaceholderField::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Immutable. Message Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.MessagePlaceholderFieldEnum.MessagePlaceholderField message_field = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getMessageField()
    {
        return $this->readOneof(10);
    }

    public function hasMessageField()
    {
        return $this->hasOneof(10);
    }

    /**
     * Immutable. Message Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.MessagePlaceholderFieldEnum.MessagePlaceholderField message_field = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setMessageField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\MessagePlaceholderFieldEnum\MessagePlaceholderField::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Immutable. Price Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.PricePlaceholderFieldEnum.PricePlaceholderField price_field = 11 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getPriceField()
    {
        return $this->readOneof(11);
    }

    public function hasPriceField()
    {
        return $this->hasOneof(11);
    }

    /**
     * Immutable. Price Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.PricePlaceholderFieldEnum.PricePlaceholderField price_field = 11 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setPriceField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\PricePlaceholderFieldEnum\PricePlaceholderField::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Immutable. Promotion Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.PromotionPlaceholderFieldEnum.PromotionPlaceholderField promotion_field = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getPromotionField()
    {
        return $this->readOneof(12);
    }

    public function hasPromotionField()
    {
        return $this->hasOneof(12);
    }

    /**
     * Immutable. Promotion Placeholder Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.PromotionPlaceholderFieldEnum.PromotionPlaceholderField promotion_field = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setPromotionField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\PromotionPlaceholderFieldEnum\PromotionPlaceholderField::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Immutable. Ad Customizer Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AdCustomizerPlaceholderFieldEnum.AdCustomizerPlaceholderField ad_customizer_field = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getAdCustomizerField()
    {
        return $this->readOneof(13);
    }

    public function hasAdCustomizerField()
    {
        return $this->hasOneof(13);
    }

    /**
     * Immutable. Ad Customizer Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.AdCustomizerPlaceholderFieldEnum.AdCustomizerPlaceholderField ad_customizer_field = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setAdCustomizerField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\AdCustomizerPlaceholderFieldEnum\AdCustomizerPlaceholderField::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Immutable. Dynamic Search Ad Page Feed Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.DsaPageFeedCriterionFieldEnum.DsaPageFeedCriterionField dsa_page_feed_field = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getDsaPageFeedField()
    {
        return $this->readOneof(14);
    }

    public function hasDsaPageFeedField()
    {
        return $this->hasOneof(14);
    }

    /**
     * Immutable. Dynamic Search Ad Page Feed Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.DsaPageFeedCriterionFieldEnum.DsaPageFeedCriterionField dsa_page_feed_field = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setDsaPageFeedField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\DsaPageFeedCriterionFieldEnum\DsaPageFeedCriterionField::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Immutable. Location Target Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LocationExtensionTargetingCriterionFieldEnum.LocationExtensionTargetingCriterionField location_extension_targeting_field = 15 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getLocationExtensionTargetingField()
    {
        return $this->readOneof(15);
    }

    public function hasLocationExtensionTargetingField()
    {
        return $this->hasOneof(15);
    }

    /**
     * Immutable. Location Target Fields.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LocationExtensionTargetingCriterionFieldEnum.LocationExtensionTargetingCriterionField location_extension_targeting_field = 15 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setLocationExtensionTargetingField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\LocationExtensionTargetingCriterionFieldEnum\LocationExtensionTargetingCriterionField::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Immutable. Education Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.EducationPlaceholderFieldEnum.EducationPlaceholderField education_field = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getEducationField()
    {
        return $this->readOneof(16);
    }

    public function hasEducationField()
    {
        return $this->hasOneof(16);
    }

    /**
     * Immutable. Education Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.EducationPlaceholderFieldEnum.EducationPlaceholderField education_field = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setEducationField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\EducationPlaceholderFieldEnum\EducationPlaceholderField::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Immutable. Flight Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.FlightPlaceholderFieldEnum.FlightPlaceholderField flight_field = 17 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getFlightField()
    {
        return $this->readOneof(17);
    }

    public function hasFlightField()
    {
        return $this->hasOneof(17);
    }

    /**
     * Immutable. Flight Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.FlightPlaceholderFieldEnum.FlightPlaceholderField flight_field = 17 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setFlightField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\FlightPlaceholderFieldEnum\FlightPlaceholderField::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Immutable. Custom Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.CustomPlaceholderFieldEnum.CustomPlaceholderField custom_field = 18 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getCustomField()
    {
        return $this->readOneof(18);
    }

    public function hasCustomField()
    {
        return $this->hasOneof(18);
    }

    /**
     * Immutable. Custom Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.CustomPlaceholderFieldEnum.CustomPlaceholderField custom_field = 18 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setCustomField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\CustomPlaceholderFieldEnum\CustomPlaceholderField::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Immutable. Hotel Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.HotelPlaceholderFieldEnum.HotelPlaceholderField hotel_field = 19 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getHotelField()
    {
        return $this->readOneof(19);
    }

    public function hasHotelField()
    {
        return $this->hasOneof(19);
    }

    /**
     * Immutable. Hotel Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.HotelPlaceholderFieldEnum.HotelPlaceholderField hotel_field = 19 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setHotelField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\HotelPlaceholderFieldEnum\HotelPlaceholderField::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Immutable. Real Estate Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.RealEstatePlaceholderFieldEnum.RealEstatePlaceholderField real_estate_field = 20 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getRealEstateField()
    {
        return $this->readOneof(20);
    }

    public function hasRealEstateField()
    {
        return $this->hasOneof(20);
    }

    /**
     * Immutable. Real Estate Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.RealEstatePlaceholderFieldEnum.RealEstatePlaceholderField real_estate_field = 20 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setRealEstateField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\RealEstatePlaceholderFieldEnum\RealEstatePlaceholderField::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Immutable. Travel Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.TravelPlaceholderFieldEnum.TravelPlaceholderField travel_field = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getTravelField()
    {
        return $this->readOneof(21);
    }

    public function hasTravelField()
    {
        return $this->hasOneof(21);
    }

    /**
     * Immutable. Travel Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.TravelPlaceholderFieldEnum.TravelPlaceholderField travel_field = 21 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setTravelField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\TravelPlaceholderFieldEnum\TravelPlaceholderField::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Immutable. Local Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LocalPlaceholderFieldEnum.LocalPlaceholderField local_field = 22 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getLocalField()
    {
        return $this->readOneof(22);
    }

    public function hasLocalField()
    {
        return $this->hasOneof(22);
    }

    /**
     * Immutable. Local Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.LocalPlaceholderFieldEnum.LocalPlaceholderField local_field = 22 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setLocalField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\LocalPlaceholderFieldEnum\LocalPlaceholderField::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Immutable. Job Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.JobPlaceholderFieldEnum.JobPlaceholderField job_field = 23 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getJobField()
    {
        return $this->readOneof(23);
    }

    public function hasJobField()
    {
        return $this->hasOneof(23);
    }

    /**
     * Immutable. Job Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.JobPlaceholderFieldEnum.JobPlaceholderField job_field = 23 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setJobField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\JobPlaceholderFieldEnum\JobPlaceholderField::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * Immutable. Image Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ImagePlaceholderFieldEnum.ImagePlaceholderField image_field = 26 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getImageField()
    {
        return $this->readOneof(26);
    }

    public function hasImageField()
    {
        return $this->hasOneof(26);
    }

    /**
     * Immutable. Image Placeholder Fields
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ImagePlaceholderFieldEnum.ImagePlaceholderField image_field = 26 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setImageField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\ImagePlaceholderFieldEnum\ImagePlaceholderField::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->whichOneof("field");
    }

}
