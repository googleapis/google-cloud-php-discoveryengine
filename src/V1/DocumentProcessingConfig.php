<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document_processing_config.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A singleton resource of
 * [DataStore][google.cloud.discoveryengine.v1.DataStore]. If it's empty when
 * [DataStore][google.cloud.discoveryengine.v1.DataStore] is created and
 * [DataStore][google.cloud.discoveryengine.v1.DataStore] is set to
 * [DataStore.ContentConfig.CONTENT_REQUIRED][google.cloud.discoveryengine.v1.DataStore.ContentConfig.CONTENT_REQUIRED],
 * the default parser will default to digital parser.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.DocumentProcessingConfig</code>
 */
class DocumentProcessingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The full resource name of the Document Processing Config.
     * Format:
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;documentProcessingConfig`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Whether chunking mode is enabled.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.DocumentProcessingConfig.ChunkingConfig chunking_config = 3;</code>
     */
    protected $chunking_config = null;
    /**
     * Configurations for default Document parser.
     * If not specified, we will configure it as default DigitalParsingConfig, and
     * the default parsing config will be applied to all file types for Document
     * parsing.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.DocumentProcessingConfig.ParsingConfig default_parsing_config = 4;</code>
     */
    protected $default_parsing_config = null;
    /**
     * Map from file type to override the default parsing configuration based on
     * the file type. Supported keys:
     * * `pdf`: Override parsing config for PDF files, either digital parsing, ocr
     * parsing or layout parsing is supported.
     * * `html`: Override parsing config for HTML files, only digital parsing and
     * layout parsing are supported.
     * * `docx`: Override parsing config for DOCX files, only digital parsing and
     * layout parsing are supported.
     * * `pptx`: Override parsing config for PPTX files, only digital parsing and
     * layout parsing are supported.
     * * `xlsm`: Override parsing config for XLSM files, only digital parsing and
     * layout parsing are supported.
     * * `xlsx`: Override parsing config for XLSX files, only digital parsing and
     * layout parsing are supported.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1.DocumentProcessingConfig.ParsingConfig> parsing_config_overrides = 5;</code>
     */
    private $parsing_config_overrides;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The full resource name of the Document Processing Config.
     *           Format:
     *           `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;documentProcessingConfig`.
     *     @type \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ChunkingConfig $chunking_config
     *           Whether chunking mode is enabled.
     *     @type \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ParsingConfig $default_parsing_config
     *           Configurations for default Document parser.
     *           If not specified, we will configure it as default DigitalParsingConfig, and
     *           the default parsing config will be applied to all file types for Document
     *           parsing.
     *     @type array|\Google\Protobuf\Internal\MapField $parsing_config_overrides
     *           Map from file type to override the default parsing configuration based on
     *           the file type. Supported keys:
     *           * `pdf`: Override parsing config for PDF files, either digital parsing, ocr
     *           parsing or layout parsing is supported.
     *           * `html`: Override parsing config for HTML files, only digital parsing and
     *           layout parsing are supported.
     *           * `docx`: Override parsing config for DOCX files, only digital parsing and
     *           layout parsing are supported.
     *           * `pptx`: Override parsing config for PPTX files, only digital parsing and
     *           layout parsing are supported.
     *           * `xlsm`: Override parsing config for XLSM files, only digital parsing and
     *           layout parsing are supported.
     *           * `xlsx`: Override parsing config for XLSX files, only digital parsing and
     *           layout parsing are supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\DocumentProcessingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The full resource name of the Document Processing Config.
     * Format:
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;documentProcessingConfig`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The full resource name of the Document Processing Config.
     * Format:
     * `projects/&#42;&#47;locations/&#42;&#47;collections/&#42;&#47;dataStores/&#42;&#47;documentProcessingConfig`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Whether chunking mode is enabled.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.DocumentProcessingConfig.ChunkingConfig chunking_config = 3;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ChunkingConfig|null
     */
    public function getChunkingConfig()
    {
        return $this->chunking_config;
    }

    public function hasChunkingConfig()
    {
        return isset($this->chunking_config);
    }

    public function clearChunkingConfig()
    {
        unset($this->chunking_config);
    }

    /**
     * Whether chunking mode is enabled.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.DocumentProcessingConfig.ChunkingConfig chunking_config = 3;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ChunkingConfig $var
     * @return $this
     */
    public function setChunkingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ChunkingConfig::class);
        $this->chunking_config = $var;

        return $this;
    }

    /**
     * Configurations for default Document parser.
     * If not specified, we will configure it as default DigitalParsingConfig, and
     * the default parsing config will be applied to all file types for Document
     * parsing.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.DocumentProcessingConfig.ParsingConfig default_parsing_config = 4;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ParsingConfig|null
     */
    public function getDefaultParsingConfig()
    {
        return $this->default_parsing_config;
    }

    public function hasDefaultParsingConfig()
    {
        return isset($this->default_parsing_config);
    }

    public function clearDefaultParsingConfig()
    {
        unset($this->default_parsing_config);
    }

    /**
     * Configurations for default Document parser.
     * If not specified, we will configure it as default DigitalParsingConfig, and
     * the default parsing config will be applied to all file types for Document
     * parsing.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.DocumentProcessingConfig.ParsingConfig default_parsing_config = 4;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ParsingConfig $var
     * @return $this
     */
    public function setDefaultParsingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ParsingConfig::class);
        $this->default_parsing_config = $var;

        return $this;
    }

    /**
     * Map from file type to override the default parsing configuration based on
     * the file type. Supported keys:
     * * `pdf`: Override parsing config for PDF files, either digital parsing, ocr
     * parsing or layout parsing is supported.
     * * `html`: Override parsing config for HTML files, only digital parsing and
     * layout parsing are supported.
     * * `docx`: Override parsing config for DOCX files, only digital parsing and
     * layout parsing are supported.
     * * `pptx`: Override parsing config for PPTX files, only digital parsing and
     * layout parsing are supported.
     * * `xlsm`: Override parsing config for XLSM files, only digital parsing and
     * layout parsing are supported.
     * * `xlsx`: Override parsing config for XLSX files, only digital parsing and
     * layout parsing are supported.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1.DocumentProcessingConfig.ParsingConfig> parsing_config_overrides = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParsingConfigOverrides()
    {
        return $this->parsing_config_overrides;
    }

    /**
     * Map from file type to override the default parsing configuration based on
     * the file type. Supported keys:
     * * `pdf`: Override parsing config for PDF files, either digital parsing, ocr
     * parsing or layout parsing is supported.
     * * `html`: Override parsing config for HTML files, only digital parsing and
     * layout parsing are supported.
     * * `docx`: Override parsing config for DOCX files, only digital parsing and
     * layout parsing are supported.
     * * `pptx`: Override parsing config for PPTX files, only digital parsing and
     * layout parsing are supported.
     * * `xlsm`: Override parsing config for XLSM files, only digital parsing and
     * layout parsing are supported.
     * * `xlsx`: Override parsing config for XLSX files, only digital parsing and
     * layout parsing are supported.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.discoveryengine.v1.DocumentProcessingConfig.ParsingConfig> parsing_config_overrides = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParsingConfigOverrides($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ParsingConfig::class);
        $this->parsing_config_overrides = $arr;

        return $this;
    }

}
