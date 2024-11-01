<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [DocumentService.BatchGetDocumentsMetadata][google.cloud.discoveryengine.v1.DocumentService.BatchGetDocumentsMetadata]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse</code>
 */
class BatchGetDocumentsMetadataResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The metadata of the [Document][google.cloud.discoveryengine.v1.Document]s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse.DocumentMetadata documents_metadata = 1;</code>
     */
    private $documents_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\BatchGetDocumentsMetadataResponse\DocumentMetadata>|\Google\Protobuf\Internal\RepeatedField $documents_metadata
     *           The metadata of the [Document][google.cloud.discoveryengine.v1.Document]s.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\DocumentService::initOnce();
        parent::__construct($data);
    }

    /**
     * The metadata of the [Document][google.cloud.discoveryengine.v1.Document]s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse.DocumentMetadata documents_metadata = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocumentsMetadata()
    {
        return $this->documents_metadata;
    }

    /**
     * The metadata of the [Document][google.cloud.discoveryengine.v1.Document]s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse.DocumentMetadata documents_metadata = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\BatchGetDocumentsMetadataResponse\DocumentMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocumentsMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\BatchGetDocumentsMetadataResponse\DocumentMetadata::class);
        $this->documents_metadata = $arr;

        return $this;
    }

}
