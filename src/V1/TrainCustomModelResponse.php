<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_tuning_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of the
 * [TrainCustomModelRequest][google.cloud.discoveryengine.v1.TrainCustomModelRequest].
 * This message is returned by the google.longrunning.Operations.response field.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.TrainCustomModelResponse</code>
 */
class TrainCustomModelResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A sample of errors encountered while processing the data.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 1;</code>
     */
    private $error_samples;
    /**
     * Echoes the destination for the complete errors in the request if set.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.ImportErrorConfig error_config = 2;</code>
     */
    protected $error_config = null;
    /**
     * The trained model status. Possible values are:
     *  * **bad-data**: The training data quality is bad.
     *  * **no-improvement**: Tuning didn't improve performance. Won't deploy.
     *  * **in-progress**: Model training job creation is in progress.
     *  * **training**: Model is actively training.
     *  * **evaluating**: The model is evaluating trained metrics.
     *  * **indexing**: The model trained metrics are indexing.
     *  * **ready**: The model is ready for serving.
     *
     * Generated from protobuf field <code>string model_status = 3;</code>
     */
    protected $model_status = '';
    /**
     * The metrics of the trained model.
     *
     * Generated from protobuf field <code>map<string, double> metrics = 4;</code>
     */
    private $metrics;
    /**
     * Fully qualified name of the CustomTuningModel.
     *
     * Generated from protobuf field <code>string model_name = 5;</code>
     */
    protected $model_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $error_samples
     *           A sample of errors encountered while processing the data.
     *     @type \Google\Cloud\DiscoveryEngine\V1\ImportErrorConfig $error_config
     *           Echoes the destination for the complete errors in the request if set.
     *     @type string $model_status
     *           The trained model status. Possible values are:
     *            * **bad-data**: The training data quality is bad.
     *            * **no-improvement**: Tuning didn't improve performance. Won't deploy.
     *            * **in-progress**: Model training job creation is in progress.
     *            * **training**: Model is actively training.
     *            * **evaluating**: The model is evaluating trained metrics.
     *            * **indexing**: The model trained metrics are indexing.
     *            * **ready**: The model is ready for serving.
     *     @type array|\Google\Protobuf\Internal\MapField $metrics
     *           The metrics of the trained model.
     *     @type string $model_name
     *           Fully qualified name of the CustomTuningModel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchTuningService::initOnce();
        parent::__construct($data);
    }

    /**
     * A sample of errors encountered while processing the data.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorSamples()
    {
        return $this->error_samples;
    }

    /**
     * A sample of errors encountered while processing the data.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status error_samples = 1;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorSamples($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->error_samples = $arr;

        return $this;
    }

    /**
     * Echoes the destination for the complete errors in the request if set.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.ImportErrorConfig error_config = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\ImportErrorConfig|null
     */
    public function getErrorConfig()
    {
        return $this->error_config;
    }

    public function hasErrorConfig()
    {
        return isset($this->error_config);
    }

    public function clearErrorConfig()
    {
        unset($this->error_config);
    }

    /**
     * Echoes the destination for the complete errors in the request if set.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.ImportErrorConfig error_config = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\ImportErrorConfig $var
     * @return $this
     */
    public function setErrorConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\ImportErrorConfig::class);
        $this->error_config = $var;

        return $this;
    }

    /**
     * The trained model status. Possible values are:
     *  * **bad-data**: The training data quality is bad.
     *  * **no-improvement**: Tuning didn't improve performance. Won't deploy.
     *  * **in-progress**: Model training job creation is in progress.
     *  * **training**: Model is actively training.
     *  * **evaluating**: The model is evaluating trained metrics.
     *  * **indexing**: The model trained metrics are indexing.
     *  * **ready**: The model is ready for serving.
     *
     * Generated from protobuf field <code>string model_status = 3;</code>
     * @return string
     */
    public function getModelStatus()
    {
        return $this->model_status;
    }

    /**
     * The trained model status. Possible values are:
     *  * **bad-data**: The training data quality is bad.
     *  * **no-improvement**: Tuning didn't improve performance. Won't deploy.
     *  * **in-progress**: Model training job creation is in progress.
     *  * **training**: Model is actively training.
     *  * **evaluating**: The model is evaluating trained metrics.
     *  * **indexing**: The model trained metrics are indexing.
     *  * **ready**: The model is ready for serving.
     *
     * Generated from protobuf field <code>string model_status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setModelStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_status = $var;

        return $this;
    }

    /**
     * The metrics of the trained model.
     *
     * Generated from protobuf field <code>map<string, double> metrics = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The metrics of the trained model.
     *
     * Generated from protobuf field <code>map<string, double> metrics = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Fully qualified name of the CustomTuningModel.
     *
     * Generated from protobuf field <code>string model_name = 5;</code>
     * @return string
     */
    public function getModelName()
    {
        return $this->model_name;
    }

    /**
     * Fully qualified name of the CustomTuningModel.
     *
     * Generated from protobuf field <code>string model_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setModelName($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_name = $var;

        return $this;
    }

}
