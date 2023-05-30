<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for `UnbindDeviceFromGateway`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.UnbindDeviceFromGatewayRequest</code>
 */
class UnbindDeviceFromGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the registry. For example,
     * `projects/example-project/locations/us-central1/registries/my-registry`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The value of `gateway_id` can be either the device numeric ID or the
     * user-defined device identifier.
     *
     * Generated from protobuf field <code>string gateway_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $gateway_id = '';
    /**
     * Required. The device to disassociate from the specified gateway. The value of
     * `device_id` can be either the device numeric ID or the user-defined device
     * identifier.
     *
     * Generated from protobuf field <code>string device_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $device_id = '';

    /**
     * @param string $parent    Required. The name of the registry. For example,
     *                          `projects/example-project/locations/us-central1/registries/my-registry`. Please see
     *                          {@see DeviceManagerClient::registryName()} for help formatting this field.
     * @param string $gatewayId Required. The value of `gateway_id` can be either the device numeric ID or the
     *                          user-defined device identifier.
     * @param string $deviceId  Required. The device to disassociate from the specified gateway. The value of
     *                          `device_id` can be either the device numeric ID or the user-defined device
     *                          identifier.
     *
     * @return \Google\Cloud\Iot\V1\UnbindDeviceFromGatewayRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $gatewayId, string $deviceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setGatewayId($gatewayId)
            ->setDeviceId($deviceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the registry. For example,
     *           `projects/example-project/locations/us-central1/registries/my-registry`.
     *     @type string $gateway_id
     *           Required. The value of `gateway_id` can be either the device numeric ID or the
     *           user-defined device identifier.
     *     @type string $device_id
     *           Required. The device to disassociate from the specified gateway. The value of
     *           `device_id` can be either the device numeric ID or the user-defined device
     *           identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the registry. For example,
     * `projects/example-project/locations/us-central1/registries/my-registry`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the registry. For example,
     * `projects/example-project/locations/us-central1/registries/my-registry`.
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

    /**
     * Required. The value of `gateway_id` can be either the device numeric ID or the
     * user-defined device identifier.
     *
     * Generated from protobuf field <code>string gateway_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * Required. The value of `gateway_id` can be either the device numeric ID or the
     * user-defined device identifier.
     *
     * Generated from protobuf field <code>string gateway_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_id = $var;

        return $this;
    }

    /**
     * Required. The device to disassociate from the specified gateway. The value of
     * `device_id` can be either the device numeric ID or the user-defined device
     * identifier.
     *
     * Generated from protobuf field <code>string device_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * Required. The device to disassociate from the specified gateway. The value of
     * `device_id` can be either the device numeric ID or the user-defined device
     * identifier.
     *
     * Generated from protobuf field <code>string device_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;

        return $this;
    }

}

