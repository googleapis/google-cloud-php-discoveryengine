<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/grounded_generation_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [GroundedGenerationService.CheckGrounding][google.cloud.discoveryengine.v1.GroundedGenerationService.CheckGrounding]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.CheckGroundingRequest</code>
 */
class CheckGroundingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the grounding config, such as
     * `projects/&#42;&#47;locations/global/groundingConfigs/default_grounding_config`.
     *
     * Generated from protobuf field <code>string grounding_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $grounding_config = '';
    /**
     * Answer candidate to check. Can have a maximum length of 1024 characters.
     *
     * Generated from protobuf field <code>string answer_candidate = 2;</code>
     */
    protected $answer_candidate = '';
    /**
     * List of facts for the grounding check.
     * We support up to 200 facts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GroundingFact facts = 3;</code>
     */
    private $facts;
    /**
     * Configuration of the grounding check.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.CheckGroundingSpec grounding_spec = 4;</code>
     */
    protected $grounding_spec = null;
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
     * Generated from protobuf field <code>map<string, string> user_labels = 5;</code>
     */
    private $user_labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $grounding_config
     *           Required. The resource name of the grounding config, such as
     *           `projects/&#42;&#47;locations/global/groundingConfigs/default_grounding_config`.
     *     @type string $answer_candidate
     *           Answer candidate to check. Can have a maximum length of 1024 characters.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\GroundingFact>|\Google\Protobuf\Internal\RepeatedField $facts
     *           List of facts for the grounding check.
     *           We support up to 200 facts.
     *     @type \Google\Cloud\DiscoveryEngine\V1\CheckGroundingSpec $grounding_spec
     *           Configuration of the grounding check.
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
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\GroundedGenerationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the grounding config, such as
     * `projects/&#42;&#47;locations/global/groundingConfigs/default_grounding_config`.
     *
     * Generated from protobuf field <code>string grounding_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGroundingConfig()
    {
        return $this->grounding_config;
    }

    /**
     * Required. The resource name of the grounding config, such as
     * `projects/&#42;&#47;locations/global/groundingConfigs/default_grounding_config`.
     *
     * Generated from protobuf field <code>string grounding_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroundingConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->grounding_config = $var;

        return $this;
    }

    /**
     * Answer candidate to check. Can have a maximum length of 1024 characters.
     *
     * Generated from protobuf field <code>string answer_candidate = 2;</code>
     * @return string
     */
    public function getAnswerCandidate()
    {
        return $this->answer_candidate;
    }

    /**
     * Answer candidate to check. Can have a maximum length of 1024 characters.
     *
     * Generated from protobuf field <code>string answer_candidate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerCandidate($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_candidate = $var;

        return $this;
    }

    /**
     * List of facts for the grounding check.
     * We support up to 200 facts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GroundingFact facts = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFacts()
    {
        return $this->facts;
    }

    /**
     * List of facts for the grounding check.
     * We support up to 200 facts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.GroundingFact facts = 3;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\GroundingFact>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\GroundingFact::class);
        $this->facts = $arr;

        return $this;
    }

    /**
     * Configuration of the grounding check.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.CheckGroundingSpec grounding_spec = 4;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\CheckGroundingSpec|null
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
     * Configuration of the grounding check.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.CheckGroundingSpec grounding_spec = 4;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\CheckGroundingSpec $var
     * @return $this
     */
    public function setGroundingSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\CheckGroundingSpec::class);
        $this->grounding_spec = $var;

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
     * Generated from protobuf field <code>map<string, string> user_labels = 5;</code>
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
     * Generated from protobuf field <code>map<string, string> user_labels = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setUserLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_labels = $arr;

        return $this;
    }

}
