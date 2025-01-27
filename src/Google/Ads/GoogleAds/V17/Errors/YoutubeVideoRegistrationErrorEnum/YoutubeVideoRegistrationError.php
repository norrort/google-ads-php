<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/youtube_video_registration_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\YoutubeVideoRegistrationErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing YouTube video registration errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.YoutubeVideoRegistrationErrorEnum.YoutubeVideoRegistrationError</code>
 */
class YoutubeVideoRegistrationError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Video to be registered wasn't found.
     *
     * Generated from protobuf enum <code>VIDEO_NOT_FOUND = 2;</code>
     */
    const VIDEO_NOT_FOUND = 2;
    /**
     * Video to be registered is not accessible (for example, private).
     *
     * Generated from protobuf enum <code>VIDEO_NOT_ACCESSIBLE = 3;</code>
     */
    const VIDEO_NOT_ACCESSIBLE = 3;
    /**
     * Video to be registered is not eligible (for example, mature content).
     *
     * Generated from protobuf enum <code>VIDEO_NOT_ELIGIBLE = 4;</code>
     */
    const VIDEO_NOT_ELIGIBLE = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::VIDEO_NOT_FOUND => 'VIDEO_NOT_FOUND',
        self::VIDEO_NOT_ACCESSIBLE => 'VIDEO_NOT_ACCESSIBLE',
        self::VIDEO_NOT_ELIGIBLE => 'VIDEO_NOT_ELIGIBLE',
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
class_alias(YoutubeVideoRegistrationError::class, \Google\Ads\GoogleAds\V17\Errors\YoutubeVideoRegistrationErrorEnum_YoutubeVideoRegistrationError::class);

