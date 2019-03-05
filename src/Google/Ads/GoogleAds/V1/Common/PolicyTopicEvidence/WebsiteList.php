<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/policy.proto

namespace Google\Ads\GoogleAds\V1\Common\PolicyTopicEvidence;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of websites that caused a policy finding. Used for
 * ONE_WEBSITE_PER_AD_GROUP policy topic, for example. In case there are more
 * than five websites, only the top five (those that appear in resources the
 * most) will be listed here.
 * Next Id: 2
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.PolicyTopicEvidence.WebsiteList</code>
 */
class WebsiteList extends \Google\Protobuf\Internal\Message
{
    /**
     * Websites that caused the policy finding.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue websites = 1;</code>
     */
    private $websites;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $websites
     *           Websites that caused the policy finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Websites that caused the policy finding.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue websites = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWebsites()
    {
        return $this->websites;
    }

    /**
     * Websites that caused the policy finding.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue websites = 1;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWebsites($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->websites = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebsiteList::class, \Google\Ads\GoogleAds\V1\Common\PolicyTopicEvidence_WebsiteList::class);

