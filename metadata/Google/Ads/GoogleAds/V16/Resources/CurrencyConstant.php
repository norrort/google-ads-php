<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/currency_constant.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Resources;

class CurrencyConstant
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v16/resources/currency_constant.proto"google.ads.googleads.v16.resourcesgoogle/api/resource.proto"�
CurrencyConstantH
resource_name (	B1�A�A+
)googleads.googleapis.com/CurrencyConstant
code (	B�AH �
name (	B�AH�
symbol (	B�AH�&
billable_unit_micros	 (B�AH�:H�AE
)googleads.googleapis.com/CurrencyConstantcurrencyConstants/{code}B
_codeB
_nameB	
_symbolB
_billable_unit_microsB�
&com.google.ads.googleads.v16.resourcesBCurrencyConstantProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

