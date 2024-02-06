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

namespace Google\Service\Firestore;

class WriteResult extends \Google\Collection
{
  protected $collection_key = 'transformResults';
  protected $transformResultsType = Value::class;
  protected $transformResultsDataType = 'array';
  public $transformResults = [];
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param Value[]
   */
  public function setTransformResults($transformResults)
  {
    $this->transformResults = $transformResults;
  }
  /**
   * @return Value[]
   */
  public function getTransformResults()
  {
    return $this->transformResults;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WriteResult::class, 'Google_Service_Firestore_WriteResult');
