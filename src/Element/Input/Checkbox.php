<?php
namespace Sirius\Input\Element\Input;

use Sirius\Input\Element\Input as BaseInput;
use Sirius\Input\Specs;

class Checkbox extends BaseInput
{
    /**
     * Value of the hidden input field
     */
    const DEFAULT_VALUE = 'default_value';

    /**
     * Value of the checkbox
     */
    const CHECKED_VALUE = 'checked_value';

    protected function getDefaultSpecs()
    {
        return array(
            Specs::WIDGET => 'checkbox'
        );
    }

    function setUncheckedValue($val = null) {
        $this[Specs::UNCHECKED_VALUE] = (string) $val;
        return $this;
    }

    function getUncheckedValue() {
        return isset($this[Specs::UNCHECKED_VALUE]) ? $this[Specs::UNCHECKED_VALUE] : null;
    }

    function setCheckedValue($val = null) {
        $this[Specs::CHECKED_VALUE] = (string) $val;
        return $this;
    }

    function getCheckedValue() {
        return isset($this[Specs::CHECKED_VALUE]) ? $this[Specs::CHECKED_VALUE] : null;
    }

}
