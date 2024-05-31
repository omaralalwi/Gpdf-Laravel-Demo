<?php

namespace App\Traits;

trait HasRouteName
{
    function convertToReadable($string) {
        $string = preg_replace('/(?<!\ )[A-Z]/', ' $0', $string);
        $string = ucfirst($string);
        $string = trim($string);
        return $string;
    }
}
