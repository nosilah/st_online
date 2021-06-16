<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of generating keyword ideas.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.GenerateKeywordIdeaResult</code>
 */
class GenerateKeywordIdeaResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>string text = 5;</code>
     */
    protected $text = null;
    /**
     * The historical metrics for the keyword
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.KeywordPlanHistoricalMetrics keyword_idea_metrics = 3;</code>
     */
    protected $keyword_idea_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Text of the keyword idea.
     *           As in Keyword Plan historical metrics, this text may not be an actual
     *           keyword, but the canonical form of multiple keywords.
     *           See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *     @type \Google\Ads\GoogleAds\V6\Common\KeywordPlanHistoricalMetrics $keyword_idea_metrics
     *           The historical metrics for the keyword
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>string text = 5;</code>
     * @return string
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>string text = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The historical metrics for the keyword
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.KeywordPlanHistoricalMetrics keyword_idea_metrics = 3;</code>
     * @return \Google\Ads\GoogleAds\V6\Common\KeywordPlanHistoricalMetrics
     */
    public function getKeywordIdeaMetrics()
    {
        return isset($this->keyword_idea_metrics) ? $this->keyword_idea_metrics : null;
    }

    public function hasKeywordIdeaMetrics()
    {
        return isset($this->keyword_idea_metrics);
    }

    public function clearKeywordIdeaMetrics()
    {
        unset($this->keyword_idea_metrics);
    }

    /**
     * The historical metrics for the keyword
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.KeywordPlanHistoricalMetrics keyword_idea_metrics = 3;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\KeywordPlanHistoricalMetrics $var
     * @return $this
     */
    public function setKeywordIdeaMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Common\KeywordPlanHistoricalMetrics::class);
        $this->keyword_idea_metrics = $var;

        return $this;
    }

}

