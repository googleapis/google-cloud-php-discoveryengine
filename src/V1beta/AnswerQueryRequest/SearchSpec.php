<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Search specification.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec</code>
 */
class SearchSpec extends \Google\Protobuf\Internal\Message
{
    protected $input;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchParams $search_params
     *           Search parameters.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList $search_result_list
     *           Search result list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Search parameters.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchParams search_params = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchParams|null
     */
    public function getSearchParams()
    {
        return $this->readOneof(1);
    }

    public function hasSearchParams()
    {
        return $this->hasOneof(1);
    }

    /**
     * Search parameters.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchParams search_params = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchParams $var
     * @return $this
     */
    public function setSearchParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchParams::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Search result list.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList search_result_list = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList|null
     */
    public function getSearchResultList()
    {
        return $this->readOneof(2);
    }

    public function hasSearchResultList()
    {
        return $this->hasOneof(2);
    }

    /**
     * Search result list.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList search_result_list = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList $var
     * @return $this
     */
    public function setSearchResultList($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->whichOneof("input");
    }

}

