<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/feed_item_validation_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class FeedItemValidationError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v17/errors/feed_item_validation_error.protogoogle.ads.googleads.v17.errors"�
FeedItemValidationErrorEnum"�
FeedItemValidationError
UNSPECIFIED 
UNKNOWN
STRING_TOO_SHORT
STRING_TOO_LONG
VALUE_NOT_SPECIFIED(
$INVALID_DOMESTIC_PHONE_NUMBER_FORMAT
INVALID_PHONE_NUMBER*
&PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY#
PREMIUM_RATE_NUMBER_NOT_ALLOWED
DISALLOWED_NUMBER_TYPE	
VALUE_OUT_OF_RANGE
*
&CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY.
*CUSTOMER_NOT_IN_ALLOWLIST_FOR_CALLTRACKINGc
INVALID_COUNTRY_CODE
INVALID_APP_ID!
MISSING_ATTRIBUTES_FOR_FIELDS
INVALID_TYPE_ID
INVALID_EMAIL_ADDRESS
INVALID_HTTPS_URL
MISSING_DELIVERY_ADDRESS
START_DATE_AFTER_END_DATE 
MISSING_FEED_ITEM_START_TIME
MISSING_FEED_ITEM_END_TIME
MISSING_FEED_ITEM_ID#
VANITY_PHONE_NUMBER_NOT_ALLOWED$
 INVALID_REVIEW_EXTENSION_SNIPPET
INVALID_NUMBER_FORMAT
INVALID_DATE_FORMAT
INVALID_PRICE_FORMAT
UNKNOWN_PLACEHOLDER_FIELD.
*MISSING_ENHANCED_SITELINK_DESCRIPTION_LINE&
"REVIEW_EXTENSION_SOURCE_INELIGIBLE\'
#HYPHENS_IN_REVIEW_EXTENSION_SNIPPET -
)DOUBLE_QUOTES_IN_REVIEW_EXTENSION_SNIPPET!&
"QUOTES_IN_REVIEW_EXTENSION_SNIPPET"
INVALID_FORM_ENCODED_PARAMS#
INVALID_URL_PARAMETER_NAME$
NO_GEOCODING_RESULT%(
$SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT&-
)CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED\' 
INVALID_PLACEHOLDER_FIELD_ID(
INVALID_URL_TAG)
LIST_TOO_LONG*"
INVALID_ATTRIBUTES_COMBINATION+
DUPLICATE_VALUES,%
!INVALID_CALL_CONVERSION_ACTION_ID-!
CANNOT_SET_WITHOUT_FINAL_URLS.$
 APP_ID_DOESNT_EXIST_IN_APP_STORE/
INVALID_FINAL_URL0
INVALID_TRACKING_URL1*
&INVALID_FINAL_URL_FOR_APP_DOWNLOAD_URL2
LIST_TOO_SHORT3
INVALID_USER_ACTION4
INVALID_TYPE_NAME5
INVALID_EVENT_CHANGE_STATUS6
INVALID_SNIPPETS_HEADER7
INVALID_ANDROID_APP_LINK8;
7NUMBER_TYPE_WITH_CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY9
RESERVED_KEYWORD_OTHER:
DUPLICATE_OPTION_LABELS;
DUPLICATE_OPTION_PREFILLS<
UNEQUAL_LIST_LENGTHS=
INCONSISTENT_CURRENCY_CODES>*
&PRICE_EXTENSION_HAS_DUPLICATED_HEADERS?.
*ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION@%
!PRICE_EXTENSION_HAS_TOO_FEW_ITEMSA
UNSUPPORTED_VALUEB
INVALID_FINAL_MOBILE_URLC%
!INVALID_KEYWORDLESS_AD_RULE_LABELD\'
#VALUE_TRACK_PARAMETER_NOT_SUPPORTEDE*
&UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGEF
INVALID_IOS_APP_LINKG,
(MISSING_IOS_APP_LINK_OR_IOS_APP_STORE_IDH
PROMOTION_INVALID_TIMEI9
5PROMOTION_CANNOT_SET_PERCENT_OFF_AND_MONEY_AMOUNT_OFFJ>
:PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNTK%
!TOO_MANY_DECIMAL_PLACES_SPECIFIEDL
AD_CUSTOMIZERS_NOT_ALLOWEDM
INVALID_LANGUAGE_CODEN
UNSUPPORTED_LANGUAGEO
IF_FUNCTION_NOT_ALLOWEDP
INVALID_FINAL_URL_SUFFIXQ#
INVALID_TAG_IN_FINAL_URL_SUFFIXR#
INVALID_FINAL_URL_SUFFIX_FORMATS0
,CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIREDT\'
#ONLY_ONE_DELIVERY_OPTION_IS_ALLOWEDU
NO_DELIVERY_OPTION_IS_SETV&
"INVALID_CONVERSION_REPORTING_STATEW
IMAGE_SIZE_WRONGX+
\'EMAIL_DELIVERY_NOT_AVAILABLE_IN_COUNTRYY\'
#AUTO_REPLY_NOT_AVAILABLE_IN_COUNTRYZ
INVALID_LATITUDE_VALUE[
INVALID_LONGITUDE_VALUE\\
TOO_MANY_LABELS]
INVALID_IMAGE_URL^
MISSING_LATITUDE_VALUE_
MISSING_LONGITUDE_VALUE`
ADDRESS_NOT_FOUNDa
ADDRESS_NOT_TARGETABLEb
INVALID_ASSET_IDd
INCOMPATIBLE_ASSET_TYPEe
IMAGE_ERROR_UNEXPECTED_SIZEf(
$IMAGE_ERROR_ASPECT_RATIO_NOT_ALLOWEDg
IMAGE_ERROR_FILE_TOO_LARGEh"
IMAGE_ERROR_FORMAT_NOT_ALLOWEDi$
 IMAGE_ERROR_CONSTRAINTS_VIOLATEDj
IMAGE_ERROR_SERVER_ERRORkB�
#com.google.ads.googleads.v17.errorsBFeedItemValidationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

