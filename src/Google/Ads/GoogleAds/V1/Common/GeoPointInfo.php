<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Geo point for proximity criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.GeoPointInfo</code>
 */
class GeoPointInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Micro degrees for the longitude.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value longitude_in_micro_degrees = 1;</code>
     */
    private $longitude_in_micro_degrees = null;
    /**
     * Micro degrees for the latitude.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value latitude_in_micro_degrees = 2;</code>
     */
    private $latitude_in_micro_degrees = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $longitude_in_micro_degrees
     *           Micro degrees for the longitude.
     *     @type \Google\Protobuf\Int32Value $latitude_in_micro_degrees
     *           Micro degrees for the latitude.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Micro degrees for the longitude.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value longitude_in_micro_degrees = 1;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getLongitudeInMicroDegrees()
    {
        return $this->longitude_in_micro_degrees;
    }

    /**
     * Micro degrees for the longitude.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value longitude_in_micro_degrees = 1;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setLongitudeInMicroDegrees($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->longitude_in_micro_degrees = $var;

        return $this;
    }

    /**
     * Micro degrees for the latitude.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value latitude_in_micro_degrees = 2;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getLatitudeInMicroDegrees()
    {
        return $this->latitude_in_micro_degrees;
    }

    /**
     * Micro degrees for the latitude.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value latitude_in_micro_degrees = 2;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setLatitudeInMicroDegrees($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->latitude_in_micro_degrees = $var;

        return $this;
    }

}

