<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\ContentSearchSpec;

use UnexpectedValueException;

/**
 * Specifies the search result mode. If unspecified, the
 * search result mode defaults to `DOCUMENTS`.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SearchResultMode</code>
 */
class SearchResultMode
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>SEARCH_RESULT_MODE_UNSPECIFIED = 0;</code>
     */
    const SEARCH_RESULT_MODE_UNSPECIFIED = 0;
    /**
     * Returns documents in the search result.
     *
     * Generated from protobuf enum <code>DOCUMENTS = 1;</code>
     */
    const DOCUMENTS = 1;
    /**
     * Returns chunks in the search result. Only available if the
     * [DocumentProcessingConfig.chunking_config][google.cloud.discoveryengine.v1.DocumentProcessingConfig.chunking_config]
     * is specified.
     *
     * Generated from protobuf enum <code>CHUNKS = 2;</code>
     */
    const CHUNKS = 2;

    private static $valueToName = [
        self::SEARCH_RESULT_MODE_UNSPECIFIED => 'SEARCH_RESULT_MODE_UNSPECIFIED',
        self::DOCUMENTS => 'DOCUMENTS',
        self::CHUNKS => 'CHUNKS',
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


