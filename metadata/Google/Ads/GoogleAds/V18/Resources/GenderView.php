<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/gender_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Resources;

class GenderView
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
�
4google/ads/googleads/v18/resources/gender_view.proto"google.ads.googleads.v18.resourcesgoogle/api/resource.proto"�

GenderViewB
resource_name (	B+�A�A%
#googleads.googleapis.com/GenderView:j�Ag
#googleads.googleapis.com/GenderView@customers/{customer_id}/genderViews/{ad_group_id}~{criterion_id}B�
&com.google.ads.googleads.v18.resourcesBGenderViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

