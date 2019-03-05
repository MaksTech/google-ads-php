<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/ad.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Ad</code>
 */
class Ad extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
     */
    private $id = null;
    /**
     * The list of possible final URLs after all cross-domain redirects for the
     * ad.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 2;</code>
     */
    private $final_urls;
    /**
     * The list of possible final mobile URLs after all cross-domain redirects
     * for the ad.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 16;</code>
     */
    private $final_mobile_urls;
    /**
     * The URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     */
    private $tracking_url_template = null;
    /**
     * The list of mappings that can be used to substitute custom parameter tags
     * in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.CustomParameter url_custom_parameters = 10;</code>
     */
    private $url_custom_parameters;
    /**
     * The URL that appears in the ad description for some ad formats.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_url = 4;</code>
     */
    private $display_url = null;
    /**
     * The type of ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AdTypeEnum.AdType type = 5;</code>
     */
    private $type = 0;
    /**
     * Indicates if this ad was automatically added by Google Ads and not by a
     * user. For example, this could happen when ads are automatically created as
     * suggestions for new ads based on knowledge of how existing ads are
     * performing.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue added_by_google_ads = 19;</code>
     */
    private $added_by_google_ads = null;
    /**
     * The device preference for the ad. You can only specify a preference for
     * mobile devices. When this preference is set the ad will be preferred over
     * other ads when being displayed on a mobile device. The ad can still be
     * displayed on other device types, e.g. if no other ads are available.
     * If unspecified (no device preference), all devices are targeted.
     * This is only supported by some ad types.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.DeviceEnum.Device device_preference = 20;</code>
     */
    private $device_preference = 0;
    /**
     * Additional URLs for the ad that are tagged with a unique identifier that
     * can be referenced from other fields in the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.UrlCollection url_collections = 26;</code>
     */
    private $url_collections;
    /**
     * The name of the ad. This is only used to be able to identify the ad. It
     * does not need to be unique and does not affect the served ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 23;</code>
     */
    private $name = null;
    /**
     * If this ad is system managed, then this field will indicate the source.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SystemManagedEntitySourceEnum.SystemManagedEntitySource system_managed_entity_source = 27;</code>
     */
    private $system_managed_entity_source = 0;
    protected $ad_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the ad.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           The list of possible final URLs after all cross-domain redirects for the
     *           ad.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           The list of possible final mobile URLs after all cross-domain redirects
     *           for the ad.
     *     @type \Google\Protobuf\StringValue $tracking_url_template
     *           The URL template for constructing a tracking URL.
     *     @type \Google\Ads\GoogleAds\V1\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           The list of mappings that can be used to substitute custom parameter tags
     *           in a
     *           `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *     @type \Google\Protobuf\StringValue $display_url
     *           The URL that appears in the ad description for some ad formats.
     *     @type int $type
     *           The type of ad.
     *     @type \Google\Protobuf\BoolValue $added_by_google_ads
     *           Indicates if this ad was automatically added by Google Ads and not by a
     *           user. For example, this could happen when ads are automatically created as
     *           suggestions for new ads based on knowledge of how existing ads are
     *           performing.
     *     @type int $device_preference
     *           The device preference for the ad. You can only specify a preference for
     *           mobile devices. When this preference is set the ad will be preferred over
     *           other ads when being displayed on a mobile device. The ad can still be
     *           displayed on other device types, e.g. if no other ads are available.
     *           If unspecified (no device preference), all devices are targeted.
     *           This is only supported by some ad types.
     *     @type \Google\Ads\GoogleAds\V1\Common\UrlCollection[]|\Google\Protobuf\Internal\RepeatedField $url_collections
     *           Additional URLs for the ad that are tagged with a unique identifier that
     *           can be referenced from other fields in the ad.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the ad. This is only used to be able to identify the ad. It
     *           does not need to be unique and does not affect the served ad.
     *     @type int $system_managed_entity_source
     *           If this ad is system managed, then this field will indicate the source.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V1\Common\TextAdInfo $text_ad
     *           Details pertaining to a text ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\ExpandedTextAdInfo $expanded_text_ad
     *           Details pertaining to an expanded text ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\CallOnlyAdInfo $call_only_ad
     *           Details pertaining to a call-only ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\ExpandedDynamicSearchAdInfo $expanded_dynamic_search_ad
     *           Details pertaining to an Expanded Dynamic Search Ad.
     *           This type of ad has its headline, final URLs, and display URL
     *           auto-generated at serving time according to domain name specific
     *           information provided by `dynamic_search_ads_setting` linked at the
     *           campaign level.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelAdInfo $hotel_ad
     *           Details pertaining to a hotel ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\ShoppingSmartAdInfo $shopping_smart_ad
     *           Details pertaining to a Smart Shopping ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\ShoppingProductAdInfo $shopping_product_ad
     *           Details pertaining to a Shopping product ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\GmailAdInfo $gmail_ad
     *           Details pertaining to a Gmail ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\ImageAdInfo $image_ad
     *           Details pertaining to an Image ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\VideoAdInfo $video_ad
     *           Details pertaining to a Video ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\ResponsiveSearchAdInfo $responsive_search_ad
     *           Details pertaining to a responsive search ad.
     *     @type \Google\Ads\GoogleAds\V1\Common\LegacyResponsiveDisplayAdInfo $legacy_responsive_display_ad
     *           Details pertaining to a legacy responsive display ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Ad::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 1;</code>
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
     * The list of possible final URLs after all cross-domain redirects for the
     * ad.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * The list of possible final URLs after all cross-domain redirects for the
     * ad.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 2;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * The list of possible final mobile URLs after all cross-domain redirects
     * for the ad.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * The list of possible final mobile URLs after all cross-domain redirects
     * for the ad.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 16;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * The URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return $this->tracking_url_template;
    }

    /**
     * The URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * The list of mappings that can be used to substitute custom parameter tags
     * in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.CustomParameter url_custom_parameters = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * The list of mappings that can be used to substitute custom parameter tags
     * in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.CustomParameter url_custom_parameters = 10;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * The URL that appears in the ad description for some ad formats.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_url = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDisplayUrl()
    {
        return $this->display_url;
    }

    /**
     * The URL that appears in the ad description for some ad formats.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_url = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDisplayUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->display_url = $var;

        return $this;
    }

    /**
     * The type of ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AdTypeEnum.AdType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.AdTypeEnum.AdType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\AdTypeEnum_AdType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Indicates if this ad was automatically added by Google Ads and not by a
     * user. For example, this could happen when ads are automatically created as
     * suggestions for new ads based on knowledge of how existing ads are
     * performing.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue added_by_google_ads = 19;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getAddedByGoogleAds()
    {
        return $this->added_by_google_ads;
    }

    /**
     * Indicates if this ad was automatically added by Google Ads and not by a
     * user. For example, this could happen when ads are automatically created as
     * suggestions for new ads based on knowledge of how existing ads are
     * performing.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue added_by_google_ads = 19;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAddedByGoogleAds($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->added_by_google_ads = $var;

        return $this;
    }

    /**
     * The device preference for the ad. You can only specify a preference for
     * mobile devices. When this preference is set the ad will be preferred over
     * other ads when being displayed on a mobile device. The ad can still be
     * displayed on other device types, e.g. if no other ads are available.
     * If unspecified (no device preference), all devices are targeted.
     * This is only supported by some ad types.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.DeviceEnum.Device device_preference = 20;</code>
     * @return int
     */
    public function getDevicePreference()
    {
        return $this->device_preference;
    }

    /**
     * The device preference for the ad. You can only specify a preference for
     * mobile devices. When this preference is set the ad will be preferred over
     * other ads when being displayed on a mobile device. The ad can still be
     * displayed on other device types, e.g. if no other ads are available.
     * If unspecified (no device preference), all devices are targeted.
     * This is only supported by some ad types.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.DeviceEnum.Device device_preference = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setDevicePreference($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\DeviceEnum_Device::class);
        $this->device_preference = $var;

        return $this;
    }

    /**
     * Additional URLs for the ad that are tagged with a unique identifier that
     * can be referenced from other fields in the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.UrlCollection url_collections = 26;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCollections()
    {
        return $this->url_collections;
    }

    /**
     * Additional URLs for the ad that are tagged with a unique identifier that
     * can be referenced from other fields in the ad.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.UrlCollection url_collections = 26;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\UrlCollection[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCollections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\UrlCollection::class);
        $this->url_collections = $arr;

        return $this;
    }

    /**
     * The name of the ad. This is only used to be able to identify the ad. It
     * does not need to be unique and does not affect the served ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 23;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the ad. This is only used to be able to identify the ad. It
     * does not need to be unique and does not affect the served ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 23;</code>
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
     * If this ad is system managed, then this field will indicate the source.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SystemManagedEntitySourceEnum.SystemManagedEntitySource system_managed_entity_source = 27;</code>
     * @return int
     */
    public function getSystemManagedEntitySource()
    {
        return $this->system_managed_entity_source;
    }

    /**
     * If this ad is system managed, then this field will indicate the source.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SystemManagedEntitySourceEnum.SystemManagedEntitySource system_managed_entity_source = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setSystemManagedEntitySource($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\SystemManagedEntitySourceEnum_SystemManagedEntitySource::class);
        $this->system_managed_entity_source = $var;

        return $this;
    }

    /**
     * Details pertaining to a text ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TextAdInfo text_ad = 6;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\TextAdInfo
     */
    public function getTextAd()
    {
        return $this->readOneof(6);
    }

    /**
     * Details pertaining to a text ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.TextAdInfo text_ad = 6;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\TextAdInfo $var
     * @return $this
     */
    public function setTextAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\TextAdInfo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Details pertaining to an expanded text ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ExpandedTextAdInfo expanded_text_ad = 7;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ExpandedTextAdInfo
     */
    public function getExpandedTextAd()
    {
        return $this->readOneof(7);
    }

    /**
     * Details pertaining to an expanded text ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ExpandedTextAdInfo expanded_text_ad = 7;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ExpandedTextAdInfo $var
     * @return $this
     */
    public function setExpandedTextAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ExpandedTextAdInfo::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Details pertaining to a call-only ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CallOnlyAdInfo call_only_ad = 13;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\CallOnlyAdInfo
     */
    public function getCallOnlyAd()
    {
        return $this->readOneof(13);
    }

    /**
     * Details pertaining to a call-only ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CallOnlyAdInfo call_only_ad = 13;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CallOnlyAdInfo $var
     * @return $this
     */
    public function setCallOnlyAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\CallOnlyAdInfo::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Details pertaining to an Expanded Dynamic Search Ad.
     * This type of ad has its headline, final URLs, and display URL
     * auto-generated at serving time according to domain name specific
     * information provided by `dynamic_search_ads_setting` linked at the
     * campaign level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ExpandedDynamicSearchAdInfo expanded_dynamic_search_ad = 14;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ExpandedDynamicSearchAdInfo
     */
    public function getExpandedDynamicSearchAd()
    {
        return $this->readOneof(14);
    }

    /**
     * Details pertaining to an Expanded Dynamic Search Ad.
     * This type of ad has its headline, final URLs, and display URL
     * auto-generated at serving time according to domain name specific
     * information provided by `dynamic_search_ads_setting` linked at the
     * campaign level.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ExpandedDynamicSearchAdInfo expanded_dynamic_search_ad = 14;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ExpandedDynamicSearchAdInfo $var
     * @return $this
     */
    public function setExpandedDynamicSearchAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ExpandedDynamicSearchAdInfo::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Details pertaining to a hotel ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelAdInfo hotel_ad = 15;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelAdInfo
     */
    public function getHotelAd()
    {
        return $this->readOneof(15);
    }

    /**
     * Details pertaining to a hotel ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelAdInfo hotel_ad = 15;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelAdInfo $var
     * @return $this
     */
    public function setHotelAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelAdInfo::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Details pertaining to a Smart Shopping ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ShoppingSmartAdInfo shopping_smart_ad = 17;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ShoppingSmartAdInfo
     */
    public function getShoppingSmartAd()
    {
        return $this->readOneof(17);
    }

    /**
     * Details pertaining to a Smart Shopping ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ShoppingSmartAdInfo shopping_smart_ad = 17;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ShoppingSmartAdInfo $var
     * @return $this
     */
    public function setShoppingSmartAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ShoppingSmartAdInfo::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Details pertaining to a Shopping product ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ShoppingProductAdInfo shopping_product_ad = 18;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ShoppingProductAdInfo
     */
    public function getShoppingProductAd()
    {
        return $this->readOneof(18);
    }

    /**
     * Details pertaining to a Shopping product ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ShoppingProductAdInfo shopping_product_ad = 18;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ShoppingProductAdInfo $var
     * @return $this
     */
    public function setShoppingProductAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ShoppingProductAdInfo::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Details pertaining to a Gmail ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.GmailAdInfo gmail_ad = 21;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\GmailAdInfo
     */
    public function getGmailAd()
    {
        return $this->readOneof(21);
    }

    /**
     * Details pertaining to a Gmail ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.GmailAdInfo gmail_ad = 21;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\GmailAdInfo $var
     * @return $this
     */
    public function setGmailAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\GmailAdInfo::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Details pertaining to an Image ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ImageAdInfo image_ad = 22;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ImageAdInfo
     */
    public function getImageAd()
    {
        return $this->readOneof(22);
    }

    /**
     * Details pertaining to an Image ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ImageAdInfo image_ad = 22;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ImageAdInfo $var
     * @return $this
     */
    public function setImageAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ImageAdInfo::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * Details pertaining to a Video ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoAdInfo video_ad = 24;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\VideoAdInfo
     */
    public function getVideoAd()
    {
        return $this->readOneof(24);
    }

    /**
     * Details pertaining to a Video ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.VideoAdInfo video_ad = 24;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\VideoAdInfo $var
     * @return $this
     */
    public function setVideoAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\VideoAdInfo::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * Details pertaining to a responsive search ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ResponsiveSearchAdInfo responsive_search_ad = 25;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ResponsiveSearchAdInfo
     */
    public function getResponsiveSearchAd()
    {
        return $this->readOneof(25);
    }

    /**
     * Details pertaining to a responsive search ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ResponsiveSearchAdInfo responsive_search_ad = 25;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ResponsiveSearchAdInfo $var
     * @return $this
     */
    public function setResponsiveSearchAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ResponsiveSearchAdInfo::class);
        $this->writeOneof(25, $var);

        return $this;
    }

    /**
     * Details pertaining to a legacy responsive display ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LegacyResponsiveDisplayAdInfo legacy_responsive_display_ad = 28;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\LegacyResponsiveDisplayAdInfo
     */
    public function getLegacyResponsiveDisplayAd()
    {
        return $this->readOneof(28);
    }

    /**
     * Details pertaining to a legacy responsive display ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.LegacyResponsiveDisplayAdInfo legacy_responsive_display_ad = 28;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\LegacyResponsiveDisplayAdInfo $var
     * @return $this
     */
    public function setLegacyResponsiveDisplayAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\LegacyResponsiveDisplayAdInfo::class);
        $this->writeOneof(28, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAdData()
    {
        return $this->whichOneof("ad_data");
    }

}

