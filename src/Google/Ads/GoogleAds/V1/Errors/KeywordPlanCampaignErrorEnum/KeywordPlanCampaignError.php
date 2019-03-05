<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/keyword_plan_campaign_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\KeywordPlanCampaignErrorEnum;

/**
 * Enum describing possible errors from applying a keyword plan campaign.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.KeywordPlanCampaignErrorEnum.KeywordPlanCampaignError</code>
 */
class KeywordPlanCampaignError
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
     * A keyword plan campaign name is missing, empty, longer than allowed limit
     * or contains invalid chars.
     *
     * Generated from protobuf enum <code>INVALID_NAME = 2;</code>
     */
    const INVALID_NAME = 2;
    /**
     * A keyword plan campaign contains one or more untargetable languages.
     *
     * Generated from protobuf enum <code>INVALID_LANGUAGES = 3;</code>
     */
    const INVALID_LANGUAGES = 3;
    /**
     * A keyword plan campaign contains one or more invalid geo targets.
     *
     * Generated from protobuf enum <code>INVALID_GEOS = 4;</code>
     */
    const INVALID_GEOS = 4;
    /**
     * The keyword plan campaign name is duplicate to an existing keyword plan
     * campaign name or other keyword plan campaign name in the request.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAME = 5;</code>
     */
    const DUPLICATE_NAME = 5;
    /**
     * The number of geo targets in the keyword plan campaign exceeds limits.
     *
     * Generated from protobuf enum <code>MAX_GEOS_EXCEEDED = 6;</code>
     */
    const MAX_GEOS_EXCEEDED = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordPlanCampaignError::class, \Google\Ads\GoogleAds\V1\Errors\KeywordPlanCampaignErrorEnum_KeywordPlanCampaignError::class);

