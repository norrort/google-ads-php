<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/customer_label.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Resources;

class CustomerLabel
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
7google/ads/googleads/v14/resources/customer_label.proto"google.ads.googleads.v14.resourcesgoogle/api/resource.proto"�
CustomerLabelE
resource_name (	B.�A�A(
&googleads.googleapis.com/CustomerLabel@
customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �:
label (	B&�A�A 
googleads.googleapis.com/LabelH�:^�A[
&googleads.googleapis.com/CustomerLabel1customers/{customer_id}/customerLabels/{label_id}B
	_customerB
_labelB�
&com.google.ads.googleads.v14.resourcesBCustomerLabelProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

