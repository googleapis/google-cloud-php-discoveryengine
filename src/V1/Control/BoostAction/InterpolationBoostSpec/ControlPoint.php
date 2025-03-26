<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/control.proto

namespace Google\Cloud\DiscoveryEngine\V1\Control\BoostAction\InterpolationBoostSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The control points used to define the curve. The curve defined
 * through these control points can only be monotonically increasing
 * or decreasing(constant values are acceptable).
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Control.BoostAction.InterpolationBoostSpec.ControlPoint</code>
 */
class ControlPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Can be one of:
     * 1. The numerical field value.
     * 2. The duration spec for freshness:
     * The value must be formatted as an XSD `dayTimeDuration` value (a
     * restricted subset of an ISO 8601 duration value). The pattern for
     * this is: `[nD][T[nH][nM][nS]]`.
     *
     * Generated from protobuf field <code>string attribute_value = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $attribute_value = '';
    /**
     * Optional. The value between -1 to 1 by which to boost the score if
     * the attribute_value evaluates to the value specified above.
     *
     * Generated from protobuf field <code>float boost_amount = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $boost_amount = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $attribute_value
     *           Optional. Can be one of:
     *           1. The numerical field value.
     *           2. The duration spec for freshness:
     *           The value must be formatted as an XSD `dayTimeDuration` value (a
     *           restricted subset of an ISO 8601 duration value). The pattern for
     *           this is: `[nD][T[nH][nM][nS]]`.
     *     @type float $boost_amount
     *           Optional. The value between -1 to 1 by which to boost the score if
     *           the attribute_value evaluates to the value specified above.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Can be one of:
     * 1. The numerical field value.
     * 2. The duration spec for freshness:
     * The value must be formatted as an XSD `dayTimeDuration` value (a
     * restricted subset of an ISO 8601 duration value). The pattern for
     * this is: `[nD][T[nH][nM][nS]]`.
     *
     * Generated from protobuf field <code>string attribute_value = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAttributeValue()
    {
        return $this->attribute_value;
    }

    /**
     * Optional. Can be one of:
     * 1. The numerical field value.
     * 2. The duration spec for freshness:
     * The value must be formatted as an XSD `dayTimeDuration` value (a
     * restricted subset of an ISO 8601 duration value). The pattern for
     * this is: `[nD][T[nH][nM][nS]]`.
     *
     * Generated from protobuf field <code>string attribute_value = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAttributeValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->attribute_value = $var;

        return $this;
    }

    /**
     * Optional. The value between -1 to 1 by which to boost the score if
     * the attribute_value evaluates to the value specified above.
     *
     * Generated from protobuf field <code>float boost_amount = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getBoostAmount()
    {
        return $this->boost_amount;
    }

    /**
     * Optional. The value between -1 to 1 by which to boost the score if
     * the attribute_value evaluates to the value specified above.
     *
     * Generated from protobuf field <code>float boost_amount = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setBoostAmount($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost_amount = $var;

        return $this;
    }

}


