<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest;

use UnexpectedValueException;

/**
 * The relevance threshold of the search results. The higher relevance
 * threshold is, the higher relevant results are shown and the less number of
 * results are returned.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.SearchRequest.RelevanceThreshold</code>
 */
class RelevanceThreshold
{
    /**
     * Default value. In this case, server behavior defaults to Google defined
     * threshold.
     *
     * Generated from protobuf enum <code>RELEVANCE_THRESHOLD_UNSPECIFIED = 0;</code>
     */
    const RELEVANCE_THRESHOLD_UNSPECIFIED = 0;
    /**
     * Lowest relevance threshold.
     *
     * Generated from protobuf enum <code>LOWEST = 1;</code>
     */
    const LOWEST = 1;
    /**
     * Low relevance threshold.
     *
     * Generated from protobuf enum <code>LOW = 2;</code>
     */
    const LOW = 2;
    /**
     * Medium relevance threshold.
     *
     * Generated from protobuf enum <code>MEDIUM = 3;</code>
     */
    const MEDIUM = 3;
    /**
     * High relevance threshold.
     *
     * Generated from protobuf enum <code>HIGH = 4;</code>
     */
    const HIGH = 4;

    private static $valueToName = [
        self::RELEVANCE_THRESHOLD_UNSPECIFIED => 'RELEVANCE_THRESHOLD_UNSPECIFIED',
        self::LOWEST => 'LOWEST',
        self::LOW => 'LOW',
        self::MEDIUM => 'MEDIUM',
        self::HIGH => 'HIGH',
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


