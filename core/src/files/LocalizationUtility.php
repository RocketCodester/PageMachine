<?php

namespace MyClasses;

class LocalizationUtility
{

    static function translate(string $toTranslate)
    {
        $toTranslate = "translating " . $toTranslate;
        return $toTranslate;
    }
}