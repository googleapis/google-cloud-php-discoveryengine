<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/user_license_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [UserLicenseService.BatchUpdateUserLicenses][google.cloud.discoveryengine.v1.UserLicenseService.BatchUpdateUserLicenses]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.BatchUpdateUserLicensesResponse</code>
 */
class BatchUpdateUserLicensesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * UserLicenses successfully updated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.UserLicense user_licenses = 1;</code>
     */
    private $user_licenses;
    /**
     * A sample of errors encountered while processing the request.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 2;</code>
     */
    private $error_samples;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\UserLicense>|\Google\Protobuf\Internal\RepeatedField $user_licenses
     *           UserLicenses successfully updated.
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $error_samples
     *           A sample of errors encountered while processing the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\UserLicenseService::initOnce();
        parent::__construct($data);
    }

    /**
     * UserLicenses successfully updated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.UserLicense user_licenses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserLicenses()
    {
        return $this->user_licenses;
    }

    /**
     * UserLicenses successfully updated.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.UserLicense user_licenses = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\UserLicense>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserLicenses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\UserLicense::class);
        $this->user_licenses = $arr;

        return $this;
    }

    /**
     * A sample of errors encountered while processing the request.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorSamples()
    {
        return $this->error_samples;
    }

    /**
     * A sample of errors encountered while processing the request.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 2;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorSamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->error_samples = $arr;

        return $this;
    }

}

