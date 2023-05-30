<?php
/*
 * Copyright 2023 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/iot/v1/device_manager.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Iot\V1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Iot\V1\BindDeviceToGatewayRequest;
use Google\Cloud\Iot\V1\BindDeviceToGatewayResponse;
use Google\Cloud\Iot\V1\CreateDeviceRegistryRequest;
use Google\Cloud\Iot\V1\CreateDeviceRequest;
use Google\Cloud\Iot\V1\DeleteDeviceRegistryRequest;
use Google\Cloud\Iot\V1\DeleteDeviceRequest;
use Google\Cloud\Iot\V1\Device;
use Google\Cloud\Iot\V1\DeviceConfig;
use Google\Cloud\Iot\V1\DeviceRegistry;
use Google\Cloud\Iot\V1\GetDeviceRegistryRequest;
use Google\Cloud\Iot\V1\GetDeviceRequest;
use Google\Cloud\Iot\V1\ListDeviceConfigVersionsRequest;
use Google\Cloud\Iot\V1\ListDeviceConfigVersionsResponse;
use Google\Cloud\Iot\V1\ListDeviceRegistriesRequest;
use Google\Cloud\Iot\V1\ListDeviceStatesRequest;
use Google\Cloud\Iot\V1\ListDeviceStatesResponse;
use Google\Cloud\Iot\V1\ListDevicesRequest;
use Google\Cloud\Iot\V1\ModifyCloudToDeviceConfigRequest;
use Google\Cloud\Iot\V1\SendCommandToDeviceRequest;
use Google\Cloud\Iot\V1\SendCommandToDeviceResponse;
use Google\Cloud\Iot\V1\UnbindDeviceFromGatewayRequest;
use Google\Cloud\Iot\V1\UnbindDeviceFromGatewayResponse;
use Google\Cloud\Iot\V1\UpdateDeviceRegistryRequest;
use Google\Cloud\Iot\V1\UpdateDeviceRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Internet of Things (IoT) service. Securely connect and manage IoT devices.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface bindDeviceToGatewayAsync(BindDeviceToGatewayRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createDeviceAsync(CreateDeviceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createDeviceRegistryAsync(CreateDeviceRegistryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDeviceAsync(DeleteDeviceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteDeviceRegistryAsync(DeleteDeviceRegistryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDeviceAsync(GetDeviceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getDeviceRegistryAsync(GetDeviceRegistryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDeviceConfigVersionsAsync(ListDeviceConfigVersionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDeviceRegistriesAsync(ListDeviceRegistriesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDeviceStatesAsync(ListDeviceStatesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listDevicesAsync(ListDevicesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface modifyCloudToDeviceConfigAsync(ModifyCloudToDeviceConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface sendCommandToDeviceAsync(SendCommandToDeviceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface unbindDeviceFromGatewayAsync(UnbindDeviceFromGatewayRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDeviceAsync(UpdateDeviceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateDeviceRegistryAsync(UpdateDeviceRegistryRequest $request, array $optionalArgs = [])
 */
abstract class DeviceManagerBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.iot.v1.DeviceManager';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'cloudiot.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/cloudiot',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/device_manager_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/device_manager_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/device_manager_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/device_manager_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a device
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $registry
     * @param string $device
     *
     * @return string The formatted device resource.
     */
    public static function deviceName(string $project, string $location, string $registry, string $device): string
    {
        return self::getPathTemplate('device')->render([
            'project' => $project,
            'location' => $location,
            'registry' => $registry,
            'device' => $device,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a registry
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $registry
     *
     * @return string The formatted registry resource.
     */
    public static function registryName(string $project, string $location, string $registry): string
    {
        return self::getPathTemplate('registry')->render([
            'project' => $project,
            'location' => $location,
            'registry' => $registry,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - device: projects/{project}/locations/{location}/registries/{registry}/devices/{device}
     * - location: projects/{project}/locations/{location}
     * - registry: projects/{project}/locations/{location}/registries/{registry}
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
     *           as "<uri>:<port>". Default 'cloudiot.googleapis.com:443'.
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
     * Associates the device with the gateway.
     *
     * The async variant is {@see self::bindDeviceToGatewayAsync()} .
     *
     * @param BindDeviceToGatewayRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BindDeviceToGatewayResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function bindDeviceToGateway(BindDeviceToGatewayRequest $request, array $callOptions = []): BindDeviceToGatewayResponse
    {
        return $this->startApiCall('BindDeviceToGateway', $request, $callOptions)->wait();
    }

    /**
     * Creates a device in a device registry.
     *
     * The async variant is {@see self::createDeviceAsync()} .
     *
     * @param CreateDeviceRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Device
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createDevice(CreateDeviceRequest $request, array $callOptions = []): Device
    {
        return $this->startApiCall('CreateDevice', $request, $callOptions)->wait();
    }

    /**
     * Creates a device registry that contains devices.
     *
     * The async variant is {@see self::createDeviceRegistryAsync()} .
     *
     * @param CreateDeviceRegistryRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DeviceRegistry
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createDeviceRegistry(CreateDeviceRegistryRequest $request, array $callOptions = []): DeviceRegistry
    {
        return $this->startApiCall('CreateDeviceRegistry', $request, $callOptions)->wait();
    }

    /**
     * Deletes a device.
     *
     * The async variant is {@see self::deleteDeviceAsync()} .
     *
     * @param DeleteDeviceRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteDevice(DeleteDeviceRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteDevice', $request, $callOptions)->wait();
    }

    /**
     * Deletes a device registry configuration.
     *
     * The async variant is {@see self::deleteDeviceRegistryAsync()} .
     *
     * @param DeleteDeviceRegistryRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteDeviceRegistry(DeleteDeviceRegistryRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteDeviceRegistry', $request, $callOptions)->wait();
    }

    /**
     * Gets details about a device.
     *
     * The async variant is {@see self::getDeviceAsync()} .
     *
     * @param GetDeviceRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Device
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDevice(GetDeviceRequest $request, array $callOptions = []): Device
    {
        return $this->startApiCall('GetDevice', $request, $callOptions)->wait();
    }

    /**
     * Gets a device registry configuration.
     *
     * The async variant is {@see self::getDeviceRegistryAsync()} .
     *
     * @param GetDeviceRegistryRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DeviceRegistry
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getDeviceRegistry(GetDeviceRegistryRequest $request, array $callOptions = []): DeviceRegistry
    {
        return $this->startApiCall('GetDeviceRegistry', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource.
     * Returns an empty policy if the resource exists and does not have a policy
     * set.
     *
     * The async variant is {@see self::getIamPolicyAsync()} .
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Lists the last few versions of the device configuration in descending
     * order (i.e.: newest first).
     *
     * The async variant is {@see self::listDeviceConfigVersionsAsync()} .
     *
     * @param ListDeviceConfigVersionsRequest $request     A request to house fields associated with the call.
     * @param array                           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ListDeviceConfigVersionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listDeviceConfigVersions(ListDeviceConfigVersionsRequest $request, array $callOptions = []): ListDeviceConfigVersionsResponse
    {
        return $this->startApiCall('ListDeviceConfigVersions', $request, $callOptions)->wait();
    }

    /**
     * Lists device registries.
     *
     * The async variant is {@see self::listDeviceRegistriesAsync()} .
     *
     * @param ListDeviceRegistriesRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
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
    public function listDeviceRegistries(ListDeviceRegistriesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDeviceRegistries', $request, $callOptions);
    }

    /**
     * Lists the last few versions of the device state in descending order (i.e.:
     * newest first).
     *
     * The async variant is {@see self::listDeviceStatesAsync()} .
     *
     * @param ListDeviceStatesRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ListDeviceStatesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listDeviceStates(ListDeviceStatesRequest $request, array $callOptions = []): ListDeviceStatesResponse
    {
        return $this->startApiCall('ListDeviceStates', $request, $callOptions)->wait();
    }

    /**
     * List devices in a device registry.
     *
     * The async variant is {@see self::listDevicesAsync()} .
     *
     * @param ListDevicesRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
    public function listDevices(ListDevicesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListDevices', $request, $callOptions);
    }

    /**
     * Modifies the configuration for the device, which is eventually sent from
     * the Cloud IoT Core servers. Returns the modified configuration version and
     * its metadata.
     *
     * The async variant is {@see self::modifyCloudToDeviceConfigAsync()} .
     *
     * @param ModifyCloudToDeviceConfigRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DeviceConfig
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function modifyCloudToDeviceConfig(ModifyCloudToDeviceConfigRequest $request, array $callOptions = []): DeviceConfig
    {
        return $this->startApiCall('ModifyCloudToDeviceConfig', $request, $callOptions)->wait();
    }

    /**
     * Sends a command to the specified device. In order for a device to be able
     * to receive commands, it must:
     * 1) be connected to Cloud IoT Core using the MQTT protocol, and
     * 2) be subscribed to the group of MQTT topics specified by
     * /devices/{device-id}/commands/#. This subscription will receive commands
     * at the top-level topic /devices/{device-id}/commands as well as commands
     * for subfolders, like /devices/{device-id}/commands/subfolder.
     * Note that subscribing to specific subfolders is not supported.
     * If the command could not be delivered to the device, this method will
     * return an error; in particular, if the device is not subscribed, this
     * method will return FAILED_PRECONDITION. Otherwise, this method will
     * return OK. If the subscription is QoS 1, at least once delivery will be
     * guaranteed; for QoS 0, no acknowledgment will be expected from the device.
     *
     * The async variant is {@see self::sendCommandToDeviceAsync()} .
     *
     * @param SendCommandToDeviceRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SendCommandToDeviceResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function sendCommandToDevice(SendCommandToDeviceRequest $request, array $callOptions = []): SendCommandToDeviceResponse
    {
        return $this->startApiCall('SendCommandToDevice', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any
     * existing policy.
     *
     * The async variant is {@see self::setIamPolicyAsync()} .
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     * If the resource does not exist, this will return an empty set of
     * permissions, not a NOT_FOUND error.
     *
     * The async variant is {@see self::testIamPermissionsAsync()} .
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Deletes the association between the device and the gateway.
     *
     * The async variant is {@see self::unbindDeviceFromGatewayAsync()} .
     *
     * @param UnbindDeviceFromGatewayRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return UnbindDeviceFromGatewayResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function unbindDeviceFromGateway(UnbindDeviceFromGatewayRequest $request, array $callOptions = []): UnbindDeviceFromGatewayResponse
    {
        return $this->startApiCall('UnbindDeviceFromGateway', $request, $callOptions)->wait();
    }

    /**
     * Updates a device.
     *
     * The async variant is {@see self::updateDeviceAsync()} .
     *
     * @param UpdateDeviceRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Device
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDevice(UpdateDeviceRequest $request, array $callOptions = []): Device
    {
        return $this->startApiCall('UpdateDevice', $request, $callOptions)->wait();
    }

    /**
     * Updates a device registry configuration.
     *
     * The async variant is {@see self::updateDeviceRegistryAsync()} .
     *
     * @param UpdateDeviceRegistryRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return DeviceRegistry
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateDeviceRegistry(UpdateDeviceRegistryRequest $request, array $callOptions = []): DeviceRegistry
    {
        return $this->startApiCall('UpdateDeviceRegistry', $request, $callOptions)->wait();
    }
}
