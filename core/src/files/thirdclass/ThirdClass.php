<?php

namespace MyClasses\thirdclass;

use MyClasses\LocalizationUtility;

/**
 * Class SecondClass
 * @package MyClasses
 */
class ThirdClass {
    public function doSomething() {
        $text = $this->callStatic(LocalizationUtility::class, 'translate', '3rdClassArgument');
        return $text;
    }
}
