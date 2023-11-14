<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/ads/googleads/v15/services/campaign_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Ads\GoogleAds\V15\Services\Gapic;

use Google\Ads\GoogleAds\V15\Services\CampaignOperation;
use Google\Ads\GoogleAds\V15\Services\MutateCampaignsRequest;
use Google\Ads\GoogleAds\V15\Services\MutateCampaignsResponse;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;

/**
 * Service Description: Service to manage campaigns.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $campaignServiceClient = new CampaignServiceClient();
 * try {
 *     $customerId = 'customer_id';
 *     $operations = [];
 *     $response = $campaignServiceClient->mutateCampaigns($customerId, $operations);
 * } finally {
 *     $campaignServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This service has a new (beta) implementation. See {@see
 * \Google\Ads\GoogleAds\V15\Services\Client\CampaignServiceClient} to use the new
 * surface.
 */
class CampaignServiceGapicClient
{
    use GapicClientTrait;

    /** The name of the service. */
    const SERVICE_NAME = 'google.ads.googleads.v15.services.CampaignService';

    /** The default address of the service. */
    const SERVICE_ADDRESS = 'googleads.googleapis.com';

    /** The default port of the service. */
    const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/adwords',
    ];

    private static $accessibleBiddingStrategyNameTemplate;

    private static $assetSetNameTemplate;

    private static $biddingStrategyNameTemplate;

    private static $campaignNameTemplate;

    private static $campaignBudgetNameTemplate;

    private static $campaignGroupNameTemplate;

    private static $campaignLabelNameTemplate;

    private static $conversionActionNameTemplate;

    private static $feedNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/campaign_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/campaign_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/campaign_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/campaign_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAccessibleBiddingStrategyNameTemplate()
    {
        if (self::$accessibleBiddingStrategyNameTemplate == null) {
            self::$accessibleBiddingStrategyNameTemplate = new PathTemplate('customers/{customer_id}/accessibleBiddingStrategies/{bidding_strategy_id}');
        }

        return self::$accessibleBiddingStrategyNameTemplate;
    }

    private static function getAssetSetNameTemplate()
    {
        if (self::$assetSetNameTemplate == null) {
            self::$assetSetNameTemplate = new PathTemplate('customers/{customer_id}/assetSets/{asset_set_id}');
        }

        return self::$assetSetNameTemplate;
    }

    private static function getBiddingStrategyNameTemplate()
    {
        if (self::$biddingStrategyNameTemplate == null) {
            self::$biddingStrategyNameTemplate = new PathTemplate('customers/{customer_id}/biddingStrategies/{bidding_strategy_id}');
        }

        return self::$biddingStrategyNameTemplate;
    }

    private static function getCampaignNameTemplate()
    {
        if (self::$campaignNameTemplate == null) {
            self::$campaignNameTemplate = new PathTemplate('customers/{customer_id}/campaigns/{campaign_id}');
        }

        return self::$campaignNameTemplate;
    }

    private static function getCampaignBudgetNameTemplate()
    {
        if (self::$campaignBudgetNameTemplate == null) {
            self::$campaignBudgetNameTemplate = new PathTemplate('customers/{customer_id}/campaignBudgets/{campaign_budget_id}');
        }

        return self::$campaignBudgetNameTemplate;
    }

    private static function getCampaignGroupNameTemplate()
    {
        if (self::$campaignGroupNameTemplate == null) {
            self::$campaignGroupNameTemplate = new PathTemplate('customers/{customer_id}/campaignGroups/{campaign_group_id}');
        }

        return self::$campaignGroupNameTemplate;
    }

    private static function getCampaignLabelNameTemplate()
    {
        if (self::$campaignLabelNameTemplate == null) {
            self::$campaignLabelNameTemplate = new PathTemplate('customers/{customer_id}/campaignLabels/{campaign_id}~{label_id}');
        }

        return self::$campaignLabelNameTemplate;
    }

    private static function getConversionActionNameTemplate()
    {
        if (self::$conversionActionNameTemplate == null) {
            self::$conversionActionNameTemplate = new PathTemplate('customers/{customer_id}/conversionActions/{conversion_action_id}');
        }

        return self::$conversionActionNameTemplate;
    }

    private static function getFeedNameTemplate()
    {
        if (self::$feedNameTemplate == null) {
            self::$feedNameTemplate = new PathTemplate('customers/{customer_id}/feeds/{feed_id}');
        }

        return self::$feedNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'accessibleBiddingStrategy' => self::getAccessibleBiddingStrategyNameTemplate(),
                'assetSet' => self::getAssetSetNameTemplate(),
                'biddingStrategy' => self::getBiddingStrategyNameTemplate(),
                'campaign' => self::getCampaignNameTemplate(),
                'campaignBudget' => self::getCampaignBudgetNameTemplate(),
                'campaignGroup' => self::getCampaignGroupNameTemplate(),
                'campaignLabel' => self::getCampaignLabelNameTemplate(),
                'conversionAction' => self::getConversionActionNameTemplate(),
                'feed' => self::getFeedNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * accessible_bidding_strategy resource.
     *
     * @param string $customerId
     * @param string $biddingStrategyId
     *
     * @return string The formatted accessible_bidding_strategy resource.
     */
    public static function accessibleBiddingStrategyName($customerId, $biddingStrategyId)
    {
        return self::getAccessibleBiddingStrategyNameTemplate()->render([
            'customer_id' => $customerId,
            'bidding_strategy_id' => $biddingStrategyId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a asset_set
     * resource.
     *
     * @param string $customerId
     * @param string $assetSetId
     *
     * @return string The formatted asset_set resource.
     */
    public static function assetSetName($customerId, $assetSetId)
    {
        return self::getAssetSetNameTemplate()->render([
            'customer_id' => $customerId,
            'asset_set_id' => $assetSetId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * bidding_strategy resource.
     *
     * @param string $customerId
     * @param string $biddingStrategyId
     *
     * @return string The formatted bidding_strategy resource.
     */
    public static function biddingStrategyName($customerId, $biddingStrategyId)
    {
        return self::getBiddingStrategyNameTemplate()->render([
            'customer_id' => $customerId,
            'bidding_strategy_id' => $biddingStrategyId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a campaign
     * resource.
     *
     * @param string $customerId
     * @param string $campaignId
     *
     * @return string The formatted campaign resource.
     */
    public static function campaignName($customerId, $campaignId)
    {
        return self::getCampaignNameTemplate()->render([
            'customer_id' => $customerId,
            'campaign_id' => $campaignId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * campaign_budget resource.
     *
     * @param string $customerId
     * @param string $campaignBudgetId
     *
     * @return string The formatted campaign_budget resource.
     */
    public static function campaignBudgetName($customerId, $campaignBudgetId)
    {
        return self::getCampaignBudgetNameTemplate()->render([
            'customer_id' => $customerId,
            'campaign_budget_id' => $campaignBudgetId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * campaign_group resource.
     *
     * @param string $customerId
     * @param string $campaignGroupId
     *
     * @return string The formatted campaign_group resource.
     */
    public static function campaignGroupName($customerId, $campaignGroupId)
    {
        return self::getCampaignGroupNameTemplate()->render([
            'customer_id' => $customerId,
            'campaign_group_id' => $campaignGroupId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * campaign_label resource.
     *
     * @param string $customerId
     * @param string $campaignId
     * @param string $labelId
     *
     * @return string The formatted campaign_label resource.
     */
    public static function campaignLabelName($customerId, $campaignId, $labelId)
    {
        return self::getCampaignLabelNameTemplate()->render([
            'customer_id' => $customerId,
            'campaign_id' => $campaignId,
            'label_id' => $labelId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conversion_action resource.
     *
     * @param string $customerId
     * @param string $conversionActionId
     *
     * @return string The formatted conversion_action resource.
     */
    public static function conversionActionName($customerId, $conversionActionId)
    {
        return self::getConversionActionNameTemplate()->render([
            'customer_id' => $customerId,
            'conversion_action_id' => $conversionActionId,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a feed
     * resource.
     *
     * @param string $customerId
     * @param string $feedId
     *
     * @return string The formatted feed resource.
     */
    public static function feedName($customerId, $feedId)
    {
        return self::getFeedNameTemplate()->render([
            'customer_id' => $customerId,
            'feed_id' => $feedId,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - accessibleBiddingStrategy: customers/{customer_id}/accessibleBiddingStrategies/{bidding_strategy_id}
     * - assetSet: customers/{customer_id}/assetSets/{asset_set_id}
     * - biddingStrategy: customers/{customer_id}/biddingStrategies/{bidding_strategy_id}
     * - campaign: customers/{customer_id}/campaigns/{campaign_id}
     * - campaignBudget: customers/{customer_id}/campaignBudgets/{campaign_budget_id}
     * - campaignGroup: customers/{customer_id}/campaignGroups/{campaign_group_id}
     * - campaignLabel: customers/{customer_id}/campaignLabels/{campaign_id}~{label_id}
     * - conversionAction: customers/{customer_id}/conversionActions/{conversion_action_id}
     * - feed: customers/{customer_id}/feeds/{feed_id}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'googleads.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates, updates, or removes campaigns. Operation statuses are returned.
     *
     * List of thrown errors:
     * [AdxError]()
     * [AuthenticationError]()
     * [AuthorizationError]()
     * [BiddingError]()
     * [BiddingStrategyError]()
     * [CampaignBudgetError]()
     * [CampaignError]()
     * [ContextError]()
     * [DatabaseError]()
     * [DateError]()
     * [DateRangeError]()
     * [DistinctError]()
     * [FieldError]()
     * [FieldMaskError]()
     * [HeaderError]()
     * [IdError]()
     * [InternalError]()
     * [ListOperationError]()
     * [MutateError]()
     * [NewResourceCreationError]()
     * [NotAllowlistedError]()
     * [NotEmptyError]()
     * [NullError]()
     * [OperationAccessDeniedError]()
     * [OperatorError]()
     * [QuotaError]()
     * [RangeError]()
     * [RegionCodeError]()
     * [RequestError]()
     * [ResourceCountLimitExceededError]()
     * [SettingError]()
     * [SizeLimitError]()
     * [StringFormatError]()
     * [StringLengthError]()
     * [UrlFieldError]()
     *
     * Sample code:
     * ```
     * $campaignServiceClient = new CampaignServiceClient();
     * try {
     *     $customerId = 'customer_id';
     *     $operations = [];
     *     $response = $campaignServiceClient->mutateCampaigns($customerId, $operations);
     * } finally {
     *     $campaignServiceClient->close();
     * }
     * ```
     *
     * @param string              $customerId   Required. The ID of the customer whose campaigns are being modified.
     * @param CampaignOperation[] $operations   Required. The list of operations to perform on individual campaigns.
     * @param array               $optionalArgs {
     *     Optional.
     *
     *     @type bool $partialFailure
     *           If true, successful operations will be carried out and invalid
     *           operations will return errors. If false, all operations will be carried
     *           out in one transaction if and only if they are all valid.
     *           Default is false.
     *     @type bool $validateOnly
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     *     @type int $responseContentType
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned post mutation.
     *           For allowed values, use constants defined on {@see \Google\Ads\GoogleAds\V15\Enums\ResponseContentTypeEnum\ResponseContentType}
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Ads\GoogleAds\V15\Services\MutateCampaignsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function mutateCampaigns($customerId, $operations, array $optionalArgs = [])
    {
        $request = new MutateCampaignsRequest();
        $requestParamHeaders = [];
        $request->setCustomerId($customerId);
        $request->setOperations($operations);
        $requestParamHeaders['customer_id'] = $customerId;
        if (isset($optionalArgs['partialFailure'])) {
            $request->setPartialFailure($optionalArgs['partialFailure']);
        }

        if (isset($optionalArgs['validateOnly'])) {
            $request->setValidateOnly($optionalArgs['validateOnly']);
        }

        if (isset($optionalArgs['responseContentType'])) {
            $request->setResponseContentType($optionalArgs['responseContentType']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('MutateCampaigns', MutateCampaignsResponse::class, $optionalArgs, $request)->wait();
    }
}