<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/completion_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CompletionService.CompleteQuery][google.cloud.discoveryengine.v1.CompletionService.CompleteQuery]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.CompleteQueryRequest</code>
 */
class CompleteQueryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent data store resource name for which the completion is
     * performed, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $data_store = '';
    /**
     * Required. The typeahead input used to fetch suggestions. Maximum length is
     * 128 characters.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     * Selects data model of query suggestions for serving. Currently supported
     * values:
     * * `document` - Using suggestions generated from user-imported documents.
     * * `search-history` - Using suggestions generated from the past history of
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API calls. Do not use it when there is no traffic for Search API.
     * * `user-event` - Using suggestions generated from user-imported search
     * events.
     * * `document-completable` - Using suggestions taken directly from
     * user-imported document fields marked as completable.
     * Default values:
     * * `document` is the default model for regular dataStores.
     * * `search-history` is the default model for
     * [IndustryVertical.SITE_SEARCH][] dataStores.
     *
     * Generated from protobuf field <code>string query_model = 3;</code>
     */
    protected $query_model = '';
    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * This should be the same identifier as
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * and
     * [SearchRequest.user_pseudo_id][google.cloud.discoveryengine.v1.SearchRequest.user_pseudo_id].
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 4;</code>
     */
    protected $user_pseudo_id = '';
    /**
     * Indicates if tail suggestions should be returned if there are no
     * suggestions that match the full query. Even if set to true, if there are
     * suggestions that match the full query, those are returned and no
     * tail suggestions are returned.
     *
     * Generated from protobuf field <code>bool include_tail_suggestions = 5;</code>
     */
    protected $include_tail_suggestions = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data_store
     *           Required. The parent data store resource name for which the completion is
     *           performed, such as
     *           `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store`.
     *     @type string $query
     *           Required. The typeahead input used to fetch suggestions. Maximum length is
     *           128 characters.
     *     @type string $query_model
     *           Selects data model of query suggestions for serving. Currently supported
     *           values:
     *           * `document` - Using suggestions generated from user-imported documents.
     *           * `search-history` - Using suggestions generated from the past history of
     *           [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     *           API calls. Do not use it when there is no traffic for Search API.
     *           * `user-event` - Using suggestions generated from user-imported search
     *           events.
     *           * `document-completable` - Using suggestions taken directly from
     *           user-imported document fields marked as completable.
     *           Default values:
     *           * `document` is the default model for regular dataStores.
     *           * `search-history` is the default model for
     *           [IndustryVertical.SITE_SEARCH][] dataStores.
     *     @type string $user_pseudo_id
     *           A unique identifier for tracking visitors. For example, this could be
     *           implemented with an HTTP cookie, which should be able to uniquely identify
     *           a visitor on a single device. This unique identifier should not change if
     *           the visitor logs in or out of the website.
     *           This field should NOT have a fixed value such as `unknown_visitor`.
     *           This should be the same identifier as
     *           [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     *           and
     *           [SearchRequest.user_pseudo_id][google.cloud.discoveryengine.v1.SearchRequest.user_pseudo_id].
     *           The field must be a UTF-8 encoded string with a length limit of 128
     *           characters. Otherwise, an `INVALID_ARGUMENT` error is returned.
     *     @type bool $include_tail_suggestions
     *           Indicates if tail suggestions should be returned if there are no
     *           suggestions that match the full query. Even if set to true, if there are
     *           suggestions that match the full query, those are returned and no
     *           tail suggestions are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\CompletionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent data store resource name for which the completion is
     * performed, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store`.
     *
     * Generated from protobuf field <code>string data_store = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDataStore()
    {
        return $this->data_store;
    }

    /**
     * Required. The parent data store resource name for which the completion is
     * performed, such as
     * `projects/&#42;&#47;locations/global/collections/default_collection/dataStores/default_data_store`.
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
     * Required. The typeahead input used to fetch suggestions. Maximum length is
     * 128 characters.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. The typeahead input used to fetch suggestions. Maximum length is
     * 128 characters.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Selects data model of query suggestions for serving. Currently supported
     * values:
     * * `document` - Using suggestions generated from user-imported documents.
     * * `search-history` - Using suggestions generated from the past history of
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API calls. Do not use it when there is no traffic for Search API.
     * * `user-event` - Using suggestions generated from user-imported search
     * events.
     * * `document-completable` - Using suggestions taken directly from
     * user-imported document fields marked as completable.
     * Default values:
     * * `document` is the default model for regular dataStores.
     * * `search-history` is the default model for
     * [IndustryVertical.SITE_SEARCH][] dataStores.
     *
     * Generated from protobuf field <code>string query_model = 3;</code>
     * @return string
     */
    public function getQueryModel()
    {
        return $this->query_model;
    }

    /**
     * Selects data model of query suggestions for serving. Currently supported
     * values:
     * * `document` - Using suggestions generated from user-imported documents.
     * * `search-history` - Using suggestions generated from the past history of
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API calls. Do not use it when there is no traffic for Search API.
     * * `user-event` - Using suggestions generated from user-imported search
     * events.
     * * `document-completable` - Using suggestions taken directly from
     * user-imported document fields marked as completable.
     * Default values:
     * * `document` is the default model for regular dataStores.
     * * `search-history` is the default model for
     * [IndustryVertical.SITE_SEARCH][] dataStores.
     *
     * Generated from protobuf field <code>string query_model = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_model = $var;

        return $this;
    }

    /**
     * A unique identifier for tracking visitors. For example, this could be
     * implemented with an HTTP cookie, which should be able to uniquely identify
     * a visitor on a single device. This unique identifier should not change if
     * the visitor logs in or out of the website.
     * This field should NOT have a fixed value such as `unknown_visitor`.
     * This should be the same identifier as
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * and
     * [SearchRequest.user_pseudo_id][google.cloud.discoveryengine.v1.SearchRequest.user_pseudo_id].
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 4;</code>
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
     * This should be the same identifier as
     * [UserEvent.user_pseudo_id][google.cloud.discoveryengine.v1.UserEvent.user_pseudo_id]
     * and
     * [SearchRequest.user_pseudo_id][google.cloud.discoveryengine.v1.SearchRequest.user_pseudo_id].
     * The field must be a UTF-8 encoded string with a length limit of 128
     * characters. Otherwise, an `INVALID_ARGUMENT` error is returned.
     *
     * Generated from protobuf field <code>string user_pseudo_id = 4;</code>
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
     * Indicates if tail suggestions should be returned if there are no
     * suggestions that match the full query. Even if set to true, if there are
     * suggestions that match the full query, those are returned and no
     * tail suggestions are returned.
     *
     * Generated from protobuf field <code>bool include_tail_suggestions = 5;</code>
     * @return bool
     */
    public function getIncludeTailSuggestions()
    {
        return $this->include_tail_suggestions;
    }

    /**
     * Indicates if tail suggestions should be returned if there are no
     * suggestions that match the full query. Even if set to true, if there are
     * suggestions that match the full query, those are returned and no
     * tail suggestions are returned.
     *
     * Generated from protobuf field <code>bool include_tail_suggestions = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeTailSuggestions($var)
    {
        GPBUtil::checkBool($var);
        $this->include_tail_suggestions = $var;

        return $this;
    }

}

