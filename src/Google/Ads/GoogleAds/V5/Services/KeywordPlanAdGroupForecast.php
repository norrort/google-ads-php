<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad group forecast.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.KeywordPlanAdGroupForecast</code>
 */
class KeywordPlanAdGroupForecast extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the Keyword Plan ad group related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_ad_group = 1;</code>
     */
    protected $keyword_plan_ad_group = null;
    /**
     * The forecast for the Keyword Plan ad group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.services.ForecastMetrics ad_group_forecast = 2;</code>
     */
    protected $ad_group_forecast = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $keyword_plan_ad_group
     *           The resource name of the Keyword Plan ad group related to the forecast.
     *           `customers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}`
     *     @type \Google\Ads\GoogleAds\V5\Services\ForecastMetrics $ad_group_forecast
     *           The forecast for the Keyword Plan ad group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the Keyword Plan ad group related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_ad_group = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getKeywordPlanAdGroup()
    {
        return isset($this->keyword_plan_ad_group) ? $this->keyword_plan_ad_group : null;
    }

    public function hasKeywordPlanAdGroup()
    {
        return isset($this->keyword_plan_ad_group);
    }

    public function clearKeywordPlanAdGroup()
    {
        unset($this->keyword_plan_ad_group);
    }

    /**
     * Returns the unboxed value from <code>getKeywordPlanAdGroup()</code>

     * The resource name of the Keyword Plan ad group related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_ad_group = 1;</code>
     * @return string|null
     */
    public function getKeywordPlanAdGroupUnwrapped()
    {
        return $this->readWrapperValue("keyword_plan_ad_group");
    }

    /**
     * The resource name of the Keyword Plan ad group related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_ad_group = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setKeywordPlanAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->keyword_plan_ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the Keyword Plan ad group related to the forecast.
     * `customers/{customer_id}/keywordPlanAdGroups/{keyword_plan_ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue keyword_plan_ad_group = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setKeywordPlanAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("keyword_plan_ad_group", $var);
        return $this;}

    /**
     * The forecast for the Keyword Plan ad group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.services.ForecastMetrics ad_group_forecast = 2;</code>
     * @return \Google\Ads\GoogleAds\V5\Services\ForecastMetrics
     */
    public function getAdGroupForecast()
    {
        return isset($this->ad_group_forecast) ? $this->ad_group_forecast : null;
    }

    public function hasAdGroupForecast()
    {
        return isset($this->ad_group_forecast);
    }

    public function clearAdGroupForecast()
    {
        unset($this->ad_group_forecast);
    }

    /**
     * The forecast for the Keyword Plan ad group.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.services.ForecastMetrics ad_group_forecast = 2;</code>
     * @param \Google\Ads\GoogleAds\V5\Services\ForecastMetrics $var
     * @return $this
     */
    public function setAdGroupForecast($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Services\ForecastMetrics::class);
        $this->ad_group_forecast = $var;

        return $this;
    }

}

