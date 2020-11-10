<?php

#Hace referencia a la configuración asignada en el composer.json [psr-4]
namespace Text;

class Format
{
    public static function upperText($value)
    {
        return strtoupper($value);
    }

    public static function lowerText($value)
    {
        return strtolower($value);
    }
}
