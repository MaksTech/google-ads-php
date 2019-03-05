<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign_criterion.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.CampaignCriterion</code>
 */
class CampaignCriterion extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign criterion.
     * Campaign criterion resource names have the form:
     * `customers/{customer_id}/campaignCriteria/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The campaign to which the criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 4;</code>
     */
    private $campaign = null;
    /**
     * The ID of the criterion.
     * This field is ignored during mutate.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 5;</code>
     */
    private $criterion_id = null;
    /**
     * The modifier for the bids when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. Most targetable criteria types support modifiers.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.FloatValue bid_modifier = 14;</code>
     */
    private $bid_modifier = null;
    /**
     * Whether to target (`false`) or exclude (`true`) the criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7;</code>
     */
    private $negative = null;
    /**
     * The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.CriterionTypeEnum.CriterionType type = 6;</code>
     */
    private $type = 0;
    protected $criterion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the campaign criterion.
     *           Campaign criterion resource names have the form:
     *           `customers/{customer_id}/campaignCriteria/{campaign_id}~{criterion_id}`
     *     @type \Google\Protobuf\StringValue $campaign
     *           The campaign to which the criterion belongs.
     *     @type \Google\Protobuf\Int64Value $criterion_id
     *           The ID of the criterion.
     *           This field is ignored during mutate.
     *     @type \Google\Protobuf\FloatValue $bid_modifier
     *           The modifier for the bids when the criterion matches. The modifier must be
     *           in the range: 0.1 - 10.0. Most targetable criteria types support modifiers.
     *           Use 0 to opt out of a Device type.
     *     @type \Google\Protobuf\BoolValue $negative
     *           Whether to target (`false`) or exclude (`true`) the criterion.
     *     @type int $type
     *           The type of the criterion.
     *     @type \Google\Ads\GoogleAds\V1\Common\KeywordInfo $keyword
     *           Keyword.
     *     @type \Google\Ads\GoogleAds\V1\Common\PlacementInfo $placement
     *           Placement.
     *     @type \Google\Ads\GoogleAds\V1\Common\MobileAppCategoryInfo $mobile_app_category
     *           Mobile app category.
     *     @type \Google\Ads\GoogleAds\V1\Common\LocationInfo $location
     *           Location.
     *     @type \Google\Ads\GoogleAds\V1\Common\DeviceInfo $device
     *           Device.
     *     @type \Google\Ads\GoogleAds\V1\Common\AdScheduleInfo $ad_schedule
     *           Ad Schedule.
     *     @type \Google\Ads\GoogleAds\V1\Common\AgeRangeInfo $age_range
     *           Age range.
     *     @type \Google\Ads\GoogleAds\V1\Common\GenderInfo $gender
     *           Gender.
     *     @type \Google\Ads\GoogleAds\V1\Common\IncomeRangeInfo $income_range
     *           Income range.
     *     @type \Google\Ads\GoogleAds\V1\Common\ParentalStatusInfo $parental_status
     *           Parental status.
     *     @type \Google\Ads\GoogleAds\V1\Common\UserListInfo $user_list
     *           User List.
     *     @type \Google\Ads\GoogleAds\V1\Common\YouTubeVideoInfo $youtube_video
     *           YouTube Video.
     *     @type \Google\Ads\GoogleAds\V1\Common\YouTubeChannelInfo $youtube_channel
     *           YouTube Channel.
     *     @type \Google\Ads\GoogleAds\V1\Common\ProximityInfo $proximity
     *           Proximity.
     *     @type \Google\Ads\GoogleAds\V1\Common\TopicInfo $topic
     *           Topic.
     *     @type \Google\Ads\GoogleAds\V1\Common\ListingScopeInfo $listing_scope
     *           Listing scope.
     *     @type \Google\Ads\GoogleAds\V1\Common\LanguageInfo $language
     *           Language.
     *     @type \Google\Ads\GoogleAds\V1\Common\IpBlockInfo $ip_block
     *           IpBlock.
     *     @type \Google\Ads\GoogleAds\V1\Common\ContentLabelInfo $content_label
     *           ContentLabel.
     *     @type \Google\Ads\GoogleAds\V1\Common\CarrierInfo $carrier
     *           Carrier.
     *     @type \Google\Ads\GoogleAds\V1\Common\UserInterestInfo $user_interest
     *           User Interest.
     *     @type \Google\Ads\GoogleAds\V1\Common\WebpageInfo $webpage
     *           Webpage.
     *     @type \Google\Ads\GoogleAds\V1\Common\OperatingSystemVersionInfo $operating_system_version
     *           Operating system version.
     *     @type \Google\Ads\GoogleAds\V1\Common\MobileDeviceInfo $mobile_device
     *           Mobile Device.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CampaignCriterion::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the campaign criterion.
     * Campaign criterion resource names have the form:
     * `customers/{customer_id}/campaignCriteria/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the campaign criterion.
     * Campaign criterion resource names have the form:
     * `customers/{customer_id}/campaignCriteria/{campaign_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
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
     * The campaign to which the criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * The campaign to which the criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * The ID of the criterion.
     * This field is ignored during mutate.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCriterionId()
    {
        return $this->criterion_id;
    }

    /**
     * The ID of the criterion.
     * This field is ignored during mutate.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCriterionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->criterion_id = $var;

        return $this;
    }

    /**
     * The modifier for the bids when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. Most targetable criteria types support modifiers.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.FloatValue bid_modifier = 14;</code>
     * @return \Google\Protobuf\FloatValue
     */
    public function getBidModifier()
    {
        return $this->bid_modifier;
    }

    /**
     * The modifier for the bids when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. Most targetable criteria types support modifiers.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.FloatValue bid_modifier = 14;</code>
     * @param \Google\Protobuf\FloatValue $var
     * @return $this
     */
    public function setBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FloatValue::class);
        $this->bid_modifier = $var;

        return $this;
    }

    /**
     * Whether to target (`false`) or exclude (`true`) the criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getNegative()
    {
        return $this->negative;
    }

    /**
     * Whether to target (`false`) or exclude (`true`) the criterion.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue negative = 7;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setNegative($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->negative = $var;

        return $this;
    }

    /**
     * The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.CriterionTypeEnum.CriterionType type = 6;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.CriterionTypeEnum.CriterionType type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\CriterionTypeEnum_CriterionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.KeywordInfo keyword = 8;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\KeywordInfo
     */
    public function getKeyword()
    {
        return $this->readOneof(8);
    }

    /**
     * Keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.KeywordInfo keyword = 8;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\KeywordInfo $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\KeywordInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Placement.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PlacementInfo placement = 9;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\PlacementInfo
     */
    public function getPlacement()
    {
        return $this->readOneof(9);
    }

    /**
     * Placement.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PlacementInfo placement = 9;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PlacementInfo $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\PlacementInfo::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Mobile app category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.MobileAppCategoryInfo mobile_app_category = 10;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\MobileAppCategoryInfo
     */
    public function getMobileAppCategory()
    {
        return $this->readOneof(10);
    }

    /**
     * Mobile app category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.MobileAppCategoryInfo mobile_app_category = 10;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\MobileAppCategoryInfo $var
     * @return $this
     */
    public function setMobileAppCategory($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\MobileAppCategoryInfo::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Location.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LocationInfo location = 12;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\LocationInfo
     */
    public function getLocation()
    {
        return $this->readOneof(12);
    }

    /**
     * Location.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LocationInfo location = 12;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\LocationInfo $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\LocationInfo::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.DeviceInfo device = 13;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\DeviceInfo
     */
    public function getDevice()
    {
        return $this->readOneof(13);
    }

    /**
     * Device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.DeviceInfo device = 13;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\DeviceInfo $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\DeviceInfo::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Ad Schedule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AdScheduleInfo ad_schedule = 15;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\AdScheduleInfo
     */
    public function getAdSchedule()
    {
        return $this->readOneof(15);
    }

    /**
     * Ad Schedule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AdScheduleInfo ad_schedule = 15;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\AdScheduleInfo $var
     * @return $this
     */
    public function setAdSchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\AdScheduleInfo::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Age range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AgeRangeInfo age_range = 16;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\AgeRangeInfo
     */
    public function getAgeRange()
    {
        return $this->readOneof(16);
    }

    /**
     * Age range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.AgeRangeInfo age_range = 16;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\AgeRangeInfo $var
     * @return $this
     */
    public function setAgeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\AgeRangeInfo::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.GenderInfo gender = 17;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\GenderInfo
     */
    public function getGender()
    {
        return $this->readOneof(17);
    }

    /**
     * Gender.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.GenderInfo gender = 17;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\GenderInfo $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\GenderInfo::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Income range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.IncomeRangeInfo income_range = 18;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\IncomeRangeInfo
     */
    public function getIncomeRange()
    {
        return $this->readOneof(18);
    }

    /**
     * Income range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.IncomeRangeInfo income_range = 18;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\IncomeRangeInfo $var
     * @return $this
     */
    public function setIncomeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\IncomeRangeInfo::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ParentalStatusInfo parental_status = 19;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ParentalStatusInfo
     */
    public function getParentalStatus()
    {
        return $this->readOneof(19);
    }

    /**
     * Parental status.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ParentalStatusInfo parental_status = 19;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ParentalStatusInfo $var
     * @return $this
     */
    public function setParentalStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ParentalStatusInfo::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * User List.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.UserListInfo user_list = 22;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\UserListInfo
     */
    public function getUserList()
    {
        return $this->readOneof(22);
    }

    /**
     * User List.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.UserListInfo user_list = 22;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\UserListInfo $var
     * @return $this
     */
    public function setUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\UserListInfo::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * YouTube Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.YouTubeVideoInfo youtube_video = 20;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\YouTubeVideoInfo
     */
    public function getYoutubeVideo()
    {
        return $this->readOneof(20);
    }

    /**
     * YouTube Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.YouTubeVideoInfo youtube_video = 20;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\YouTubeVideoInfo $var
     * @return $this
     */
    public function setYoutubeVideo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\YouTubeVideoInfo::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * YouTube Channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.YouTubeChannelInfo youtube_channel = 21;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\YouTubeChannelInfo
     */
    public function getYoutubeChannel()
    {
        return $this->readOneof(21);
    }

    /**
     * YouTube Channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.YouTubeChannelInfo youtube_channel = 21;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\YouTubeChannelInfo $var
     * @return $this
     */
    public function setYoutubeChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\YouTubeChannelInfo::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Proximity.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProximityInfo proximity = 23;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ProximityInfo
     */
    public function getProximity()
    {
        return $this->readOneof(23);
    }

    /**
     * Proximity.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ProximityInfo proximity = 23;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ProximityInfo $var
     * @return $this
     */
    public function setProximity($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ProximityInfo::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * Topic.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TopicInfo topic = 24;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\TopicInfo
     */
    public function getTopic()
    {
        return $this->readOneof(24);
    }

    /**
     * Topic.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TopicInfo topic = 24;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\TopicInfo $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\TopicInfo::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * Listing scope.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ListingScopeInfo listing_scope = 25;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ListingScopeInfo
     */
    public function getListingScope()
    {
        return $this->readOneof(25);
    }

    /**
     * Listing scope.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ListingScopeInfo listing_scope = 25;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ListingScopeInfo $var
     * @return $this
     */
    public function setListingScope($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ListingScopeInfo::class);
        $this->writeOneof(25, $var);

        return $this;
    }

    /**
     * Language.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LanguageInfo language = 26;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\LanguageInfo
     */
    public function getLanguage()
    {
        return $this->readOneof(26);
    }

    /**
     * Language.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LanguageInfo language = 26;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\LanguageInfo $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\LanguageInfo::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * IpBlock.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.IpBlockInfo ip_block = 27;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\IpBlockInfo
     */
    public function getIpBlock()
    {
        return $this->readOneof(27);
    }

    /**
     * IpBlock.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.IpBlockInfo ip_block = 27;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\IpBlockInfo $var
     * @return $this
     */
    public function setIpBlock($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\IpBlockInfo::class);
        $this->writeOneof(27, $var);

        return $this;
    }

    /**
     * ContentLabel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ContentLabelInfo content_label = 28;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ContentLabelInfo
     */
    public function getContentLabel()
    {
        return $this->readOneof(28);
    }

    /**
     * ContentLabel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ContentLabelInfo content_label = 28;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ContentLabelInfo $var
     * @return $this
     */
    public function setContentLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ContentLabelInfo::class);
        $this->writeOneof(28, $var);

        return $this;
    }

    /**
     * Carrier.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CarrierInfo carrier = 29;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\CarrierInfo
     */
    public function getCarrier()
    {
        return $this->readOneof(29);
    }

    /**
     * Carrier.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CarrierInfo carrier = 29;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CarrierInfo $var
     * @return $this
     */
    public function setCarrier($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\CarrierInfo::class);
        $this->writeOneof(29, $var);

        return $this;
    }

    /**
     * User Interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.UserInterestInfo user_interest = 30;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\UserInterestInfo
     */
    public function getUserInterest()
    {
        return $this->readOneof(30);
    }

    /**
     * User Interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.UserInterestInfo user_interest = 30;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\UserInterestInfo $var
     * @return $this
     */
    public function setUserInterest($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\UserInterestInfo::class);
        $this->writeOneof(30, $var);

        return $this;
    }

    /**
     * Webpage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.WebpageInfo webpage = 31;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\WebpageInfo
     */
    public function getWebpage()
    {
        return $this->readOneof(31);
    }

    /**
     * Webpage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.WebpageInfo webpage = 31;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\WebpageInfo $var
     * @return $this
     */
    public function setWebpage($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\WebpageInfo::class);
        $this->writeOneof(31, $var);

        return $this;
    }

    /**
     * Operating system version.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.OperatingSystemVersionInfo operating_system_version = 32;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\OperatingSystemVersionInfo
     */
    public function getOperatingSystemVersion()
    {
        return $this->readOneof(32);
    }

    /**
     * Operating system version.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.OperatingSystemVersionInfo operating_system_version = 32;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\OperatingSystemVersionInfo $var
     * @return $this
     */
    public function setOperatingSystemVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\OperatingSystemVersionInfo::class);
        $this->writeOneof(32, $var);

        return $this;
    }

    /**
     * Mobile Device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.MobileDeviceInfo mobile_device = 33;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\MobileDeviceInfo
     */
    public function getMobileDevice()
    {
        return $this->readOneof(33);
    }

    /**
     * Mobile Device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.MobileDeviceInfo mobile_device = 33;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\MobileDeviceInfo $var
     * @return $this
     */
    public function setMobileDevice($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\MobileDeviceInfo::class);
        $this->writeOneof(33, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCriterion()
    {
        return $this->whichOneof("criterion");
    }

}

