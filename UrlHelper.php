<?php
namespace alpiiscky\simplehelpers;

class UrlHelper
{
    public static function createSlug($source)
    {
        $source = trim(mb_strtolower($source));
        $translateArray = [
            "ый" => "y", "а" => "a", "б" => "b",
            "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ж" => "j",
            "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l",
            "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
            "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
            "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "",
            "ы" => "y", "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya",
            " " => "-", "." => "", "/" => "-", "_" => "-"
        ];
        $source = preg_replace('#[^a-z0-9\-]#is', '', strtr($source, $translateArray));
        return trim(preg_replace('#-{2,}#is', '-', $source));
    }
}