<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $values = strlen(trim($value));
        return $values >= $min && $values <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
