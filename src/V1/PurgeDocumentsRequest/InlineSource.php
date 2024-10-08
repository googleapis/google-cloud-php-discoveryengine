<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/purge_config.proto

namespace Google\Cloud\DiscoveryEngine\V1\PurgeDocumentsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The inline source for the input config for
 * [DocumentService.PurgeDocuments][google.cloud.discoveryengine.v1.DocumentService.PurgeDocuments]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.PurgeDocumentsRequest.InlineSource</code>
 */
class InlineSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of full resource name of documents to purge. In the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     * Recommended max of 100 items.
     *
     * Generated from protobuf field <code>repeated string documents = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $documents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $documents
     *           Required. A list of full resource name of documents to purge. In the
     *           format
     *           `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     *           Recommended max of 100 items.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\PurgeConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of full resource name of documents to purge. In the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     * Recommended max of 100 items.
     *
     * Generated from protobuf field <code>repeated string documents = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Required. A list of full resource name of documents to purge. In the
     * format
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;branches/&#42;&#47;documents/&#42;`.
     * Recommended max of 100 items.
     *
     * Generated from protobuf field <code>repeated string documents = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->documents = $arr;

        return $this;
    }

}


