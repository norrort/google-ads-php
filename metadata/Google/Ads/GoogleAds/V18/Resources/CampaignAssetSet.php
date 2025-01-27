<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/campaign_asset_set.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Resources;

class CampaignAssetSet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v18/enums/asset_set_link_status.protogoogle.ads.googleads.v18.enums"f
AssetSetLinkStatusEnum"L
AssetSetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v18.enumsBAssetSetLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
;google/ads/googleads/v18/resources/campaign_asset_set.proto"google.ads.googleads.v18.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignAssetSetH
resource_name (	B1�A�A+
)googleads.googleapis.com/CampaignAssetSet;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaign<
	asset_set (	B)�A�A#
!googleads.googleapis.com/AssetSet^
status (2I.google.ads.googleads.v18.enums.AssetSetLinkStatusEnum.AssetSetLinkStatusB�A:v�As
)googleads.googleapis.com/CampaignAssetSetFcustomers/{customer_id}/campaignAssetSets/{campaign_id}~{asset_set_id}B�
&com.google.ads.googleads.v18.resourcesBCampaignAssetSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

