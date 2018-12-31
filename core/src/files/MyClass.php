<?php

namespace MyClasses;

/**
 * Class MyClass
 * @package MyClasses
 */
class MyClass {
    public function doSomething() {
//        Replace:
//        $text = LocalizationUtility::translate('foo');
//        With:
        $text = $this->callStatic(LocalizationUtility::class, 'translate', 'foo');
        return $text;
    }
}
