<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/data_store.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration data for advance site search.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AdvancedSiteSearchConfig</code>
 */
class AdvancedSiteSearchConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If set true, initial indexing is disabled for the DataStore.
     *
     * Generated from protobuf field <code>optional bool disable_initial_index = 3;</code>
     */
    protected $disable_initial_index = null;
    /**
     * If set true, automatic refresh is disabled for the DataStore.
     *
     * Generated from protobuf field <code>optional bool disable_automatic_refresh = 4;</code>
     */
    protected $disable_automatic_refresh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $disable_initial_index
     *           If set true, initial indexing is disabled for the DataStore.
     *     @type bool $disable_automatic_refresh
     *           If set true, automatic refresh is disabled for the DataStore.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\DataStore::initOnce();
        parent::__construct($data);
    }

    /**
     * If set true, initial indexing is disabled for the DataStore.
     *
     * Generated from protobuf field <code>optional bool disable_initial_index = 3;</code>
     * @return bool
     */
    public function getDisableInitialIndex()
    {
        return isset($this->disable_initial_index) ? $this->disable_initial_index : false;
    }

    public function hasDisableInitialIndex()
    {
        return isset($this->disable_initial_index);
    }

    public function clearDisableInitialIndex()
    {
        unset($this->disable_initial_index);
    }

    /**
     * If set true, initial indexing is disabled for the DataStore.
     *
     * Generated from protobuf field <code>optional bool disable_initial_index = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableInitialIndex($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_initial_index = $var;

        return $this;
    }

    /**
     * If set true, automatic refresh is disabled for the DataStore.
     *
     * Generated from protobuf field <code>optional bool disable_automatic_refresh = 4;</code>
     * @return bool
     */
    public function getDisableAutomaticRefresh()
    {
        return isset($this->disable_automatic_refresh) ? $this->disable_automatic_refresh : false;
    }

    public function hasDisableAutomaticRefresh()
    {
        return isset($this->disable_automatic_refresh);
    }

    public function clearDisableAutomaticRefresh()
    {
        unset($this->disable_automatic_refresh);
    }

    /**
     * If set true, automatic refresh is disabled for the DataStore.
     *
     * Generated from protobuf field <code>optional bool disable_automatic_refresh = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableAutomaticRefresh($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_automatic_refresh = $var;

        return $this;
    }

}

