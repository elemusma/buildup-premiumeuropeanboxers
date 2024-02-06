<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class NlpSemanticParsingModelsShoppingAssistantProductPhrase extends \Google\Model
{
  protected $metadataType = NlpSemanticParsingModelsShoppingAssistantProduct::class;
  protected $metadataDataType = '';
  public $metadata;
  /**
   * @var string
   */
  public $rawText;

  /**
   * @param NlpSemanticParsingModelsShoppingAssistantProduct
   */
  public function setMetadata(NlpSemanticParsingModelsShoppingAssistantProduct $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return NlpSemanticParsingModelsShoppingAssistantProduct
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string
   */
  public function setRawText($rawText)
  {
    $this->rawText = $rawText;
  }
  /**
   * @return string
   */
  public function getRawText()
  {
    return $this->rawText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NlpSemanticParsingModelsShoppingAssistantProductPhrase::class, 'Google_Service_Contentwarehouse_NlpSemanticParsingModelsShoppingAssistantProductPhrase');
