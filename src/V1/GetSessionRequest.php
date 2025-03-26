<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for GetSession method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.GetSessionRequest</code>
 */
class GetSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Session to get. Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. If set to true, the full session including all answer details
     * will be returned.
     *
     * Generated from protobuf field <code>bool include_answer_details = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $include_answer_details = false;

    /**
     * @param string $name Required. The resource name of the Session to get. Format:
     *                     `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *                     Please see {@see ConversationalSearchServiceClient::sessionName()} for help formatting this field.
     *
     * @return \Google\Cloud\DiscoveryEngine\V1\GetSessionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Session to get. Format:
     *           `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *     @type bool $include_answer_details
     *           Optional. If set to true, the full session including all answer details
     *           will be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Session to get. Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Session to get. Format:
     * `projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store_id}/sessions/{session_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. If set to true, the full session including all answer details
     * will be returned.
     *
     * Generated from protobuf field <code>bool include_answer_details = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIncludeAnswerDetails()
    {
        return $this->include_answer_details;
    }

    /**
     * Optional. If set to true, the full session including all answer details
     * will be returned.
     *
     * Generated from protobuf field <code>bool include_answer_details = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeAnswerDetails($var)
    {
        GPBUtil::checkBool($var);
        $this->include_answer_details = $var;

        return $this;
    }

}

