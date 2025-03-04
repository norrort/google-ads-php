<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/job_placeholder_field.proto

namespace Google\Ads\GoogleAds\V18\Enums\JobPlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Job placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.JobPlaceholderFieldEnum.JobPlaceholderField</code>
 */
class JobPlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. Required. If only JOB_ID is specified, then it must be
     * unique. If both JOB_ID and LOCATION_ID are specified, then the
     * pair must be unique.
     * ID) pair must be unique.
     *
     * Generated from protobuf enum <code>JOB_ID = 2;</code>
     */
    const JOB_ID = 2;
    /**
     * Data Type: STRING. Combination of JOB_ID and LOCATION_ID must be unique
     * per offer.
     *
     * Generated from protobuf enum <code>LOCATION_ID = 3;</code>
     */
    const LOCATION_ID = 3;
    /**
     * Data Type: STRING. Required. Main headline with job title to be shown in
     * dynamic ad.
     *
     * Generated from protobuf enum <code>TITLE = 4;</code>
     */
    const TITLE = 4;
    /**
     * Data Type: STRING. Job subtitle to be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>SUBTITLE = 5;</code>
     */
    const SUBTITLE = 5;
    /**
     * Data Type: STRING. Description of job to be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>DESCRIPTION = 6;</code>
     */
    const DESCRIPTION = 6;
    /**
     * Data Type: URL. Image to be displayed in the ad. Highly recommended for
     * image ads.
     *
     * Generated from protobuf enum <code>IMAGE_URL = 7;</code>
     */
    const IMAGE_URL = 7;
    /**
     * Data Type: STRING. Category of property used to group like items together
     * for recommendation engine.
     *
     * Generated from protobuf enum <code>CATEGORY = 8;</code>
     */
    const CATEGORY = 8;
    /**
     * Data Type: STRING_LIST. Keywords used for product retrieval.
     *
     * Generated from protobuf enum <code>CONTEXTUAL_KEYWORDS = 9;</code>
     */
    const CONTEXTUAL_KEYWORDS = 9;
    /**
     * Data Type: STRING. Complete property address, including postal code.
     *
     * Generated from protobuf enum <code>ADDRESS = 10;</code>
     */
    const ADDRESS = 10;
    /**
     * Data Type: STRING. Salary or salary range of job to be shown in dynamic
     * ad.
     *
     * Generated from protobuf enum <code>SALARY = 11;</code>
     */
    const SALARY = 11;
    /**
     * Data Type: URL_LIST. Required. Final URLs to be used in ad when using
     * Upgraded URLs; the more specific the better (for example, the individual
     * URL of a specific job and its location).
     *
     * Generated from protobuf enum <code>FINAL_URLS = 12;</code>
     */
    const FINAL_URLS = 12;
    /**
     * Data Type: URL_LIST. Final mobile URLs for the ad when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>FINAL_MOBILE_URLS = 14;</code>
     */
    const FINAL_MOBILE_URLS = 14;
    /**
     * Data Type: URL. Tracking template for the ad when using Upgraded URLs.
     *
     * Generated from protobuf enum <code>TRACKING_URL = 15;</code>
     */
    const TRACKING_URL = 15;
    /**
     * Data Type: STRING. Android app link. Must be formatted as:
     * android-app://{package_id}/{scheme}/{host_path}.
     * The components are defined as follows:
     * package_id: app ID as specified in Google Play.
     * scheme: the scheme to pass to the application. Can be HTTP, or a custom
     *   scheme.
     * host_path: identifies the specific content within your application.
     *
     * Generated from protobuf enum <code>ANDROID_APP_LINK = 16;</code>
     */
    const ANDROID_APP_LINK = 16;
    /**
     * Data Type: STRING_LIST. List of recommended job IDs to show together with
     * this item.
     *
     * Generated from protobuf enum <code>SIMILAR_JOB_IDS = 17;</code>
     */
    const SIMILAR_JOB_IDS = 17;
    /**
     * Data Type: STRING. iOS app link.
     *
     * Generated from protobuf enum <code>IOS_APP_LINK = 18;</code>
     */
    const IOS_APP_LINK = 18;
    /**
     * Data Type: INT64. iOS app store ID.
     *
     * Generated from protobuf enum <code>IOS_APP_STORE_ID = 19;</code>
     */
    const IOS_APP_STORE_ID = 19;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::JOB_ID => 'JOB_ID',
        self::LOCATION_ID => 'LOCATION_ID',
        self::TITLE => 'TITLE',
        self::SUBTITLE => 'SUBTITLE',
        self::DESCRIPTION => 'DESCRIPTION',
        self::IMAGE_URL => 'IMAGE_URL',
        self::CATEGORY => 'CATEGORY',
        self::CONTEXTUAL_KEYWORDS => 'CONTEXTUAL_KEYWORDS',
        self::ADDRESS => 'ADDRESS',
        self::SALARY => 'SALARY',
        self::FINAL_URLS => 'FINAL_URLS',
        self::FINAL_MOBILE_URLS => 'FINAL_MOBILE_URLS',
        self::TRACKING_URL => 'TRACKING_URL',
        self::ANDROID_APP_LINK => 'ANDROID_APP_LINK',
        self::SIMILAR_JOB_IDS => 'SIMILAR_JOB_IDS',
        self::IOS_APP_LINK => 'IOS_APP_LINK',
        self::IOS_APP_STORE_ID => 'IOS_APP_STORE_ID',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JobPlaceholderField::class, \Google\Ads\GoogleAds\V18\Enums\JobPlaceholderFieldEnum_JobPlaceholderField::class);

