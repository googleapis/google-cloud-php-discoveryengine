<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document.proto

namespace Google\Cloud\DiscoveryEngine\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Index status of the document.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Document.IndexStatus</code>
 */
class IndexStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The time when the document was indexed.
     * If this field is populated, it means the document has been indexed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 1;</code>
     */
    protected $index_time = null;
    /**
     * A sample of errors encountered while indexing the document.
     * If this field is populated, the document is not indexed due to errors.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 2;</code>
     */
    private $error_samples;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $index_time
     *           The time when the document was indexed.
     *           If this field is populated, it means the document has been indexed.
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $error_samples
     *           A sample of errors encountered while indexing the document.
     *           If this field is populated, the document is not indexed due to errors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The time when the document was indexed.
     * If this field is populated, it means the document has been indexed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getIndexTime()
    {
        return $this->index_time;
    }

    public function hasIndexTime()
    {
        return isset($this->index_time);
    }

    public function clearIndexTime()
    {
        unset($this->index_time);
    }

    /**
     * The time when the document was indexed.
     * If this field is populated, it means the document has been indexed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIndexTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->index_time = $var;

        return $this;
    }

    /**
     * A sample of errors encountered while indexing the document.
     * If this field is populated, the document is not indexed due to errors.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorSamples()
    {
        return $this->error_samples;
    }

    /**
     * A sample of errors encountered while indexing the document.
     * If this field is populated, the document is not indexed due to errors.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 2;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorSamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->error_samples = $arr;

        return $this;
    }

}


