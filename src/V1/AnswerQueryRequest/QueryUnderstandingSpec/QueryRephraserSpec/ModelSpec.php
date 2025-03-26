<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryRephraserSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query Rephraser Model specification.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec.ModelSpec</code>
 */
class ModelSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Enabled query rephraser model type. If not set, it will use
     * LARGE by default.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec.ModelSpec.ModelType model_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $model_type
     *           Optional. Enabled query rephraser model type. If not set, it will use
     *           LARGE by default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Enabled query rephraser model type. If not set, it will use
     * LARGE by default.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec.ModelSpec.ModelType model_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getModelType()
    {
        return $this->model_type;
    }

    /**
     * Optional. Enabled query rephraser model type. If not set, it will use
     * LARGE by default.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec.ModelSpec.ModelType model_type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setModelType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec\QueryRephraserSpec\ModelSpec\ModelType::class);
        $this->model_type = $var;

        return $this;
    }

}


