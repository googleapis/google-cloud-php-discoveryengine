<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\SearchAsYouTypeSpec;

use UnexpectedValueException;

/**
 * Enum describing under which condition search as you type should occur.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.SearchRequest.SearchAsYouTypeSpec.Condition</code>
 */
class Condition
{
    /**
     * Server behavior defaults to
     * [Condition.DISABLED][google.cloud.discoveryengine.v1.SearchRequest.SearchAsYouTypeSpec.Condition.DISABLED].
     *
     * Generated from protobuf enum <code>CONDITION_UNSPECIFIED = 0;</code>
     */
    const CONDITION_UNSPECIFIED = 0;
    /**
     * Disables Search As You Type.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Enables Search As You Type.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * Automatic switching between search-as-you-type and standard search
     * modes, ideal for single-API implementations (e.g., debouncing).
     *
     * Generated from protobuf enum <code>AUTO = 3;</code>
     */
    const AUTO = 3;

    private static $valueToName = [
        self::CONDITION_UNSPECIFIED => 'CONDITION_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::ENABLED => 'ENABLED',
        self::AUTO => 'AUTO',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


