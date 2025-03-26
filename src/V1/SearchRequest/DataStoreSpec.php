<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A struct to define data stores to filter on in a search call and
 * configurations for those data stores. Otherwise, an `INVALID_ARGUMENT`
 * error is returned.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.SearchRequest.DataStoreSpec</code>
 */
class DataStoreSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of
     * [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $data_store = '';
    /**
     * Optional. Filter specification to filter documents in the data store
     * specified by data_store field. For more information on filtering, see
     * [Filtering](https://cloud.google.com/generative-ai-app-builder/docs/filter-search-metadata)
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. Boost specification to boost certain documents.
     * For more information on boosting, see
     * [Boosting](https://cloud.google.com/generative-ai-app-builder/docs/boost-search-results)
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.BoostSpec boost_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $boost_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data_store
     *           Required. Full resource name of
     *           [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     *           `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     *     @type string $filter
     *           Optional. Filter specification to filter documents in the data store
     *           specified by data_store field. For more information on filtering, see
     *           [Filtering](https://cloud.google.com/generative-ai-app-builder/docs/filter-search-metadata)
     *     @type \Google\Cloud\DiscoveryEngine\V1\SearchRequest\BoostSpec $boost_spec
     *           Optional. Boost specification to boost certain documents.
     *           For more information on boosting, see
     *           [Boosting](https://cloud.google.com/generative-ai-app-builder/docs/boost-search-results)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of
     * [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataStore()
    {
        return $this->data_store;
    }

    /**
     * Required. Full resource name of
     * [DataStore][google.cloud.discoveryengine.v1.DataStore], such as
     * `projects/{project}/locations/{location}/collections/{collection_id}/dataStores/{data_store_id}`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDataStore($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_store = $var;

        return $this;
    }

    /**
     * Optional. Filter specification to filter documents in the data store
     * specified by data_store field. For more information on filtering, see
     * [Filtering](https://cloud.google.com/generative-ai-app-builder/docs/filter-search-metadata)
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. Filter specification to filter documents in the data store
     * specified by data_store field. For more information on filtering, see
     * [Filtering](https://cloud.google.com/generative-ai-app-builder/docs/filter-search-metadata)
     *
     * Generated from protobuf field <code>string filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. Boost specification to boost certain documents.
     * For more information on boosting, see
     * [Boosting](https://cloud.google.com/generative-ai-app-builder/docs/boost-search-results)
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.BoostSpec boost_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\SearchRequest\BoostSpec|null
     */
    public function getBoostSpec()
    {
        return $this->boost_spec;
    }

    public function hasBoostSpec()
    {
        return isset($this->boost_spec);
    }

    public function clearBoostSpec()
    {
        unset($this->boost_spec);
    }

    /**
     * Optional. Boost specification to boost certain documents.
     * For more information on boosting, see
     * [Boosting](https://cloud.google.com/generative-ai-app-builder/docs/boost-search-results)
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.SearchRequest.BoostSpec boost_spec = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\SearchRequest\BoostSpec $var
     * @return $this
     */
    public function setBoostSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\SearchRequest\BoostSpec::class);
        $this->boost_spec = $var;

        return $this;
    }

}


