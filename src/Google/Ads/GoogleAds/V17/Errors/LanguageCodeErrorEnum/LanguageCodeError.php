<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/language_code_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\LanguageCodeErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing language code errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.LanguageCodeErrorEnum.LanguageCodeError</code>
 */
class LanguageCodeError
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
     * The input language code is not recognized.
     *
     * Generated from protobuf enum <code>LANGUAGE_CODE_NOT_FOUND = 2;</code>
     */
    const LANGUAGE_CODE_NOT_FOUND = 2;
    /**
     * The language code is not supported.
     *
     * Generated from protobuf enum <code>INVALID_LANGUAGE_CODE = 3;</code>
     */
    const INVALID_LANGUAGE_CODE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::LANGUAGE_CODE_NOT_FOUND => 'LANGUAGE_CODE_NOT_FOUND',
        self::INVALID_LANGUAGE_CODE => 'INVALID_LANGUAGE_CODE',
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
class_alias(LanguageCodeError::class, \Google\Ads\GoogleAds\V17\Errors\LanguageCodeErrorEnum_LanguageCodeError::class);

