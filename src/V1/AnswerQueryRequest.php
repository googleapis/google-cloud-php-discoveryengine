<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ConversationalSearchService.AnswerQuery][google.cloud.discoveryengine.v1.ConversationalSearchService.AnswerQuery]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest</code>
 */
class AnswerQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     * or
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $serving_config = '';
    /**
     * Required. Current user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Query query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = null;
    /**
     * The session resource name. Not required.
     * When session field is not set, the API is in sessionless mode.
     * We support auto session mode: users can use the wildcard symbol `-` as
     * session ID.  A new ID will be automatically generated and assigned.
     *
     * Generated from protobuf field <code>string session = 3 [(.google.api.resource_reference) = {</code>
     */
    protected $session = '';
    /**
     * Model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SafetySpec safety_spec = 4;</code>
     */
    protected $safety_spec = null;
    /**
     * Related questions specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.RelatedQuestionsSpec related_questions_spec = 5;</code>
     */
    protected $related_questions_spec = null;
    /**
     * Optional. Grounding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.GroundingSpec grounding_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $grounding_spec = null;
    /**
     * Answer generation specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.AnswerGenerationSpec answer_generation_spec = 7;</code>
     */
    protected $answer_generation_spec = null;
    /**
     * Search specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec search_spec = 8;</code>
     */
    protected $search_spec = null;
    /**
     * Query understanding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec query_understanding_spec = 9;</code>
     */
    protected $query_understanding_spec = null;
    /**
     * Deprecated: This field is deprecated. Streaming Answer API will be
     * supported.
     * Asynchronous mode control.
     * If enabled, the response will be returned with answer/session resource
     * name without final answer. The API users need to do the polling to get
     * the latest status of answer/session by calling
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     * or
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     * method.
     *
     * Generated from protobuf field <code>bool asynchronous_mode = 10 [deprecated = true];</code>
     * @deprecated
     */
    protected $asynchronous_mode = false;
    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 12;</code>
     */
    protected $user_pseudo_id = '';
    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Google Cloud
     * Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 13;</code>
     */
    private $user_labels;
    /**
     * Optional. End user specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.EndUserSpec end_user_spec = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $end_user_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serving_config
     *           Required. The resource name of the Search serving config, such as
     *           `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     *           or
     *           `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     *           This field is used to identify the serving configuration name, set
     *           of models used to make the search.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Query $query
     *           Required. Current user query.
     *     @type string $session
     *           The session resource name. Not required.
     *           When session field is not set, the API is in sessionless mode.
     *           We support auto session mode: users can use the wildcard symbol `-` as
     *           session ID.  A new ID will be automatically generated and assigned.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SafetySpec $safety_spec
     *           Model specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\RelatedQuestionsSpec $related_questions_spec
     *           Related questions specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\GroundingSpec $grounding_spec
     *           Optional. Grounding specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\AnswerGenerationSpec $answer_generation_spec
     *           Answer generation specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec $search_spec
     *           Search specification.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec $query_understanding_spec
     *           Query understanding specification.
     *     @type bool $asynchronous_mode
     *           Deprecated: This field is deprecated. Streaming Answer API will be
     *           supported.
     *           Asynchronous mode control.
     *           If enabled, the response will be returned with answer/session resource
     *           name without final answer. The API users need to do the polling to get
     *           the latest status of answer/session by calling
     *           [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     *           or
     *           [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     *           method.
     *     @type string $user_pseudo_id
     *           A unique identifier for tracking visitors. For example, this could be
     *           implemented with an HTTP cookie, which should be able to uniquely identify
     *           a visitor on a single device. This unique identifier should not change if
     *           the visitor logs in or out of the website.
     *           This field should NOT have a fixed value such as `unknown_visitor`.
     *           The field must be a UTF-8 encoded string with a length limit of 128
     *           characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *     @type array|\Google\Protobuf\Internal\MapField $user_labels
     *           The user labels applied to a resource must meet the following requirements:
     *           * Each resource can have multiple labels, up to a maximum of 64.
     *           * Each label must be a key-value pair.
     *           * Keys have a minimum length of 1 character and a maximum length of 63
     *             characters and cannot be empty. Values can be empty and have a maximum
     *             length of 63 characters.
     *           * Keys and values can contain only lowercase letters, numeric characters,
     *             underscores, and dashes. All characters must use UTF-8 encoding, and
     *             international characters are allowed.
     *           * The key portion of a label must be unique. However, you can use the same
     *             key with multiple resources.
     *           * Keys must start with a lowercase letter or international character.
     *           See [Google Cloud
     *           Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     *           for more details.
     *     @type \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\EndUserSpec $end_user_spec
     *           Optional. End user specification.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     * or
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServingConfig()
    {
        return $this->serving_config;
    }

    /**
     * Required. The resource name of the Search serving config, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/engines/&#42;&#47;servingConfigs/default_serving_config`,
     * or
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/&#42;&#47;servingConfigs/default_serving_config`.
     * This field is used to identify the serving configuration name, set
     * of models used to make the search.
     *
     * Generated from protobuf field <code>string serving_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServingConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_config = $var;

        return $this;
    }

    /**
     * Required. Current user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Query query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Current user query.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Query query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The session resource name. Not required.
     * When session field is not set, the API is in sessionless mode.
     * We support auto session mode: users can use the wildcard symbol `-` as
     * session ID.  A new ID will be automatically generated and assigned.
     *
     * Generated from protobuf field <code>string session = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * The session resource name. Not required.
     * When session field is not set, the API is in sessionless mode.
     * We support auto session mode: users can use the wildcard symbol `-` as
     * session ID.  A new ID will be automatically generated and assigned.
     *
     * Generated from protobuf field <code>string session = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SafetySpec safety_spec = 4;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SafetySpec|null
     */
    public function getSafetySpec()
    {
        return $this->safety_spec;
    }

    public function hasSafetySpec()
    {
        return isset($this->safety_spec);
    }

    public function clearSafetySpec()
    {
        unset($this->safety_spec);
    }

    /**
     * Model specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SafetySpec safety_spec = 4;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SafetySpec $var
     * @return $this
     */
    public function setSafetySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SafetySpec::class);
        $this->safety_spec = $var;

        return $this;
    }

    /**
     * Related questions specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.RelatedQuestionsSpec related_questions_spec = 5;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\RelatedQuestionsSpec|null
     */
    public function getRelatedQuestionsSpec()
    {
        return $this->related_questions_spec;
    }

    public function hasRelatedQuestionsSpec()
    {
        return isset($this->related_questions_spec);
    }

    public function clearRelatedQuestionsSpec()
    {
        unset($this->related_questions_spec);
    }

    /**
     * Related questions specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.RelatedQuestionsSpec related_questions_spec = 5;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\RelatedQuestionsSpec $var
     * @return $this
     */
    public function setRelatedQuestionsSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\RelatedQuestionsSpec::class);
        $this->related_questions_spec = $var;

        return $this;
    }

    /**
     * Optional. Grounding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.GroundingSpec grounding_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\GroundingSpec|null
     */
    public function getGroundingSpec()
    {
        return $this->grounding_spec;
    }

    public function hasGroundingSpec()
    {
        return isset($this->grounding_spec);
    }

    public function clearGroundingSpec()
    {
        unset($this->grounding_spec);
    }

    /**
     * Optional. Grounding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.GroundingSpec grounding_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\GroundingSpec $var
     * @return $this
     */
    public function setGroundingSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\GroundingSpec::class);
        $this->grounding_spec = $var;

        return $this;
    }

    /**
     * Answer generation specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.AnswerGenerationSpec answer_generation_spec = 7;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\AnswerGenerationSpec|null
     */
    public function getAnswerGenerationSpec()
    {
        return $this->answer_generation_spec;
    }

    public function hasAnswerGenerationSpec()
    {
        return isset($this->answer_generation_spec);
    }

    public function clearAnswerGenerationSpec()
    {
        unset($this->answer_generation_spec);
    }

    /**
     * Answer generation specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.AnswerGenerationSpec answer_generation_spec = 7;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\AnswerGenerationSpec $var
     * @return $this
     */
    public function setAnswerGenerationSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\AnswerGenerationSpec::class);
        $this->answer_generation_spec = $var;

        return $this;
    }

    /**
     * Search specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec search_spec = 8;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec|null
     */
    public function getSearchSpec()
    {
        return $this->search_spec;
    }

    public function hasSearchSpec()
    {
        return isset($this->search_spec);
    }

    public function clearSearchSpec()
    {
        unset($this->search_spec);
    }

    /**
     * Search specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec search_spec = 8;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec $var
     * @return $this
     */
    public function setSearchSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec::class);
        $this->search_spec = $var;

        return $this;
    }

    /**
     * Query understanding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec query_understanding_spec = 9;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec|null
     */
    public function getQueryUnderstandingSpec()
    {
        return $this->query_understanding_spec;
    }

    public function hasQueryUnderstandingSpec()
    {
        return isset($this->query_understanding_spec);
    }

    public function clearQueryUnderstandingSpec()
    {
        unset($this->query_understanding_spec);
    }

    /**
     * Query understanding specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec query_understanding_spec = 9;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec $var
     * @return $this
     */
    public function setQueryUnderstandingSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\QueryUnderstandingSpec::class);
        $this->query_understanding_spec = $var;

        return $this;
    }

    /**
     * Deprecated: This field is deprecated. Streaming Answer API will be
     * supported.
     * Asynchronous mode control.
     * If enabled, the response will be returned with answer/session resource
     * name without final answer. The API users need to do the polling to get
     * the latest status of answer/session by calling
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     * or
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     * method.
     *
     * Generated from protobuf field <code>bool asynchronous_mode = 10 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getAsynchronousMode()
    {
        @trigger_error('asynchronous_mode is deprecated.', E_USER_DEPRECATED);
        return $this->asynchronous_mode;
    }

    /**
     * Deprecated: This field is deprecated. Streaming Answer API will be
     * supported.
     * Asynchronous mode control.
     * If enabled, the response will be returned with answer/session resource
     * name without final answer. The API users need to do the polling to get
     * the latest status of answer/session by calling
     * [ConversationalSearchService.GetAnswer][google.cloud.discoveryengine.v1.ConversationalSearchService.GetAnswer]
     * or
     * [ConversationalSearchService.GetSession][google.cloud.discoveryengine.v1.ConversationalSearchService.GetSession]
     * method.
     *
     * Generated from protobuf field <code>bool asynchronous_mode = 10 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setAsynchronousMode($var)
    {
        @trigger_error('asynchronous_mode is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->asynchronous_mode = $var;

        return $this;
    }

    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 12;</code>
     * @return string
     */
    public function getUserPseudoId()
    {
        return $this->user_pseudo_id;
    }

    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an  `INVALID_ARGUMENT`  error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setUserPseudoId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_pseudo_id = $var;

        return $this;
    }

    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Google Cloud
     * Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 13;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getUserLabels()
    {
        return $this->user_labels;
    }

    /**
     * The user labels applied to a resource must meet the following requirements:
     * * Each resource can have multiple labels, up to a maximum of 64.
     * * Each label must be a key-value pair.
     * * Keys have a minimum length of 1 character and a maximum length of 63
     *   characters and cannot be empty. Values can be empty and have a maximum
     *   length of 63 characters.
     * * Keys and values can contain only lowercase letters, numeric characters,
     *   underscores, and dashes. All characters must use UTF-8 encoding, and
     *   international characters are allowed.
     * * The key portion of a label must be unique. However, you can use the same
     *   key with multiple resources.
     * * Keys must start with a lowercase letter or international character.
     * See [Google Cloud
     * Document](https://cloud.google.com/resource-manager/docs/creating-managing-labels#requirements)
     * for more details.
     *
     * Generated from protobuf field <code>map<string, string> user_labels = 13;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_labels = $arr;

        return $this;
    }

    /**
     * Optional. End user specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.EndUserSpec end_user_spec = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\EndUserSpec|null
     */
    public function getEndUserSpec()
    {
        return $this->end_user_spec;
    }

    public function hasEndUserSpec()
    {
        return isset($this->end_user_spec);
    }

    public function clearEndUserSpec()
    {
        unset($this->end_user_spec);
    }

    /**
     * Optional. End user specification.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.AnswerQueryRequest.EndUserSpec end_user_spec = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\EndUserSpec $var
     * @return $this
     */
    public function setEndUserSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\EndUserSpec::class);
        $this->end_user_spec = $var;

        return $this;
    }

}

