<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/user_lists.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Visitors of a page during specific dates.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.DateSpecificRuleUserListInfo</code>
 */
class DateSpecificRuleUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Boolean rule that defines visitor of a page.
     * Required for creating a date specific rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.UserListRuleInfo rule = 1;</code>
     */
    private $rule = null;
    /**
     * Start date of users visit. If set to 2000-01-01, then the list includes all
     * users before end_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 2;</code>
     */
    private $start_date = null;
    /**
     * End date of users visit. If set to 2037-12-30, then the list includes all
     * users after start_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 3;</code>
     */
    private $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V1\Common\UserListRuleInfo $rule
     *           Boolean rule that defines visitor of a page.
     *           Required for creating a date specific rule user list.
     *     @type \Google\Protobuf\StringValue $start_date
     *           Start date of users visit. If set to 2000-01-01, then the list includes all
     *           users before end_date. The date's format should be YYYY-MM-DD.
     *           Required for creating a data specific rule user list.
     *     @type \Google\Protobuf\StringValue $end_date
     *           End date of users visit. If set to 2037-12-30, then the list includes all
     *           users after start_date. The date's format should be YYYY-MM-DD.
     *           Required for creating a data specific rule user list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Boolean rule that defines visitor of a page.
     * Required for creating a date specific rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.UserListRuleInfo rule = 1;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\UserListRuleInfo
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Boolean rule that defines visitor of a page.
     * Required for creating a date specific rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.UserListRuleInfo rule = 1;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\UserListRuleInfo $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\UserListRuleInfo::class);
        $this->rule = $var;

        return $this;
    }

    /**
     * Start date of users visit. If set to 2000-01-01, then the list includes all
     * users before end_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Start date of users visit. If set to 2000-01-01, then the list includes all
     * users before end_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * End date of users visit. If set to 2037-12-30, then the list includes all
     * users after start_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * End date of users visit. If set to 2037-12-30, then the list includes all
     * users after start_date. The date's format should be YYYY-MM-DD.
     * Required for creating a data specific rule user list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->end_date = $var;

        return $this;
    }

}

