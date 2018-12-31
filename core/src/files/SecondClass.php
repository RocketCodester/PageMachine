<?php

namespace MyClasses;

/**
 * Class SecondClass
 * @package MyClasses
 */
class SecondClass {
    public function doSomething() {
        $text = $this->callStatic(LocalizationUtility::class, 'translate', '2ndClassArgument');
        return $text;
    }
}
