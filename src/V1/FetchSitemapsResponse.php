<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/site_search_engine_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SiteSearchEngineService.FetchSitemaps][google.cloud.discoveryengine.v1.SiteSearchEngineService.FetchSitemaps]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.FetchSitemapsResponse</code>
 */
class FetchSitemapsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of [Sitemap][google.cloud.discoveryengine.v1.Sitemap]s fetched.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.FetchSitemapsResponse.SitemapMetadata sitemaps_metadata = 1;</code>
     */
    private $sitemaps_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\FetchSitemapsResponse\SitemapMetadata>|\Google\Protobuf\Internal\RepeatedField $sitemaps_metadata
     *           List of [Sitemap][google.cloud.discoveryengine.v1.Sitemap]s fetched.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SiteSearchEngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of [Sitemap][google.cloud.discoveryengine.v1.Sitemap]s fetched.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.FetchSitemapsResponse.SitemapMetadata sitemaps_metadata = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSitemapsMetadata()
    {
        return $this->sitemaps_metadata;
    }

    /**
     * List of [Sitemap][google.cloud.discoveryengine.v1.Sitemap]s fetched.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.FetchSitemapsResponse.SitemapMetadata sitemaps_metadata = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\FetchSitemapsResponse\SitemapMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSitemapsMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\FetchSitemapsResponse\SitemapMetadata::class);
        $this->sitemaps_metadata = $arr;

        return $this;
    }

}

