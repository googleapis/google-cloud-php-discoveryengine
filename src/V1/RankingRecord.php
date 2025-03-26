<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/rank_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Record message for
 * [RankService.Rank][google.cloud.discoveryengine.v1.RankService.Rank] method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.RankingRecord</code>
 */
class RankingRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique ID to represent the record.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The title of the record. Empty by default.
     * At least one of
     * [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     * [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     * set otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * The content of the record. Empty by default.
     * At least one of
     * [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     * [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     * set otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string content = 3;</code>
     */
    protected $content = '';
    /**
     * The score of this record based on the given query and selected model.
     * The score will be rounded to 2 decimal places. If the score is close to 0,
     * it will be rounded to 0.0001 to avoid returning unset.
     *
     * Generated from protobuf field <code>float score = 4;</code>
     */
    protected $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique ID to represent the record.
     *     @type string $title
     *           The title of the record. Empty by default.
     *           At least one of
     *           [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     *           [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     *           set otherwise an INVALID_ARGUMENT error is thrown.
     *     @type string $content
     *           The content of the record. Empty by default.
     *           At least one of
     *           [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     *           [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     *           set otherwise an INVALID_ARGUMENT error is thrown.
     *     @type float $score
     *           The score of this record based on the given query and selected model.
     *           The score will be rounded to 2 decimal places. If the score is close to 0,
     *           it will be rounded to 0.0001 to avoid returning unset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\RankService::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique ID to represent the record.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique ID to represent the record.
     *
     * Generated from protobuf field <code>string id = 1;</code>
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
     * The title of the record. Empty by default.
     * At least one of
     * [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     * [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     * set otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The title of the record. Empty by default.
     * At least one of
     * [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     * [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     * set otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The content of the record. Empty by default.
     * At least one of
     * [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     * [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     * set otherwise an INVALID_ARGUMENT error is thrown.
     *
     * Generated from protobuf field <code>string content = 3;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The content of the record. Empty by default.
     * At least one of
     * [title][google.cloud.discoveryengine.v1.RankingRecord.title] or
     * [content][google.cloud.discoveryengine.v1.RankingRecord.content] should be
     * set otherwise an INVALID_ARGUMENT error is thrown.
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
     * The score of this record based on the given query and selected model.
     * The score will be rounded to 2 decimal places. If the score is close to 0,
     * it will be rounded to 0.0001 to avoid returning unset.
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * The score of this record based on the given query and selected model.
     * The score will be rounded to 2 decimal places. If the score is close to 0,
     * it will be rounded to 0.0001 to avoid returning unset.
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

