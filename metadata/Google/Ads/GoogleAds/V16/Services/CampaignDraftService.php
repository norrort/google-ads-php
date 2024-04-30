<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/campaign_draft_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class CampaignDraftService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v16/enums/campaign_draft_status.protogoogle.ads.googleads.v16.enums"�
CampaignDraftStatusEnum"
CampaignDraftStatus
UNSPECIFIED 
UNKNOWN
PROPOSED
REMOVED
	PROMOTING
PROMOTED
PROMOTE_FAILEDB�
"com.google.ads.googleads.v16.enumsBCampaignDraftStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/resources/campaign_draft.proto"google.ads.googleads.v16.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignDraftE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignDraft
draft_id	 (B�AH �E
base_campaign
 (	B)�A�A#
!googleads.googleapis.com/CampaignH�
name (	H�F
draft_campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH�`
status (2K.google.ads.googleads.v16.enums.CampaignDraftStatusEnum.CampaignDraftStatusB�A(
has_experiment_running (B�AH�(
long_running_operation (	B�AH�:q�An
&googleads.googleapis.com/CampaignDraftDcustomers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}B
	_draft_idB
_base_campaignB
_nameB
_draft_campaignB
_has_experiment_runningB
_long_running_operationB�
&com.google.ads.googleads.v16.resourcesBCampaignDraftProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
:google/ads/googleads/v16/enums/response_content_type.protogoogle.ads.googleads.v16.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v16.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
>google/ads/googleads/v16/services/campaign_draft_service.proto!google.ads.googleads.v16.services7google/ads/googleads/v16/resources/campaign_draft.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateCampaignDraftsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v16.services.CampaignDraftOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v16.enums.ResponseContentTypeEnum.ResponseContentType"|
PromoteCampaignDraftRequestF
campaign_draft (	B.�A�A(
&googleads.googleapis.com/CampaignDraft
validate_only ("�
CampaignDraftOperation/
update_mask (2.google.protobuf.FieldMaskC
create (21.google.ads.googleads.v16.resources.CampaignDraftH C
update (21.google.ads.googleads.v16.resources.CampaignDraftH =
remove (	B+�A(
&googleads.googleapis.com/CampaignDraftH B
	operation"�
MutateCampaignDraftsResponse1
partial_failure_error (2.google.rpc.StatusM
results (2<.google.ads.googleads.v16.services.MutateCampaignDraftResult"�
MutateCampaignDraftResultB
resource_name (	B+�A(
&googleads.googleapis.com/CampaignDraftI
campaign_draft (21.google.ads.googleads.v16.resources.CampaignDraft"�
#ListCampaignDraftAsyncErrorsRequestE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignDraft

page_token (	
	page_size ("c
$ListCampaignDraftAsyncErrorsResponse"
errors (2.google.rpc.Status
next_page_token (	2�
CampaignDraftService�
MutateCampaignDrafts>.google.ads.googleads.v16.services.MutateCampaignDraftsRequest?.google.ads.googleads.v16.services.MutateCampaignDraftsResponse"X�Acustomer_id,operations���9"4/v16/customers/{customer_id=*}/campaignDrafts:mutate:*�
PromoteCampaignDraft>.google.ads.googleads.v16.services.PromoteCampaignDraftRequest.google.longrunning.Operation"��A.
google.protobuf.Emptygoogle.protobuf.Empty�Acampaign_draft���?":/v16/{campaign_draft=customers/*/campaignDrafts/*}:promote:*�
ListCampaignDraftAsyncErrorsF.google.ads.googleads.v16.services.ListCampaignDraftAsyncErrorsRequestG.google.ads.googleads.v16.services.ListCampaignDraftAsyncErrorsResponse"Y�Aresource_name���CA/v16/{resource_name=customers/*/campaignDrafts/*}:listAsyncErrorsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBCampaignDraftServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

