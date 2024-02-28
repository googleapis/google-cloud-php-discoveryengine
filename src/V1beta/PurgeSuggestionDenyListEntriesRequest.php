<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/purge_config.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CompletionService.PurgeSuggestionDenyListEntries][google.cloud.discoveryengine.v1beta.CompletionService.PurgeSuggestionDenyListEntries]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.PurgeSuggestionDenyListEntriesRequest</code>
 */
class PurgeSuggestionDenyListEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent data store resource name for which to import denylist
     * entries. Follows pattern projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent data store resource name for which to import denylist
     *           entries. Follows pattern projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\PurgeConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent data store resource name for which to import denylist
     * entries. Follows pattern projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent data store resource name for which to import denylist
     * entries. Follows pattern projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}
