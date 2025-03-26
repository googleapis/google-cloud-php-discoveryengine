<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/session.proto

namespace Google\Cloud\DiscoveryEngine\V1\Session;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a turn, including a query from the user and a
 * answer from service.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Session.Turn</code>
 */
class Turn extends \Google\Protobuf\Internal\Message
{
    /**
     * The user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Query query = 1;</code>
     */
    protected $query = null;
    /**
     * The resource name of the answer to the user query.
     * Only set if the answer generation (/answer API call) happened in this
     * turn.
     *
     * Generated from protobuf field <code>string answer = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $answer = '';
    /**
     * Output only. In
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     * API, if
     * [GetSessionRequest.include_answer_details][google.cloud.discoveryengine.v1.GetSessionRequest.include_answer_details]
     * is set to true, this field will be populated when getting answer query
     * session.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer detailed_answer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $detailed_answer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\Query $query
     *           The user query.
     *     @type string $answer
     *           The resource name of the answer to the user query.
     *           Only set if the answer generation (/answer API call) happened in this
     *           turn.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Answer $detailed_answer
     *           Output only. In
     *           [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     *           API, if
     *           [GetSessionRequest.include_answer_details][google.cloud.discoveryengine.v1.GetSessionRequest.include_answer_details]
     *           is set to true, this field will be populated when getting answer query
     *           session.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * The user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Query query = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Query|null
     */
    public function getQuery()
    {
        return $this->query;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     * The user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Query query = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Query $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Query::class);
        $this->query = $var;

        return $this;
    }

    /**
     * The resource name of the answer to the user query.
     * Only set if the answer generation (/answer API call) happened in this
     * turn.
     *
     * Generated from protobuf field <code>string answer = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * The resource name of the answer to the user query.
     * Only set if the answer generation (/answer API call) happened in this
     * turn.
     *
     * Generated from protobuf field <code>string answer = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAnswer($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer = $var;

        return $this;
    }

    /**
     * Output only. In
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     * API, if
     * [GetSessionRequest.include_answer_details][google.cloud.discoveryengine.v1.GetSessionRequest.include_answer_details]
     * is set to true, this field will be populated when getting answer query
     * session.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer detailed_answer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Answer|null
     */
    public function getDetailedAnswer()
    {
        return $this->detailed_answer;
    }

    public function hasDetailedAnswer()
    {
        return isset($this->detailed_answer);
    }

    public function clearDetailedAnswer()
    {
        unset($this->detailed_answer);
    }

    /**
     * Output only. In
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     * API, if
     * [GetSessionRequest.include_answer_details][google.cloud.discoveryengine.v1.GetSessionRequest.include_answer_details]
     * is set to true, this field will be populated when getting answer query
     * session.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Answer detailed_answer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Answer $var
     * @return $this
     */
    public function setDetailedAnswer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Answer::class);
        $this->detailed_answer = $var;

        return $this;
    }

}


