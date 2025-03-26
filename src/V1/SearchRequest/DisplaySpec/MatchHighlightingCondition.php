<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\DisplaySpec;

use UnexpectedValueException;

/**
 * Enum describing under which condition match highlighting should occur.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.SearchRequest.DisplaySpec.MatchHighlightingCondition</code>
 */
class MatchHighlightingCondition
{
    /**
     * Server behavior is the same as `MATCH_HIGHLIGHTING_DISABLED`.
     *
     * Generated from protobuf enum <code>MATCH_HIGHLIGHTING_CONDITION_UNSPECIFIED = 0;</code>
     */
    const MATCH_HIGHLIGHTING_CONDITION_UNSPECIFIED = 0;
    /**
     * Disables match highlighting on all documents.
     *
     * Generated from protobuf enum <code>MATCH_HIGHLIGHTING_DISABLED = 1;</code>
     */
    const MATCH_HIGHLIGHTING_DISABLED = 1;
    /**
     * Enables match highlighting on all documents.
     *
     * Generated from protobuf enum <code>MATCH_HIGHLIGHTING_ENABLED = 2;</code>
     */
    const MATCH_HIGHLIGHTING_ENABLED = 2;

    private static $valueToName = [
        self::MATCH_HIGHLIGHTING_CONDITION_UNSPECIFIED => 'MATCH_HIGHLIGHTING_CONDITION_UNSPECIFIED',
        self::MATCH_HIGHLIGHTING_DISABLED => 'MATCH_HIGHLIGHTING_DISABLED',
        self::MATCH_HIGHLIGHTING_ENABLED => 'MATCH_HIGHLIGHTING_ENABLED',
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


