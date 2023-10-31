<?php

namespace App\Domains\Clippings\Templates;

class CategorizedTemplate implements ContentTemplate
{

    public function mappedData($data)
    {
        return $data;
    }

    public function buildPreview($data)
    {
        return '<html><body><h1>'. $data['title'] .'<h1></body>></html>';
    }
}