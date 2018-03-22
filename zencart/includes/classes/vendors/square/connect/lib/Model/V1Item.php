<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1Item Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1Item implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'color' => 'string',
        'abbreviation' => 'string',
        'visibility' => 'string',
        'available_online' => 'bool',
        'master_image' => '\SquareConnect\Model\V1ItemImage',
        'category' => '\SquareConnect\Model\V1Category',
        'variations' => '\SquareConnect\Model\V1Variation[]',
        'modifier_lists' => '\SquareConnect\Model\V1Variation[]',
        'fees' => '\SquareConnect\Model\V1Fee[]',
        'taxable' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'color' => 'color',
        'abbreviation' => 'abbreviation',
        'visibility' => 'visibility',
        'available_online' => 'available_online',
        'master_image' => 'master_image',
        'category' => 'category',
        'variations' => 'variations',
        'modifier_lists' => 'modifier_lists',
        'fees' => 'fees',
        'taxable' => 'taxable'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'color' => 'setColor',
        'abbreviation' => 'setAbbreviation',
        'visibility' => 'setVisibility',
        'available_online' => 'setAvailableOnline',
        'master_image' => 'setMasterImage',
        'category' => 'setCategory',
        'variations' => 'setVariations',
        'modifier_lists' => 'setModifierLists',
        'fees' => 'setFees',
        'taxable' => 'setTaxable'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'color' => 'getColor',
        'abbreviation' => 'getAbbreviation',
        'visibility' => 'getVisibility',
        'available_online' => 'getAvailableOnline',
        'master_image' => 'getMasterImage',
        'category' => 'getCategory',
        'variations' => 'getVariations',
        'modifier_lists' => 'getModifierLists',
        'fees' => 'getFees',
        'taxable' => 'getTaxable'
    );
  
    /**
      * $id The item's ID. Must be unique among all entity IDs ever provided on behalf of the merchant. You can never reuse an ID. This value can include alphanumeric characters, dashes (-), and underscores (_).
      * @var string
      */
    protected $id;
    /**
      * $name The item's name.
      * @var string
      */
    protected $name;
    /**
      * $description The item's description.
      * @var string
      */
    protected $description;
    /**
      * $type The item's type. This value is NORMAL for almost all items.
      * @var string
      */
    protected $type;
    /**
      * $color The color of the discount's display label in Square Register, if not the default color. The default color is 9da2a6.
      * @var string
      */
    protected $color;
    /**
      * $abbreviation The text of the item's display label in Square Register. Only up to the first five characters of the string are used.
      * @var string
      */
    protected $abbreviation;
    /**
      * $visibility Indicates whether the item is viewable from the merchant's online store (PUBLIC) or PRIVATE.
      * @var string
      */
    protected $visibility;
    /**
      * $available_online If true, the item can be added to shipping orders from the merchant's online store.
      * @var bool
      */
    protected $available_online;
    /**
      * $master_image The item's master image, if any.
      * @var \SquareConnect\Model\V1ItemImage
      */
    protected $master_image;
    /**
      * $category The category the item belongs to, if any.
      * @var \SquareConnect\Model\V1Category
      */
    protected $category;
    /**
      * $variations The item's variations. You must specify at least one variation.
      * @var \SquareConnect\Model\V1Variation[]
      */
    protected $variations;
    /**
      * $modifier_lists The modifier lists that apply to the item, if any.
      * @var \SquareConnect\Model\V1Variation[]
      */
    protected $modifier_lists;
    /**
      * $fees The fees that apply to the item, if any.
      * @var \SquareConnect\Model\V1Fee[]
      */
    protected $fees;
    /**
      * $taxable Deprecated. This field is not used.
      * @var bool
      */
    protected $taxable;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["description"])) {
              $this->description = $data["description"];
            } else {
              $this->description = null;
            }
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
            if (isset($data["color"])) {
              $this->color = $data["color"];
            } else {
              $this->color = null;
            }
            if (isset($data["abbreviation"])) {
              $this->abbreviation = $data["abbreviation"];
            } else {
              $this->abbreviation = null;
            }
            if (isset($data["visibility"])) {
              $this->visibility = $data["visibility"];
            } else {
              $this->visibility = null;
            }
            if (isset($data["available_online"])) {
              $this->available_online = $data["available_online"];
            } else {
              $this->available_online = null;
            }
            if (isset($data["master_image"])) {
              $this->master_image = $data["master_image"];
            } else {
              $this->master_image = null;
            }
            if (isset($data["category"])) {
              $this->category = $data["category"];
            } else {
              $this->category = null;
            }
            if (isset($data["variations"])) {
              $this->variations = $data["variations"];
            } else {
              $this->variations = null;
            }
            if (isset($data["modifier_lists"])) {
              $this->modifier_lists = $data["modifier_lists"];
            } else {
              $this->modifier_lists = null;
            }
            if (isset($data["fees"])) {
              $this->fees = $data["fees"];
            } else {
              $this->fees = null;
            }
            if (isset($data["taxable"])) {
              $this->taxable = $data["taxable"];
            } else {
              $this->taxable = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The item's ID. Must be unique among all entity IDs ever provided on behalf of the merchant. You can never reuse an ID. This value can include alphanumeric characters, dashes (-), and underscores (_).
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The item's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description The item's description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @param string $type The item's type. This value is NORMAL for almost all items.
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
  
    /**
     * Sets color
     * @param string $color The color of the discount's display label in Square Register, if not the default color. The default color is 9da2a6.
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    /**
     * Gets abbreviation
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
  
    /**
     * Sets abbreviation
     * @param string $abbreviation The text of the item's display label in Square Register. Only up to the first five characters of the string are used.
     * @return $this
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }
    /**
     * Gets visibility
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }
  
    /**
     * Sets visibility
     * @param string $visibility Indicates whether the item is viewable from the merchant's online store (PUBLIC) or PRIVATE.
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }
    /**
     * Gets available_online
     * @return bool
     */
    public function getAvailableOnline()
    {
        return $this->available_online;
    }
  
    /**
     * Sets available_online
     * @param bool $available_online If true, the item can be added to shipping orders from the merchant's online store.
     * @return $this
     */
    public function setAvailableOnline($available_online)
    {
        $this->available_online = $available_online;
        return $this;
    }
    /**
     * Gets master_image
     * @return \SquareConnect\Model\V1ItemImage
     */
    public function getMasterImage()
    {
        return $this->master_image;
    }
  
    /**
     * Sets master_image
     * @param \SquareConnect\Model\V1ItemImage $master_image The item's master image, if any.
     * @return $this
     */
    public function setMasterImage($master_image)
    {
        $this->master_image = $master_image;
        return $this;
    }
    /**
     * Gets category
     * @return \SquareConnect\Model\V1Category
     */
    public function getCategory()
    {
        return $this->category;
    }
  
    /**
     * Sets category
     * @param \SquareConnect\Model\V1Category $category The category the item belongs to, if any.
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
    /**
     * Gets variations
     * @return \SquareConnect\Model\V1Variation[]
     */
    public function getVariations()
    {
        return $this->variations;
    }
  
    /**
     * Sets variations
     * @param \SquareConnect\Model\V1Variation[] $variations The item's variations. You must specify at least one variation.
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;
        return $this;
    }
    /**
     * Gets modifier_lists
     * @return \SquareConnect\Model\V1Variation[]
     */
    public function getModifierLists()
    {
        return $this->modifier_lists;
    }
  
    /**
     * Sets modifier_lists
     * @param \SquareConnect\Model\V1Variation[] $modifier_lists The modifier lists that apply to the item, if any.
     * @return $this
     */
    public function setModifierLists($modifier_lists)
    {
        $this->modifier_lists = $modifier_lists;
        return $this;
    }
    /**
     * Gets fees
     * @return \SquareConnect\Model\V1Fee[]
     */
    public function getFees()
    {
        return $this->fees;
    }
  
    /**
     * Sets fees
     * @param \SquareConnect\Model\V1Fee[] $fees The fees that apply to the item, if any.
     * @return $this
     */
    public function setFees($fees)
    {
        $this->fees = $fees;
        return $this;
    }
    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->taxable;
    }
  
    /**
     * Sets taxable
     * @param bool $taxable Deprecated. This field is not used.
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;
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
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
