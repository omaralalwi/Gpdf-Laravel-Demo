<?php

namespace App\Traits;

trait HasDataGenerator
{
    public function generateData($numPages = 10)
    {
        $data = [];
        for ($i = 1; $i <= $numPages; $i++) {
            $data[] = [
                'title' => "Page $i",
                'content' => "This is the content for page $i. " . str_repeat("Lorem ipsum dolor sit amet, consectetur adipiscing elit. ", 20)
            ];
        }
        return $data;
    }

}
