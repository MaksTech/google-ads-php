<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign_budget.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign budget.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.CampaignBudget</code>
 */
class CampaignBudget extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign budget.
     * Campaign budget resource names have the form:
     * `customers/{customer_id}/campaignBudgets/{budget_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the campaign budget.
     * A campaign budget is created using the CampaignBudgetService create
     * operation and is assigned a budget ID. A budget ID can be shared across
     * different campaigns; the system will then allocate the campaign budget
     * among different campaigns to get optimum results.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    private $id = null;
    /**
     * The name of the campaign budget.
     * When creating a campaign budget through CampaignBudgetService, every
     * explicitly shared campaign budget must have a non-null, non-empty name.
     * Campaign budgets that are not explicitly shared derive their name from the
     * attached campaign's name.
     * The length of this string must be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     */
    private $name = null;
    /**
     * The amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 5;</code>
     */
    private $amount_micros = null;
    /**
     * The lifetime amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 10;</code>
     */
    private $total_amount_micros = null;
    /**
     * The status of this campaign budget. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetStatusEnum.BudgetStatus status = 6;</code>
     */
    private $status = 0;
    /**
     * The delivery method that determines the rate at which the campaign budget
     * is spent.
     * Defaults to STANDARD if unspecified in a create operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetDeliveryMethodEnum.BudgetDeliveryMethod delivery_method = 7;</code>
     */
    private $delivery_method = 0;
    /**
     * Specifies whether the budget is explicitly shared. Defaults to true if
     * unspecified in a create operation.
     * If true, the budget was created with the purpose of sharing
     * across one or more campaigns.
     * If false, the budget was created with the intention of only being used
     * with a single campaign. The budget's name and status will stay in sync
     * with the campaign's name and status. Attempting to share the budget with a
     * second campaign will result in an error.
     * A non-shared budget can become an explicitly shared. The same operation
     * must
     * also assign the budget a name.
     * A shared campaign budget can never become non-shared.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue explicitly_shared = 8;</code>
     */
    private $explicitly_shared = null;
    /**
     * The number of campaigns actively using the budget.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reference_count = 9;</code>
     */
    private $reference_count = null;
    /**
     * Indicates whether there is a recommended budget for this campaign budget.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_recommended_budget = 11;</code>
     */
    private $has_recommended_budget = null;
    /**
     * The recommended budget amount. If no recommendation is available, this will
     * be set to the budget amount.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 12;</code>
     */
    private $recommended_budget_amount_micros = null;
    /**
     * Period over which to spend the budget. Defaults to DAILY if not specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetPeriodEnum.BudgetPeriod period = 13;</code>
     */
    private $period = 0;
    /**
     * The estimated change in weekly clicks if the recommended budget is applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_clicks = 14;</code>
     */
    private $recommended_budget_estimated_change_weekly_clicks = null;
    /**
     * The estimated change in weekly cost in micros if the recommended budget is
     * applied. One million is equivalent to one currency unit.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_cost_micros = 15;</code>
     */
    private $recommended_budget_estimated_change_weekly_cost_micros = null;
    /**
     * The estimated change in weekly interactions if the recommended budget is
     * applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_interactions = 16;</code>
     */
    private $recommended_budget_estimated_change_weekly_interactions = null;
    /**
     * The estimated change in weekly views if the recommended budget is applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_views = 17;</code>
     */
    private $recommended_budget_estimated_change_weekly_views = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the campaign budget.
     *           Campaign budget resource names have the form:
     *           `customers/{customer_id}/campaignBudgets/{budget_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the campaign budget.
     *           A campaign budget is created using the CampaignBudgetService create
     *           operation and is assigned a budget ID. A budget ID can be shared across
     *           different campaigns; the system will then allocate the campaign budget
     *           among different campaigns to get optimum results.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the campaign budget.
     *           When creating a campaign budget through CampaignBudgetService, every
     *           explicitly shared campaign budget must have a non-null, non-empty name.
     *           Campaign budgets that are not explicitly shared derive their name from the
     *           attached campaign's name.
     *           The length of this string must be between 1 and 255, inclusive,
     *           in UTF-8 bytes, (trimmed).
     *     @type \Google\Protobuf\Int64Value $amount_micros
     *           The amount of the budget, in the local currency for the account.
     *           Amount is specified in micros, where one million is equivalent to one
     *           currency unit.
     *     @type \Google\Protobuf\Int64Value $total_amount_micros
     *           The lifetime amount of the budget, in the local currency for the account.
     *           Amount is specified in micros, where one million is equivalent to one
     *           currency unit.
     *     @type int $status
     *           The status of this campaign budget. This field is read-only.
     *     @type int $delivery_method
     *           The delivery method that determines the rate at which the campaign budget
     *           is spent.
     *           Defaults to STANDARD if unspecified in a create operation.
     *     @type \Google\Protobuf\BoolValue $explicitly_shared
     *           Specifies whether the budget is explicitly shared. Defaults to true if
     *           unspecified in a create operation.
     *           If true, the budget was created with the purpose of sharing
     *           across one or more campaigns.
     *           If false, the budget was created with the intention of only being used
     *           with a single campaign. The budget's name and status will stay in sync
     *           with the campaign's name and status. Attempting to share the budget with a
     *           second campaign will result in an error.
     *           A non-shared budget can become an explicitly shared. The same operation
     *           must
     *           also assign the budget a name.
     *           A shared campaign budget can never become non-shared.
     *     @type \Google\Protobuf\Int64Value $reference_count
     *           The number of campaigns actively using the budget.
     *           This field is read-only.
     *     @type \Google\Protobuf\BoolValue $has_recommended_budget
     *           Indicates whether there is a recommended budget for this campaign budget.
     *           This field is read-only.
     *     @type \Google\Protobuf\Int64Value $recommended_budget_amount_micros
     *           The recommended budget amount. If no recommendation is available, this will
     *           be set to the budget amount.
     *           Amount is specified in micros, where one million is equivalent to one
     *           currency unit.
     *           This field is read-only.
     *     @type int $period
     *           Period over which to spend the budget. Defaults to DAILY if not specified.
     *     @type \Google\Protobuf\Int64Value $recommended_budget_estimated_change_weekly_clicks
     *           The estimated change in weekly clicks if the recommended budget is applied.
     *           This field is read-only.
     *     @type \Google\Protobuf\Int64Value $recommended_budget_estimated_change_weekly_cost_micros
     *           The estimated change in weekly cost in micros if the recommended budget is
     *           applied. One million is equivalent to one currency unit.
     *           This field is read-only.
     *     @type \Google\Protobuf\Int64Value $recommended_budget_estimated_change_weekly_interactions
     *           The estimated change in weekly interactions if the recommended budget is
     *           applied.
     *           This field is read-only.
     *     @type \Google\Protobuf\Int64Value $recommended_budget_estimated_change_weekly_views
     *           The estimated change in weekly views if the recommended budget is applied.
     *           This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CampaignBudget::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the campaign budget.
     * Campaign budget resource names have the form:
     * `customers/{customer_id}/campaignBudgets/{budget_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the campaign budget.
     * Campaign budget resource names have the form:
     * `customers/{customer_id}/campaignBudgets/{budget_id}`
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
     * The ID of the campaign budget.
     * A campaign budget is created using the CampaignBudgetService create
     * operation and is assigned a budget ID. A budget ID can be shared across
     * different campaigns; the system will then allocate the campaign budget
     * among different campaigns to get optimum results.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the campaign budget.
     * A campaign budget is created using the CampaignBudgetService create
     * operation and is assigned a budget ID. A budget ID can be shared across
     * different campaigns; the system will then allocate the campaign budget
     * among different campaigns to get optimum results.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the campaign budget.
     * When creating a campaign budget through CampaignBudgetService, every
     * explicitly shared campaign budget must have a non-null, non-empty name.
     * Campaign budgets that are not explicitly shared derive their name from the
     * attached campaign's name.
     * The length of this string must be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the campaign budget.
     * When creating a campaign budget through CampaignBudgetService, every
     * explicitly shared campaign budget must have a non-null, non-empty name.
     * Campaign budgets that are not explicitly shared derive their name from the
     * attached campaign's name.
     * The length of this string must be between 1 and 255, inclusive,
     * in UTF-8 bytes, (trimmed).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAmountMicros()
    {
        return $this->amount_micros;
    }

    /**
     * The amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value amount_micros = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->amount_micros = $var;

        return $this;
    }

    /**
     * The lifetime amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 10;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTotalAmountMicros()
    {
        return $this->total_amount_micros;
    }

    /**
     * The lifetime amount of the budget, in the local currency for the account.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value total_amount_micros = 10;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTotalAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->total_amount_micros = $var;

        return $this;
    }

    /**
     * The status of this campaign budget. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetStatusEnum.BudgetStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this campaign budget. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetStatusEnum.BudgetStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\BudgetStatusEnum_BudgetStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The delivery method that determines the rate at which the campaign budget
     * is spent.
     * Defaults to STANDARD if unspecified in a create operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetDeliveryMethodEnum.BudgetDeliveryMethod delivery_method = 7;</code>
     * @return int
     */
    public function getDeliveryMethod()
    {
        return $this->delivery_method;
    }

    /**
     * The delivery method that determines the rate at which the campaign budget
     * is spent.
     * Defaults to STANDARD if unspecified in a create operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetDeliveryMethodEnum.BudgetDeliveryMethod delivery_method = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDeliveryMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\BudgetDeliveryMethodEnum_BudgetDeliveryMethod::class);
        $this->delivery_method = $var;

        return $this;
    }

    /**
     * Specifies whether the budget is explicitly shared. Defaults to true if
     * unspecified in a create operation.
     * If true, the budget was created with the purpose of sharing
     * across one or more campaigns.
     * If false, the budget was created with the intention of only being used
     * with a single campaign. The budget's name and status will stay in sync
     * with the campaign's name and status. Attempting to share the budget with a
     * second campaign will result in an error.
     * A non-shared budget can become an explicitly shared. The same operation
     * must
     * also assign the budget a name.
     * A shared campaign budget can never become non-shared.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue explicitly_shared = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getExplicitlyShared()
    {
        return $this->explicitly_shared;
    }

    /**
     * Specifies whether the budget is explicitly shared. Defaults to true if
     * unspecified in a create operation.
     * If true, the budget was created with the purpose of sharing
     * across one or more campaigns.
     * If false, the budget was created with the intention of only being used
     * with a single campaign. The budget's name and status will stay in sync
     * with the campaign's name and status. Attempting to share the budget with a
     * second campaign will result in an error.
     * A non-shared budget can become an explicitly shared. The same operation
     * must
     * also assign the budget a name.
     * A shared campaign budget can never become non-shared.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue explicitly_shared = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setExplicitlyShared($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->explicitly_shared = $var;

        return $this;
    }

    /**
     * The number of campaigns actively using the budget.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reference_count = 9;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getReferenceCount()
    {
        return $this->reference_count;
    }

    /**
     * The number of campaigns actively using the budget.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reference_count = 9;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setReferenceCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->reference_count = $var;

        return $this;
    }

    /**
     * Indicates whether there is a recommended budget for this campaign budget.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_recommended_budget = 11;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHasRecommendedBudget()
    {
        return $this->has_recommended_budget;
    }

    /**
     * Indicates whether there is a recommended budget for this campaign budget.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue has_recommended_budget = 11;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHasRecommendedBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->has_recommended_budget = $var;

        return $this;
    }

    /**
     * The recommended budget amount. If no recommendation is available, this will
     * be set to the budget amount.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 12;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedBudgetAmountMicros()
    {
        return $this->recommended_budget_amount_micros;
    }

    /**
     * The recommended budget amount. If no recommendation is available, this will
     * be set to the budget amount.
     * Amount is specified in micros, where one million is equivalent to one
     * currency unit.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 12;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedBudgetAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Period over which to spend the budget. Defaults to DAILY if not specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetPeriodEnum.BudgetPeriod period = 13;</code>
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Period over which to spend the budget. Defaults to DAILY if not specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BudgetPeriodEnum.BudgetPeriod period = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriod($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\BudgetPeriodEnum_BudgetPeriod::class);
        $this->period = $var;

        return $this;
    }

    /**
     * The estimated change in weekly clicks if the recommended budget is applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_clicks = 14;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedBudgetEstimatedChangeWeeklyClicks()
    {
        return $this->recommended_budget_estimated_change_weekly_clicks;
    }

    /**
     * The estimated change in weekly clicks if the recommended budget is applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_clicks = 14;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedBudgetEstimatedChangeWeeklyClicks($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_budget_estimated_change_weekly_clicks = $var;

        return $this;
    }

    /**
     * The estimated change in weekly cost in micros if the recommended budget is
     * applied. One million is equivalent to one currency unit.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_cost_micros = 15;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedBudgetEstimatedChangeWeeklyCostMicros()
    {
        return $this->recommended_budget_estimated_change_weekly_cost_micros;
    }

    /**
     * The estimated change in weekly cost in micros if the recommended budget is
     * applied. One million is equivalent to one currency unit.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_cost_micros = 15;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedBudgetEstimatedChangeWeeklyCostMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_budget_estimated_change_weekly_cost_micros = $var;

        return $this;
    }

    /**
     * The estimated change in weekly interactions if the recommended budget is
     * applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_interactions = 16;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedBudgetEstimatedChangeWeeklyInteractions()
    {
        return $this->recommended_budget_estimated_change_weekly_interactions;
    }

    /**
     * The estimated change in weekly interactions if the recommended budget is
     * applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_interactions = 16;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedBudgetEstimatedChangeWeeklyInteractions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_budget_estimated_change_weekly_interactions = $var;

        return $this;
    }

    /**
     * The estimated change in weekly views if the recommended budget is applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_views = 17;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedBudgetEstimatedChangeWeeklyViews()
    {
        return $this->recommended_budget_estimated_change_weekly_views;
    }

    /**
     * The estimated change in weekly views if the recommended budget is applied.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_estimated_change_weekly_views = 17;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedBudgetEstimatedChangeWeeklyViews($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_budget_estimated_change_weekly_views = $var;

        return $this;
    }

}

