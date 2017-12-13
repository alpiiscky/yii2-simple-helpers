<?php

namespace alpiiscky\simplehelpers;

class RegularHelper
{
    /**
     *  Выполняет проверку на соответствие регулярному выражению
     *
     * $expression = '%^([a-zA-Z0-9-]+)(/([a-zA-Z0-9-]+))?$%', $input = $pathInfo = $request->getPathInfo() - проверка корректности url (UrlRuleInterface)
     *
     * @param $expression
     * @param $input
     * @return mixed
     */
    public static function pregMatch($expression, $input)
    {
        preg_match($expression, $input, $matches);
        return $matches;
    }
}