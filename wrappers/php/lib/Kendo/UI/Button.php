<?php

namespace Kendo\UI;

class Button extends \Kendo\UI\Widget {
    public function name() {
        return 'Button';
    }

    protected function createElement() {
        $tag = $this->getProperty('tag');
        
        if (!$tag) {
            $tag = 'button';
        }
        
        return new \Kendo\Html\Element($tag);
    }

//>> Properties

    /**
    * Indicates whether the Button should be enabled or disabled. By default, it is enabled, unless a disabled="disabled" attribute is detected.
    * @param boolean $value
    * @return \Kendo\UI\Button
    */
    public function enable($value) {
        return $this->setProperty('enable', $value);
    }

    /**
    * Defines a URL, which will be used for an img element inside the Button. The URL can be relative or absolute. In case it is relative, it will be evaluated with relation to the web page URL.The img element can be added automatically by the widget, or an existing element can be used, if it has a k-image CSS class applied.
    * @param string $value
    * @return \Kendo\UI\Button
    */
    public function imageUrl($value) {
        return $this->setProperty('imageUrl', $value);
    }

    /**
    * Defines a CSS class (or multiple classes separated by spaces), which will be used for a span element inside the Button with a background image.
In case you want to use an icon from the Kendo UI theme sprite background image, you need to define two classes - k-icon and the respective icon CSS class.The span element can be added automatically by the widget, or an existing element can be used, if it has a k-sprite CSS class applied.
    * @param string $value
    * @return \Kendo\UI\Button
    */
    public function spriteCssClass($value) {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
    * Sets the click event of the Button.
    * Fires when the Button is clicked with the mouse, touched on a touch device, or ENTER (or SPACE) is pressed while the Button is focused.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Button
    */
    public function click($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('click', $value);
    }


//<< Properties

    /**
    * Defines the tag, which the Button will render.
    * @param string $value
    * @return \Kendo\UI\Button
    */
    public function tag($value) {
        return $this->setProperty('tag', $value);
    }

}

?>
