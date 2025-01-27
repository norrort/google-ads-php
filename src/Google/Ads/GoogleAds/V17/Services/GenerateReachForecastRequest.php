<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ReachPlanService.GenerateReachForecast][google.ads.googleads.v17.services.ReachPlanService.GenerateReachForecast].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.GenerateReachForecastRequest</code>
 */
class GenerateReachForecastRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * The currency code.
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>optional string currency_code = 9;</code>
     */
    protected $currency_code = null;
    /**
     * Required. Campaign duration.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.CampaignDuration campaign_duration = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $campaign_duration = null;
    /**
     * Chosen cookie frequency cap to be applied to each planned product.
     * This is equivalent to the frequency cap exposed in Google Ads when creating
     * a campaign, it represents the maximum number of times an ad can be shown to
     * the same user.
     * If not specified, no cap is applied.
     * This field is deprecated in v4 and will eventually be removed.
     * Use cookie_frequency_cap_setting instead.
     *
     * Generated from protobuf field <code>optional int32 cookie_frequency_cap = 10;</code>
     */
    protected $cookie_frequency_cap = null;
    /**
     * Chosen cookie frequency cap to be applied to each planned product.
     * This is equivalent to the frequency cap exposed in Google Ads when creating
     * a campaign, it represents the maximum number of times an ad can be shown to
     * the same user during a specified time interval.
     * If not specified, a default of 0 (no cap) is applied.
     * This field replaces the deprecated cookie_frequency_cap field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.FrequencyCap cookie_frequency_cap_setting = 8;</code>
     */
    protected $cookie_frequency_cap_setting = null;
    /**
     * Chosen minimum effective frequency (the number of times a person was
     * exposed to the ad) for the reported reach metrics [1-10].
     * This won't affect the targeting, but just the reporting.
     * If not specified, a default of 1 is applied.
     * This field cannot be combined with the effective_frequency_limit field.
     *
     * Generated from protobuf field <code>optional int32 min_effective_frequency = 11;</code>
     */
    protected $min_effective_frequency = null;
    /**
     * The highest minimum effective frequency (the number of times a person was
     * exposed to the ad) value [1-10] to include in
     * Forecast.effective_frequency_breakdowns.
     * If not specified, Forecast.effective_frequency_breakdowns will not be
     * provided.
     * The effective frequency value provided here will also be used as the
     * minimum effective frequency for the reported reach metrics.
     * This field cannot be combined with the min_effective_frequency field.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.services.EffectiveFrequencyLimit effective_frequency_limit = 12;</code>
     */
    protected $effective_frequency_limit = null;
    /**
     * The targeting to be applied to all products selected in the product mix.
     * This is planned targeting: execution details might vary based on the
     * advertising product, consult an implementation specialist.
     * See specific metrics for details on how targeting affects them.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.Targeting targeting = 6;</code>
     */
    protected $targeting = null;
    /**
     * Required. The products to be forecast.
     * The max number of allowed planned products is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.PlannedProduct planned_products = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $planned_products;
    /**
     * Controls the forecast metrics returned in the response.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.ForecastMetricOptions forecast_metric_options = 13;</code>
     */
    protected $forecast_metric_options = null;
    /**
     * The name of the customer being planned for. This is a user-defined value.
     *
     * Generated from protobuf field <code>optional string customer_reach_group = 14;</code>
     */
    protected $customer_reach_group = null;

    /**
     * @param string                                              $customerId       Required. The ID of the customer.
     * @param \Google\Ads\GoogleAds\V17\Services\CampaignDuration $campaignDuration Required. Campaign duration.
     * @param \Google\Ads\GoogleAds\V17\Services\PlannedProduct[] $plannedProducts  Required. The products to be forecast.
     *                                                                              The max number of allowed planned products is 15.
     *
     * @return \Google\Ads\GoogleAds\V17\Services\GenerateReachForecastRequest
     *
     * @experimental
     */
    public static function build(string $customerId, \Google\Ads\GoogleAds\V17\Services\CampaignDuration $campaignDuration, array $plannedProducts): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setCampaignDuration($campaignDuration)
            ->setPlannedProducts($plannedProducts);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer.
     *     @type string $currency_code
     *           The currency code.
     *           Three-character ISO 4217 currency code.
     *     @type \Google\Ads\GoogleAds\V17\Services\CampaignDuration $campaign_duration
     *           Required. Campaign duration.
     *     @type int $cookie_frequency_cap
     *           Chosen cookie frequency cap to be applied to each planned product.
     *           This is equivalent to the frequency cap exposed in Google Ads when creating
     *           a campaign, it represents the maximum number of times an ad can be shown to
     *           the same user.
     *           If not specified, no cap is applied.
     *           This field is deprecated in v4 and will eventually be removed.
     *           Use cookie_frequency_cap_setting instead.
     *     @type \Google\Ads\GoogleAds\V17\Services\FrequencyCap $cookie_frequency_cap_setting
     *           Chosen cookie frequency cap to be applied to each planned product.
     *           This is equivalent to the frequency cap exposed in Google Ads when creating
     *           a campaign, it represents the maximum number of times an ad can be shown to
     *           the same user during a specified time interval.
     *           If not specified, a default of 0 (no cap) is applied.
     *           This field replaces the deprecated cookie_frequency_cap field.
     *     @type int $min_effective_frequency
     *           Chosen minimum effective frequency (the number of times a person was
     *           exposed to the ad) for the reported reach metrics [1-10].
     *           This won't affect the targeting, but just the reporting.
     *           If not specified, a default of 1 is applied.
     *           This field cannot be combined with the effective_frequency_limit field.
     *     @type \Google\Ads\GoogleAds\V17\Services\EffectiveFrequencyLimit $effective_frequency_limit
     *           The highest minimum effective frequency (the number of times a person was
     *           exposed to the ad) value [1-10] to include in
     *           Forecast.effective_frequency_breakdowns.
     *           If not specified, Forecast.effective_frequency_breakdowns will not be
     *           provided.
     *           The effective frequency value provided here will also be used as the
     *           minimum effective frequency for the reported reach metrics.
     *           This field cannot be combined with the min_effective_frequency field.
     *     @type \Google\Ads\GoogleAds\V17\Services\Targeting $targeting
     *           The targeting to be applied to all products selected in the product mix.
     *           This is planned targeting: execution details might vary based on the
     *           advertising product, consult an implementation specialist.
     *           See specific metrics for details on how targeting affects them.
     *     @type array<\Google\Ads\GoogleAds\V17\Services\PlannedProduct>|\Google\Protobuf\Internal\RepeatedField $planned_products
     *           Required. The products to be forecast.
     *           The max number of allowed planned products is 15.
     *     @type \Google\Ads\GoogleAds\V17\Services\ForecastMetricOptions $forecast_metric_options
     *           Controls the forecast metrics returned in the response.
     *     @type string $customer_reach_group
     *           The name of the customer being planned for. This is a user-defined value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The currency code.
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>optional string currency_code = 9;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : '';
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * The currency code.
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>optional string currency_code = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Required. Campaign duration.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.CampaignDuration campaign_duration = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V17\Services\CampaignDuration|null
     */
    public function getCampaignDuration()
    {
        return $this->campaign_duration;
    }

    public function hasCampaignDuration()
    {
        return isset($this->campaign_duration);
    }

    public function clearCampaignDuration()
    {
        unset($this->campaign_duration);
    }

    /**
     * Required. Campaign duration.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.CampaignDuration campaign_duration = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V17\Services\CampaignDuration $var
     * @return $this
     */
    public function setCampaignDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\CampaignDuration::class);
        $this->campaign_duration = $var;

        return $this;
    }

    /**
     * Chosen cookie frequency cap to be applied to each planned product.
     * This is equivalent to the frequency cap exposed in Google Ads when creating
     * a campaign, it represents the maximum number of times an ad can be shown to
     * the same user.
     * If not specified, no cap is applied.
     * This field is deprecated in v4 and will eventually be removed.
     * Use cookie_frequency_cap_setting instead.
     *
     * Generated from protobuf field <code>optional int32 cookie_frequency_cap = 10;</code>
     * @return int
     */
    public function getCookieFrequencyCap()
    {
        return isset($this->cookie_frequency_cap) ? $this->cookie_frequency_cap : 0;
    }

    public function hasCookieFrequencyCap()
    {
        return isset($this->cookie_frequency_cap);
    }

    public function clearCookieFrequencyCap()
    {
        unset($this->cookie_frequency_cap);
    }

    /**
     * Chosen cookie frequency cap to be applied to each planned product.
     * This is equivalent to the frequency cap exposed in Google Ads when creating
     * a campaign, it represents the maximum number of times an ad can be shown to
     * the same user.
     * If not specified, no cap is applied.
     * This field is deprecated in v4 and will eventually be removed.
     * Use cookie_frequency_cap_setting instead.
     *
     * Generated from protobuf field <code>optional int32 cookie_frequency_cap = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCookieFrequencyCap($var)
    {
        GPBUtil::checkInt32($var);
        $this->cookie_frequency_cap = $var;

        return $this;
    }

    /**
     * Chosen cookie frequency cap to be applied to each planned product.
     * This is equivalent to the frequency cap exposed in Google Ads when creating
     * a campaign, it represents the maximum number of times an ad can be shown to
     * the same user during a specified time interval.
     * If not specified, a default of 0 (no cap) is applied.
     * This field replaces the deprecated cookie_frequency_cap field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.FrequencyCap cookie_frequency_cap_setting = 8;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\FrequencyCap|null
     */
    public function getCookieFrequencyCapSetting()
    {
        return $this->cookie_frequency_cap_setting;
    }

    public function hasCookieFrequencyCapSetting()
    {
        return isset($this->cookie_frequency_cap_setting);
    }

    public function clearCookieFrequencyCapSetting()
    {
        unset($this->cookie_frequency_cap_setting);
    }

    /**
     * Chosen cookie frequency cap to be applied to each planned product.
     * This is equivalent to the frequency cap exposed in Google Ads when creating
     * a campaign, it represents the maximum number of times an ad can be shown to
     * the same user during a specified time interval.
     * If not specified, a default of 0 (no cap) is applied.
     * This field replaces the deprecated cookie_frequency_cap field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.FrequencyCap cookie_frequency_cap_setting = 8;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\FrequencyCap $var
     * @return $this
     */
    public function setCookieFrequencyCapSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\FrequencyCap::class);
        $this->cookie_frequency_cap_setting = $var;

        return $this;
    }

    /**
     * Chosen minimum effective frequency (the number of times a person was
     * exposed to the ad) for the reported reach metrics [1-10].
     * This won't affect the targeting, but just the reporting.
     * If not specified, a default of 1 is applied.
     * This field cannot be combined with the effective_frequency_limit field.
     *
     * Generated from protobuf field <code>optional int32 min_effective_frequency = 11;</code>
     * @return int
     */
    public function getMinEffectiveFrequency()
    {
        return isset($this->min_effective_frequency) ? $this->min_effective_frequency : 0;
    }

    public function hasMinEffectiveFrequency()
    {
        return isset($this->min_effective_frequency);
    }

    public function clearMinEffectiveFrequency()
    {
        unset($this->min_effective_frequency);
    }

    /**
     * Chosen minimum effective frequency (the number of times a person was
     * exposed to the ad) for the reported reach metrics [1-10].
     * This won't affect the targeting, but just the reporting.
     * If not specified, a default of 1 is applied.
     * This field cannot be combined with the effective_frequency_limit field.
     *
     * Generated from protobuf field <code>optional int32 min_effective_frequency = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMinEffectiveFrequency($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_effective_frequency = $var;

        return $this;
    }

    /**
     * The highest minimum effective frequency (the number of times a person was
     * exposed to the ad) value [1-10] to include in
     * Forecast.effective_frequency_breakdowns.
     * If not specified, Forecast.effective_frequency_breakdowns will not be
     * provided.
     * The effective frequency value provided here will also be used as the
     * minimum effective frequency for the reported reach metrics.
     * This field cannot be combined with the min_effective_frequency field.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.services.EffectiveFrequencyLimit effective_frequency_limit = 12;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\EffectiveFrequencyLimit|null
     */
    public function getEffectiveFrequencyLimit()
    {
        return $this->effective_frequency_limit;
    }

    public function hasEffectiveFrequencyLimit()
    {
        return isset($this->effective_frequency_limit);
    }

    public function clearEffectiveFrequencyLimit()
    {
        unset($this->effective_frequency_limit);
    }

    /**
     * The highest minimum effective frequency (the number of times a person was
     * exposed to the ad) value [1-10] to include in
     * Forecast.effective_frequency_breakdowns.
     * If not specified, Forecast.effective_frequency_breakdowns will not be
     * provided.
     * The effective frequency value provided here will also be used as the
     * minimum effective frequency for the reported reach metrics.
     * This field cannot be combined with the min_effective_frequency field.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.services.EffectiveFrequencyLimit effective_frequency_limit = 12;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\EffectiveFrequencyLimit $var
     * @return $this
     */
    public function setEffectiveFrequencyLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\EffectiveFrequencyLimit::class);
        $this->effective_frequency_limit = $var;

        return $this;
    }

    /**
     * The targeting to be applied to all products selected in the product mix.
     * This is planned targeting: execution details might vary based on the
     * advertising product, consult an implementation specialist.
     * See specific metrics for details on how targeting affects them.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.Targeting targeting = 6;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\Targeting|null
     */
    public function getTargeting()
    {
        return $this->targeting;
    }

    public function hasTargeting()
    {
        return isset($this->targeting);
    }

    public function clearTargeting()
    {
        unset($this->targeting);
    }

    /**
     * The targeting to be applied to all products selected in the product mix.
     * This is planned targeting: execution details might vary based on the
     * advertising product, consult an implementation specialist.
     * See specific metrics for details on how targeting affects them.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.Targeting targeting = 6;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\Targeting $var
     * @return $this
     */
    public function setTargeting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\Targeting::class);
        $this->targeting = $var;

        return $this;
    }

    /**
     * Required. The products to be forecast.
     * The max number of allowed planned products is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.PlannedProduct planned_products = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlannedProducts()
    {
        return $this->planned_products;
    }

    /**
     * Required. The products to be forecast.
     * The max number of allowed planned products is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.PlannedProduct planned_products = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V17\Services\PlannedProduct>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlannedProducts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\PlannedProduct::class);
        $this->planned_products = $arr;

        return $this;
    }

    /**
     * Controls the forecast metrics returned in the response.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.ForecastMetricOptions forecast_metric_options = 13;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\ForecastMetricOptions|null
     */
    public function getForecastMetricOptions()
    {
        return $this->forecast_metric_options;
    }

    public function hasForecastMetricOptions()
    {
        return isset($this->forecast_metric_options);
    }

    public function clearForecastMetricOptions()
    {
        unset($this->forecast_metric_options);
    }

    /**
     * Controls the forecast metrics returned in the response.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.ForecastMetricOptions forecast_metric_options = 13;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\ForecastMetricOptions $var
     * @return $this
     */
    public function setForecastMetricOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\ForecastMetricOptions::class);
        $this->forecast_metric_options = $var;

        return $this;
    }

    /**
     * The name of the customer being planned for. This is a user-defined value.
     *
     * Generated from protobuf field <code>optional string customer_reach_group = 14;</code>
     * @return string
     */
    public function getCustomerReachGroup()
    {
        return isset($this->customer_reach_group) ? $this->customer_reach_group : '';
    }

    public function hasCustomerReachGroup()
    {
        return isset($this->customer_reach_group);
    }

    public function clearCustomerReachGroup()
    {
        unset($this->customer_reach_group);
    }

    /**
     * The name of the customer being planned for. This is a user-defined value.
     *
     * Generated from protobuf field <code>optional string customer_reach_group = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerReachGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_reach_group = $var;

        return $this;
    }

}

