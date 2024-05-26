<?php

namespace App\Traits;

trait HasViewDynamicParams
{
    public function getDynamicParams()
    {
        return [
            'param1' => 'first dynamic param',
            'param2' => 'second dynamic param',
            'param3' => 'third dynamic param',
            // Add more parameters as needed
        ];
    }
}
