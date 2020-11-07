<?php

namespace bahaeddine\larocco;
use Parsedown;

class MarkdownParser
{
    public static function parse($string)
    {
        // $parsedown = new Parsedown();

        // return $parsedown->text($string);

        return \Parsedown::instance()->text($string);
    }
}