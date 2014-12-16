<?php
namespace Sirius\Forms\Traits;

use Sirius\Forms\Specs;
use Sirius\Forms\AttributesContainer;

trait HasHintTrait
{

    protected function ensureHintAttributes()
    {
        if (!isset($this[Specs::HINT_ATTRIBUTES])) {
            $this[Specs::HINT_ATTRIBUTES] = new AttributesContainer();
        }
    }

    /**
     * Retrieves the hint's text
     *
     * @return string|null
     */
    function getHint()
    {
        return isset($this[Specs::HINT]) ? $this[Specs::HINT] : null;
    }

    /**
     * Sets the hint's text
     *
     * @param string $hint            
     * @return self
     */
    function setHint($hint)
    {
        $this[Specs::HINT] = $hint;
        return $this;
    }

    /**
     * Retrieve all of the hint's attributes
     *
     * @return mixed
     */
    function getHintAttributes()
    {
        $this->ensureHintAttributes();
        return $this[Specs::HINT_ATTRIBUTES]->getAll();
    }

    /**
     * Sets multiple attributes for the hint
     *
     * @param array $attrs            
     * @return mixed
     */
    function setHintAttributes($attrs)
    {
        $this->ensureHintAttributes();
        $this[Specs::HINT_ATTRIBUTES]->set($attrs);
        return $this;
    }

    /**
     * Retrieve an attribute from the hint
     *
     * @param string $attr            
     * @return mixed
     */
    function getHintAttribute($attr)
    {
        $this->ensureHintAttributes();
        return $this[Specs::HINT_ATTRIBUTES]->get($attr);
    }

    /**
     * Set/Unset a hint attribute
     *
     * @param string $attr            
     * @param mixed|null $value            
     * @return self
     */
    function setHintAttribute($attr, $value = null)
    {
        $this->ensureHintAttributes();
        $this[Specs::HINT_ATTRIBUTES]->set($attr, $value);
        return $this;
    }

    /**
     * Adds a CSS class to the hint's "class" attribute
     *
     * @param string $class            
     * @return self
     */
    function addHintClass($class)
    {
        $this->ensureHintAttributes();
        $this[Specs::HINT_ATTRIBUTES]->addClass($class);
        return $this;
    }

    /**
     * Removes a CSS class from the hint's "class" attribute
     *
     * @param string $class            
     * @return self
     */
    function removeHintClass($class)
    {
        $this->ensureHintAttributes();
        $this[Specs::HINT_ATTRIBUTES]->removeClass($class);
        return $this;
    }

    /**
     * Toggles a CSS class to the hint's "class" attribute
     *
     * @param
     *            $class
     * @return self
     */
    function toggleHintClass($class)
    {
        $this->ensureHintAttributes();
        $this[Specs::HINT_ATTRIBUTES]->toggleClass($class);        
        return $this;
    }

    /**
     * Checks if the hint has a CSS class on the "class" attribute
     *
     * @param
     *            $class
     * @return bool
     */
    function hasHintClass($class)
    {
        $this->ensureHintAttributes();
        return $this[Specs::HINT_ATTRIBUTES]->hasClass($class);        
    }
}
