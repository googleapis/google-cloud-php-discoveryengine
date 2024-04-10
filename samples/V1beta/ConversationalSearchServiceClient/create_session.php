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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START discoveryengine_v1beta_generated_ConversationalSearchService_CreateSession_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\DiscoveryEngine\V1beta\Client\ConversationalSearchServiceClient;
use Google\Cloud\DiscoveryEngine\V1beta\CreateSessionRequest;
use Google\Cloud\DiscoveryEngine\V1beta\Session;

/**
 * Creates a Session.
 *
 * If the [Session][google.cloud.discoveryengine.v1beta.Session] to create
 * already exists, an ALREADY_EXISTS error is returned.
 *
 * @param string $formattedParent Full resource name of parent data store. Format:
 *                                `projects/{project_number}/locations/{location_id}/collections/{collection}/dataStores/{data_store_id}`
 *                                Please see {@see ConversationalSearchServiceClient::dataStoreName()} for help formatting this field.
 */
function create_session_sample(string $formattedParent): void
{
    // Create a client.
    $conversationalSearchServiceClient = new ConversationalSearchServiceClient();

    // Prepare the request message.
    $session = new Session();
    $request = (new CreateSessionRequest())
        ->setParent($formattedParent)
        ->setSession($session);

    // Call the API and handle any network failures.
    try {
        /** @var Session $response */
        $response = $conversationalSearchServiceClient->createSession($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = ConversationalSearchServiceClient::dataStoreName(
        '[PROJECT]',
        '[LOCATION]',
        '[DATA_STORE]'
    );

    create_session_sample($formattedParent);
}
// [END discoveryengine_v1beta_generated_ConversationalSearchService_CreateSession_sync]
