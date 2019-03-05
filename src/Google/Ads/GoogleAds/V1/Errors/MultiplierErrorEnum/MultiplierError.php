<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/multiplier_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\MultiplierErrorEnum;

/**
 * Enum describing possible multiplier errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.MultiplierErrorEnum.MultiplierError</code>
 */
class MultiplierError
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
     * Multiplier value is too high
     *
     * Generated from protobuf enum <code>MULTIPLIER_TOO_HIGH = 2;</code>
     */
    const MULTIPLIER_TOO_HIGH = 2;
    /**
     * Multiplier value is too low
     *
     * Generated from protobuf enum <code>MULTIPLIER_TOO_LOW = 3;</code>
     */
    const MULTIPLIER_TOO_LOW = 3;
    /**
     * Too many fractional digits
     *
     * Generated from protobuf enum <code>TOO_MANY_FRACTIONAL_DIGITS = 4;</code>
     */
    const TOO_MANY_FRACTIONAL_DIGITS = 4;
    /**
     * A multiplier cannot be set for this bidding strategy
     *
     * Generated from protobuf enum <code>MULTIPLIER_NOT_ALLOWED_FOR_BIDDING_STRATEGY = 5;</code>
     */
    const MULTIPLIER_NOT_ALLOWED_FOR_BIDDING_STRATEGY = 5;
    /**
     * A multiplier cannot be set when there is no base bid (e.g., content max
     * cpc)
     *
     * Generated from protobuf enum <code>MULTIPLIER_NOT_ALLOWED_WHEN_BASE_BID_IS_MISSING = 6;</code>
     */
    const MULTIPLIER_NOT_ALLOWED_WHEN_BASE_BID_IS_MISSING = 6;
    /**
     * A bid multiplier must be specified
     *
     * Generated from protobuf enum <code>NO_MULTIPLIER_SPECIFIED = 7;</code>
     */
    const NO_MULTIPLIER_SPECIFIED = 7;
    /**
     * Multiplier causes bid to exceed daily budget
     *
     * Generated from protobuf enum <code>MULTIPLIER_CAUSES_BID_TO_EXCEED_DAILY_BUDGET = 8;</code>
     */
    const MULTIPLIER_CAUSES_BID_TO_EXCEED_DAILY_BUDGET = 8;
    /**
     * Multiplier causes bid to exceed monthly budget
     *
     * Generated from protobuf enum <code>MULTIPLIER_CAUSES_BID_TO_EXCEED_MONTHLY_BUDGET = 9;</code>
     */
    const MULTIPLIER_CAUSES_BID_TO_EXCEED_MONTHLY_BUDGET = 9;
    /**
     * Multiplier causes bid to exceed custom budget
     *
     * Generated from protobuf enum <code>MULTIPLIER_CAUSES_BID_TO_EXCEED_CUSTOM_BUDGET = 10;</code>
     */
    const MULTIPLIER_CAUSES_BID_TO_EXCEED_CUSTOM_BUDGET = 10;
    /**
     * Multiplier causes bid to exceed maximum allowed bid
     *
     * Generated from protobuf enum <code>MULTIPLIER_CAUSES_BID_TO_EXCEED_MAX_ALLOWED_BID = 11;</code>
     */
    const MULTIPLIER_CAUSES_BID_TO_EXCEED_MAX_ALLOWED_BID = 11;
    /**
     * Multiplier causes bid to become less than the minimum bid allowed
     *
     * Generated from protobuf enum <code>BID_LESS_THAN_MIN_ALLOWED_BID_WITH_MULTIPLIER = 12;</code>
     */
    const BID_LESS_THAN_MIN_ALLOWED_BID_WITH_MULTIPLIER = 12;
    /**
     * Multiplier type (cpc vs. cpm) needs to match campaign's bidding strategy
     *
     * Generated from protobuf enum <code>MULTIPLIER_AND_BIDDING_STRATEGY_TYPE_MISMATCH = 13;</code>
     */
    const MULTIPLIER_AND_BIDDING_STRATEGY_TYPE_MISMATCH = 13;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MultiplierError::class, \Google\Ads\GoogleAds\V1\Errors\MultiplierErrorEnum_MultiplierError::class);

