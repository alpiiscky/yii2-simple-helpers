<?php
namespace alpiiscky\simplehelpers;

use yii\helpers\ArrayHelper as Ar;

class ArrayHelper extends Ar
{
    public static function mapping($array, $from, $to, $delimiter = ' - ')
    {
        $result = [];
        $value = [];
        foreach ($array as $element) {
            $key = static::getValue($element, $from);

            foreach ($to as $key2 => $item) {
                $value[$key2] = static::getValue($element, $item);
            }

            $result[$key] = implode($delimiter, $value);
        }

        return $result;
    }
}