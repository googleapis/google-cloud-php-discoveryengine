<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/discoveryengine/v1/site_search_engine_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\DiscoveryEngine\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\DiscoveryEngine\V1\BatchCreateTargetSitesRequest;
use Google\Cloud\DiscoveryEngine\V1\BatchVerifyTargetSitesRequest;
use Google\Cloud\DiscoveryEngine\V1\CreateTargetSiteRequest;
use Google\Cloud\DiscoveryEngine\V1\DeleteTargetSiteRequest;
use Google\Cloud\DiscoveryEngine\V1\DisableAdvancedSiteSearchRequest;
use Google\Cloud\DiscoveryEngine\V1\EnableAdvancedSiteSearchRequest;
use Google\Cloud\DiscoveryEngine\V1\FetchDomainVerificationStatusRequest;
use Google\Cloud\DiscoveryEngine\V1\GetSiteSearchEngineRequest;
use Google\Cloud\DiscoveryEngine\V1\GetTargetSiteRequest;
use Google\Cloud\DiscoveryEngine\V1\ListTargetSitesRequest;
use Google\Cloud\DiscoveryEngine\V1\RecrawlUrisRequest;
use Google\Cloud\DiscoveryEngine\V1\SiteSearchEngine;
use Google\Cloud\DiscoveryEngine\V1\TargetSite;
use Google\Cloud\DiscoveryEngine\V1\UpdateTargetSiteRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing site search related resources.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> batchCreateTargetSitesAsync(BatchCreateTargetSitesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> batchVerifyTargetSitesAsync(BatchVerifyTargetSitesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> createTargetSiteAsync(CreateTargetSiteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteTargetSiteAsync(DeleteTargetSiteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> disableAdvancedSiteSearchAsync(DisableAdvancedSiteSearchRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> enableAdvancedSiteSearchAsync(EnableAdvancedSiteSearchRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> fetchDomainVerificationStatusAsync(FetchDomainVerificationStatusRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SiteSearchEngine> getSiteSearchEngineAsync(GetSiteSearchEngineRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TargetSite> getTargetSiteAsync(GetTargetSiteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTargetSitesAsync(ListTargetSitesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> recrawlUrisAsync(RecrawlUrisRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateTargetSiteAsync(UpdateTargetSiteRequest $request, array $optionalArgs = [])
 */
final class SiteSearchEngineServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.discoveryengine.v1.SiteSearchEngineService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'discoveryengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'discoveryengine.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/site_search_engine_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/site_search_engine_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/site_search_engine_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ . '/../resources/site_search_engine_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store_siteSearchEngine resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     *
     * @return string The formatted project_location_collection_data_store_siteSearchEngine resource.
     */
    public static function projectLocationCollectionDataStoreSiteSearchEngineName(
        string $project,
        string $location,
        string $collection,
        string $dataStore
    ): string {
        return self::getPathTemplate('projectLocationCollectionDataStoreSiteSearchEngine')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store_target_site resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     * @param string $targetSite
     *
     * @return string The formatted project_location_collection_data_store_target_site resource.
     */
    public static function projectLocationCollectionDataStoreTargetSiteName(
        string $project,
        string $location,
        string $collection,
        string $dataStore,
        string $targetSite
    ): string {
        return self::getPathTemplate('projectLocationCollectionDataStoreTargetSite')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
            'target_site' => $targetSite,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_data_store_siteSearchEngine resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     *
     * @return string The formatted project_location_data_store_siteSearchEngine resource.
     */
    public static function projectLocationDataStoreSiteSearchEngineName(
        string $project,
        string $location,
        string $dataStore
    ): string {
        return self::getPathTemplate('projectLocationDataStoreSiteSearchEngine')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_data_store_target_site resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $targetSite
     *
     * @return string The formatted project_location_data_store_target_site resource.
     */
    public static function projectLocationDataStoreTargetSiteName(
        string $project,
        string $location,
        string $dataStore,
        string $targetSite
    ): string {
        return self::getPathTemplate('projectLocationDataStoreTargetSite')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'target_site' => $targetSite,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * site_search_engine resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     *
     * @return string The formatted site_search_engine resource.
     */
    public static function siteSearchEngineName(string $project, string $location, string $dataStore): string
    {
        return self::getPathTemplate('siteSearchEngine')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a target_site
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $targetSite
     *
     * @return string The formatted target_site resource.
     */
    public static function targetSiteName(
        string $project,
        string $location,
        string $dataStore,
        string $targetSite
    ): string {
        return self::getPathTemplate('targetSite')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'target_site' => $targetSite,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - projectLocationCollectionDataStoreSiteSearchEngine: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine
     * - projectLocationCollectionDataStoreTargetSite: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}
     * - projectLocationDataStoreSiteSearchEngine: projects/{project}/locations/{location}/dataStores/{data_store}/siteSearchEngine
     * - projectLocationDataStoreTargetSite: projects/{project}/locations/{location}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}
     * - siteSearchEngine: projects/{project}/locations/{location}/dataStores/{data_store}/siteSearchEngine
     * - targetSite: projects/{project}/locations/{location}/dataStores/{data_store}/siteSearchEngine/targetSites/{target_site}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'discoveryengine.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates [TargetSite][google.cloud.discoveryengine.v1.TargetSite] in a
     * batch.
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::batchCreateTargetSitesAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/batch_create_target_sites.php
     *
     * @param BatchCreateTargetSitesRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchCreateTargetSites(
        BatchCreateTargetSitesRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('BatchCreateTargetSites', $request, $callOptions)->wait();
    }

    /**
     * Verify target sites' ownership and validity.
     * This API sends all the target sites under site search engine for
     * verification.
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::batchVerifyTargetSitesAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/batch_verify_target_sites.php
     *
     * @param BatchVerifyTargetSitesRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchVerifyTargetSites(
        BatchVerifyTargetSitesRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('BatchVerifyTargetSites', $request, $callOptions)->wait();
    }

    /**
     * Creates a [TargetSite][google.cloud.discoveryengine.v1.TargetSite].
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::createTargetSiteAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/create_target_site.php
     *
     * @param CreateTargetSiteRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createTargetSite(CreateTargetSiteRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateTargetSite', $request, $callOptions)->wait();
    }

    /**
     * Deletes a [TargetSite][google.cloud.discoveryengine.v1.TargetSite].
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::deleteTargetSiteAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/delete_target_site.php
     *
     * @param DeleteTargetSiteRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteTargetSite(DeleteTargetSiteRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteTargetSite', $request, $callOptions)->wait();
    }

    /**
     * Downgrade from advanced site search to basic site search.
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::disableAdvancedSiteSearchAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/disable_advanced_site_search.php
     *
     * @param DisableAdvancedSiteSearchRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function disableAdvancedSiteSearch(
        DisableAdvancedSiteSearchRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('DisableAdvancedSiteSearch', $request, $callOptions)->wait();
    }

    /**
     * Upgrade from basic site search to advanced site search.
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::enableAdvancedSiteSearchAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/enable_advanced_site_search.php
     *
     * @param EnableAdvancedSiteSearchRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function enableAdvancedSiteSearch(
        EnableAdvancedSiteSearchRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall('EnableAdvancedSiteSearch', $request, $callOptions)->wait();
    }

    /**
     * Returns list of target sites with its domain verification status.
     * This method can only be called under data store with BASIC_SITE_SEARCH
     * state at the moment.
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::fetchDomainVerificationStatusAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/fetch_domain_verification_status.php
     *
     * @param FetchDomainVerificationStatusRequest $request     A request to house fields associated with the call.
     * @param array                                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function fetchDomainVerificationStatus(
        FetchDomainVerificationStatusRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('FetchDomainVerificationStatus', $request, $callOptions);
    }

    /**
     * Gets the
     * [SiteSearchEngine][google.cloud.discoveryengine.v1.SiteSearchEngine].
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::getSiteSearchEngineAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/get_site_search_engine.php
     *
     * @param GetSiteSearchEngineRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SiteSearchEngine
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSiteSearchEngine(GetSiteSearchEngineRequest $request, array $callOptions = []): SiteSearchEngine
    {
        return $this->startApiCall('GetSiteSearchEngine', $request, $callOptions)->wait();
    }

    /**
     * Gets a [TargetSite][google.cloud.discoveryengine.v1.TargetSite].
     *
     * The async variant is {@see SiteSearchEngineServiceClient::getTargetSiteAsync()}
     * .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/get_target_site.php
     *
     * @param GetTargetSiteRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TargetSite
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTargetSite(GetTargetSiteRequest $request, array $callOptions = []): TargetSite
    {
        return $this->startApiCall('GetTargetSite', $request, $callOptions)->wait();
    }

    /**
     * Gets a list of [TargetSite][google.cloud.discoveryengine.v1.TargetSite]s.
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::listTargetSitesAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/list_target_sites.php
     *
     * @param ListTargetSitesRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listTargetSites(ListTargetSitesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTargetSites', $request, $callOptions);
    }

    /**
     * Request on-demand recrawl for a list of URIs.
     *
     * The async variant is {@see SiteSearchEngineServiceClient::recrawlUrisAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/recrawl_uris.php
     *
     * @param RecrawlUrisRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function recrawlUris(RecrawlUrisRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RecrawlUris', $request, $callOptions)->wait();
    }

    /**
     * Updates a [TargetSite][google.cloud.discoveryengine.v1.TargetSite].
     *
     * The async variant is
     * {@see SiteSearchEngineServiceClient::updateTargetSiteAsync()} .
     *
     * @example samples/V1/SiteSearchEngineServiceClient/update_target_site.php
     *
     * @param UpdateTargetSiteRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateTargetSite(UpdateTargetSiteRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateTargetSite', $request, $callOptions)->wait();
    }
}
