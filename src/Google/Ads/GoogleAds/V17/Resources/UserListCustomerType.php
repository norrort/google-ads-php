<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/user_list_customer_type.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user list customer type
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.UserListCustomerType</code>
 */
class UserListCustomerType extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the user list customer type
     * User list customer type resource names have the form:
     * `customers/{customer_id}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The resource name for the user list this user list customer type
     * is associated with
     *
     * Generated from protobuf field <code>string user_list = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $user_list = '';
    /**
     * Immutable. The user list customer type category
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.UserListCustomerTypeCategoryEnum.UserListCustomerTypeCategory customer_type_category = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $customer_type_category = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the user list customer type
     *           User list customer type resource names have the form:
     *           `customers/{customer_id}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
     *     @type string $user_list
     *           Immutable. The resource name for the user list this user list customer type
     *           is associated with
     *     @type int $customer_type_category
     *           Immutable. The user list customer type category
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\UserListCustomerType::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the user list customer type
     * User list customer type resource names have the form:
     * `customers/{customer_id}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the user list customer type
     * User list customer type resource names have the form:
     * `customers/{customer_id}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The resource name for the user list this user list customer type
     * is associated with
     *
     * Generated from protobuf field <code>string user_list = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getUserList()
    {
        return $this->user_list;
    }

    /**
     * Immutable. The resource name for the user list this user list customer type
     * is associated with
     *
     * Generated from protobuf field <code>string user_list = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserList($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_list = $var;

        return $this;
    }

    /**
     * Immutable. The user list customer type category
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.UserListCustomerTypeCategoryEnum.UserListCustomerTypeCategory customer_type_category = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getCustomerTypeCategory()
    {
        return $this->customer_type_category;
    }

    /**
     * Immutable. The user list customer type category
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.UserListCustomerTypeCategoryEnum.UserListCustomerTypeCategory customer_type_category = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setCustomerTypeCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\UserListCustomerTypeCategoryEnum\UserListCustomerTypeCategory::class);
        $this->customer_type_category = $var;

        return $this;
    }

}

