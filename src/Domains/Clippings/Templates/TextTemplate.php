<?php

namespace App\Domains\Clippings\Templates;

class TextTemplate implements ContentTemplate
{
    public function mappedData($data)
    {
        return $data;
    }

    public function buildPreview($data)
    {
        return '<h1>'. $data['data'][0]['name'] .'</h1>';
    }
}