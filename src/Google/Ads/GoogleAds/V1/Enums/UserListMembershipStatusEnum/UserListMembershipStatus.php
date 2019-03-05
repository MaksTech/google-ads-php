<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/user_list_membership_status.proto

namespace Google\Ads\GoogleAds\V1\Enums\UserListMembershipStatusEnum;

/**
 * Enum containing possible user list membership statuses.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.UserListMembershipStatusEnum.UserListMembershipStatus</code>
 */
class UserListMembershipStatus
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
     * Open status - List is accruing members and can be targeted to.
     *
     * Generated from protobuf enum <code>OPEN = 2;</code>
     */
    const OPEN = 2;
    /**
     * Closed status - No new members being added. Cannot be used for targeting.
     *
     * Generated from protobuf enum <code>CLOSED = 3;</code>
     */
    const CLOSED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListMembershipStatus::class, \Google\Ads\GoogleAds\V1\Enums\UserListMembershipStatusEnum_UserListMembershipStatus::class);

