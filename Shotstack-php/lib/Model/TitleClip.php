<?php
/**
 * TitleClip
 *
 * PHP version 5
 *
 * @category Class
 * @package  Shotstack
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Shotstack\Model;

use \ArrayAccess;
/**
 * TitleClip Class Doc Comment
 *
 * @category    Class
 * @description Model for TitleClip
 * @package     Shotstack
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TitleClip implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'in' => 'Number',
        'options' => '\Shotstack\Model\TitleClipOptions',
        'out' => 'Number',
        'src' => 'string',
        'start' => 'Number',
        'type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'in' => 'in',
        'options' => 'options',
        'out' => 'out',
        'src' => 'src',
        'start' => 'start',
        'type' => 'type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'in' => 'setIn',
        'options' => 'setOptions',
        'out' => 'setOut',
        'src' => 'setSrc',
        'start' => 'setStart',
        'type' => 'setType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'in' => 'getIn',
        'options' => 'getOptions',
        'out' => 'getOut',
        'src' => 'getSrc',
        'start' => 'getStart',
        'type' => 'getType'
    );
  
    
    /**
      * $in 
      * @var Number
      */
    protected $in;
    
    /**
      * $options 
      * @var \Shotstack\Model\TitleClipOptions
      */
    protected $options;
    
    /**
      * $out 
      * @var Number
      */
    protected $out;
    
    /**
      * $src 
      * @var string
      */
    protected $src;
    
    /**
      * $start 
      * @var Number
      */
    protected $start;
    
    /**
      * $type 
      * @var string
      */
    protected $type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->in = $data["in"];
            $this->options = $data["options"];
            $this->out = $data["out"];
            $this->src = $data["src"];
            $this->start = $data["start"];
            $this->type = $data["type"];
        }
    }
    
    /**
     * Gets in
     * @return Number
     */
    public function getIn()
    {
        return $this->in;
    }
  
    /**
     * Sets in
     * @param Number $in 
     * @return $this
     */
    public function setIn($in)
    {
        
        $this->in = $in;
        return $this;
    }
    
    /**
     * Gets options
     * @return \Shotstack\Model\TitleClipOptions
     */
    public function getOptions()
    {
        return $this->options;
    }
  
    /**
     * Sets options
     * @param \Shotstack\Model\TitleClipOptions $options 
     * @return $this
     */
    public function setOptions($options)
    {
        
        $this->options = $options;
        return $this;
    }
    
    /**
     * Gets out
     * @return Number
     */
    public function getOut()
    {
        return $this->out;
    }
  
    /**
     * Sets out
     * @param Number $out 
     * @return $this
     */
    public function setOut($out)
    {
        
        $this->out = $out;
        return $this;
    }
    
    /**
     * Gets src
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }
  
    /**
     * Sets src
     * @param string $src 
     * @return $this
     */
    public function setSrc($src)
    {
        
        $this->src = $src;
        return $this;
    }
    
    /**
     * Gets start
     * @return Number
     */
    public function getStart()
    {
        return $this->start;
    }
  
    /**
     * Sets start
     * @param Number $start 
     * @return $this
     */
    public function setStart($start)
    {
        
        $this->start = $start;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("video", "image", "title");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'video', 'image', 'title'");
        }
        $this->type = $type;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Shotstack\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Shotstack\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
