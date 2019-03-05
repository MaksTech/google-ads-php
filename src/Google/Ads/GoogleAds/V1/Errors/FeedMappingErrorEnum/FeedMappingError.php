<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/feed_mapping_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\FeedMappingErrorEnum;

/**
 * Enum describing possible feed item errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.FeedMappingErrorEnum.FeedMappingError</code>
 */
class FeedMappingError
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
     * The given placeholder field does not exist.
     *
     * Generated from protobuf enum <code>INVALID_PLACEHOLDER_FIELD = 2;</code>
     */
    const INVALID_PLACEHOLDER_FIELD = 2;
    /**
     * The given criterion field does not exist.
     *
     * Generated from protobuf enum <code>INVALID_CRITERION_FIELD = 3;</code>
     */
    const INVALID_CRITERION_FIELD = 3;
    /**
     * The given placeholder type does not exist.
     *
     * Generated from protobuf enum <code>INVALID_PLACEHOLDER_TYPE = 4;</code>
     */
    const INVALID_PLACEHOLDER_TYPE = 4;
    /**
     * The given criterion type does not exist.
     *
     * Generated from protobuf enum <code>INVALID_CRITERION_TYPE = 5;</code>
     */
    const INVALID_CRITERION_TYPE = 5;
    /**
     * A feed mapping must contain at least one attribute field mapping.
     *
     * Generated from protobuf enum <code>NO_ATTRIBUTE_FIELD_MAPPINGS = 7;</code>
     */
    const NO_ATTRIBUTE_FIELD_MAPPINGS = 7;
    /**
     * The type of the feed attribute referenced in the attribute field mapping
     * must match the type of the placeholder field.
     *
     * Generated from protobuf enum <code>FEED_ATTRIBUTE_TYPE_MISMATCH = 8;</code>
     */
    const FEED_ATTRIBUTE_TYPE_MISMATCH = 8;
    /**
     * A feed mapping for a system generated feed cannot be operated on.
     *
     * Generated from protobuf enum <code>CANNOT_OPERATE_ON_MAPPINGS_FOR_SYSTEM_GENERATED_FEED = 9;</code>
     */
    const CANNOT_OPERATE_ON_MAPPINGS_FOR_SYSTEM_GENERATED_FEED = 9;
    /**
     * Only one feed mapping for a placeholder type is allowed per feed or
     * customer (depending on the placeholder type).
     *
     * Generated from protobuf enum <code>MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_TYPE = 10;</code>
     */
    const MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_TYPE = 10;
    /**
     * Only one feed mapping for a criterion type is allowed per customer.
     *
     * Generated from protobuf enum <code>MULTIPLE_MAPPINGS_FOR_CRITERION_TYPE = 11;</code>
     */
    const MULTIPLE_MAPPINGS_FOR_CRITERION_TYPE = 11;
    /**
     * Only one feed attribute mapping for a placeholder field is allowed
     * (depending on the placeholder type).
     *
     * Generated from protobuf enum <code>MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_FIELD = 12;</code>
     */
    const MULTIPLE_MAPPINGS_FOR_PLACEHOLDER_FIELD = 12;
    /**
     * Only one feed attribute mapping for a criterion field is allowed
     * (depending on the criterion type).
     *
     * Generated from protobuf enum <code>MULTIPLE_MAPPINGS_FOR_CRITERION_FIELD = 13;</code>
     */
    const MULTIPLE_MAPPINGS_FOR_CRITERION_FIELD = 13;
    /**
     * This feed mapping may not contain any explicit attribute field mappings.
     *
     * Generated from protobuf enum <code>UNEXPECTED_ATTRIBUTE_FIELD_MAPPINGS = 14;</code>
     */
    const UNEXPECTED_ATTRIBUTE_FIELD_MAPPINGS = 14;
    /**
     * Location placeholder feed mappings can only be created for Places feeds.
     *
     * Generated from protobuf enum <code>LOCATION_PLACEHOLDER_ONLY_FOR_PLACES_FEEDS = 15;</code>
     */
    const LOCATION_PLACEHOLDER_ONLY_FOR_PLACES_FEEDS = 15;
    /**
     * Mappings for typed feeds cannot be modified.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_MAPPINGS_FOR_TYPED_FEED = 16;</code>
     */
    const CANNOT_MODIFY_MAPPINGS_FOR_TYPED_FEED = 16;
    /**
     * The given placeholder type can only be mapped to system generated feeds.
     *
     * Generated from protobuf enum <code>INVALID_PLACEHOLDER_TYPE_FOR_NON_SYSTEM_GENERATED_FEED = 17;</code>
     */
    const INVALID_PLACEHOLDER_TYPE_FOR_NON_SYSTEM_GENERATED_FEED = 17;
    /**
     * The given placeholder type cannot be mapped to a system generated feed
     * with the given type.
     *
     * Generated from protobuf enum <code>INVALID_PLACEHOLDER_TYPE_FOR_SYSTEM_GENERATED_FEED_TYPE = 18;</code>
     */
    const INVALID_PLACEHOLDER_TYPE_FOR_SYSTEM_GENERATED_FEED_TYPE = 18;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedMappingError::class, \Google\Ads\GoogleAds\V1\Errors\FeedMappingErrorEnum_FeedMappingError::class);

