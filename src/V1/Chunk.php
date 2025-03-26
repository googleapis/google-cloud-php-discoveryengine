<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/chunk.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Chunk captures all raw metadata information of items to be recommended or
 * searched in the chunk mode.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Chunk</code>
 */
class Chunk extends \Google\Protobuf\Internal\Message
{
    /**
     * The full resource name of the chunk.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document_id}/chunks/{chunk_id}`.
     * This field must be a UTF-8 encoded string with a length limit of 1024
     * characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Unique chunk ID of the current chunk.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * Content is a string from a document (parsed content).
     *
     * Generated from protobuf field <code>string content = 3;</code>
     */
    protected $content = '';
    /**
     * Output only. Represents the relevance score based on similarity.
     * Higher score indicates higher chunk relevance.
     * The score is in range [-1.0, 1.0].
     * Only populated on
     * [SearchResponse][google.cloud.discoveryengine.v1.SearchResponse].
     *
     * Generated from protobuf field <code>optional double relevance_score = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $relevance_score = null;
    /**
     * Metadata of the document from the current chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.DocumentMetadata document_metadata = 5;</code>
     */
    protected $document_metadata = null;
    /**
     * Output only. This field is OUTPUT_ONLY.
     * It contains derived data that are not in the original input document.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct derived_struct_data = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $derived_struct_data = null;
    /**
     * Page span of the chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.PageSpan page_span = 6;</code>
     */
    protected $page_span = null;
    /**
     * Output only. Metadata of the current chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.ChunkMetadata chunk_metadata = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $chunk_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The full resource name of the chunk.
     *           Format:
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document_id}/chunks/{chunk_id}`.
     *           This field must be a UTF-8 encoded string with a length limit of 1024
     *           characters.
     *     @type string $id
     *           Unique chunk ID of the current chunk.
     *     @type string $content
     *           Content is a string from a document (parsed content).
     *     @type float $relevance_score
     *           Output only. Represents the relevance score based on similarity.
     *           Higher score indicates higher chunk relevance.
     *           The score is in range [-1.0, 1.0].
     *           Only populated on
     *           [SearchResponse][google.cloud.discoveryengine.v1.SearchResponse].
     *     @type \Google\Cloud\DiscoveryEngine\V1\Chunk\DocumentMetadata $document_metadata
     *           Metadata of the document from the current chunk.
     *     @type \Google\Protobuf\Struct $derived_struct_data
     *           Output only. This field is OUTPUT_ONLY.
     *           It contains derived data that are not in the original input document.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Chunk\PageSpan $page_span
     *           Page span of the chunk.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Chunk\ChunkMetadata $chunk_metadata
     *           Output only. Metadata of the current chunk.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Chunk::initOnce();
        parent::__construct($data);
    }

    /**
     * The full resource name of the chunk.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document_id}/chunks/{chunk_id}`.
     * This field must be a UTF-8 encoded string with a length limit of 1024
     * characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The full resource name of the chunk.
     * Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/branches/{branch}/documents/{document_id}/chunks/{chunk_id}`.
     * This field must be a UTF-8 encoded string with a length limit of 1024
     * characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Unique chunk ID of the current chunk.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique chunk ID of the current chunk.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Content is a string from a document (parsed content).
     *
     * Generated from protobuf field <code>string content = 3;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Content is a string from a document (parsed content).
     *
     * Generated from protobuf field <code>string content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Output only. Represents the relevance score based on similarity.
     * Higher score indicates higher chunk relevance.
     * The score is in range [-1.0, 1.0].
     * Only populated on
     * [SearchResponse][google.cloud.discoveryengine.v1.SearchResponse].
     *
     * Generated from protobuf field <code>optional double relevance_score = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getRelevanceScore()
    {
        return isset($this->relevance_score) ? $this->relevance_score : 0.0;
    }

    public function hasRelevanceScore()
    {
        return isset($this->relevance_score);
    }

    public function clearRelevanceScore()
    {
        unset($this->relevance_score);
    }

    /**
     * Output only. Represents the relevance score based on similarity.
     * Higher score indicates higher chunk relevance.
     * The score is in range [-1.0, 1.0].
     * Only populated on
     * [SearchResponse][google.cloud.discoveryengine.v1.SearchResponse].
     *
     * Generated from protobuf field <code>optional double relevance_score = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setRelevanceScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->relevance_score = $var;

        return $this;
    }

    /**
     * Metadata of the document from the current chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.DocumentMetadata document_metadata = 5;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Chunk\DocumentMetadata|null
     */
    public function getDocumentMetadata()
    {
        return $this->document_metadata;
    }

    public function hasDocumentMetadata()
    {
        return isset($this->document_metadata);
    }

    public function clearDocumentMetadata()
    {
        unset($this->document_metadata);
    }

    /**
     * Metadata of the document from the current chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.DocumentMetadata document_metadata = 5;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Chunk\DocumentMetadata $var
     * @return $this
     */
    public function setDocumentMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Chunk\DocumentMetadata::class);
        $this->document_metadata = $var;

        return $this;
    }

    /**
     * Output only. This field is OUTPUT_ONLY.
     * It contains derived data that are not in the original input document.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct derived_struct_data = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getDerivedStructData()
    {
        return $this->derived_struct_data;
    }

    public function hasDerivedStructData()
    {
        return isset($this->derived_struct_data);
    }

    public function clearDerivedStructData()
    {
        unset($this->derived_struct_data);
    }

    /**
     * Output only. This field is OUTPUT_ONLY.
     * It contains derived data that are not in the original input document.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct derived_struct_data = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setDerivedStructData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->derived_struct_data = $var;

        return $this;
    }

    /**
     * Page span of the chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.PageSpan page_span = 6;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Chunk\PageSpan|null
     */
    public function getPageSpan()
    {
        return $this->page_span;
    }

    public function hasPageSpan()
    {
        return isset($this->page_span);
    }

    public function clearPageSpan()
    {
        unset($this->page_span);
    }

    /**
     * Page span of the chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.PageSpan page_span = 6;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Chunk\PageSpan $var
     * @return $this
     */
    public function setPageSpan($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Chunk\PageSpan::class);
        $this->page_span = $var;

        return $this;
    }

    /**
     * Output only. Metadata of the current chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.ChunkMetadata chunk_metadata = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Chunk\ChunkMetadata|null
     */
    public function getChunkMetadata()
    {
        return $this->chunk_metadata;
    }

    public function hasChunkMetadata()
    {
        return isset($this->chunk_metadata);
    }

    public function clearChunkMetadata()
    {
        unset($this->chunk_metadata);
    }

    /**
     * Output only. Metadata of the current chunk.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Chunk.ChunkMetadata chunk_metadata = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Chunk\ChunkMetadata $var
     * @return $this
     */
    public function setChunkMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Chunk\ChunkMetadata::class);
        $this->chunk_metadata = $var;

        return $this;
    }

}

