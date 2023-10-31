<?php

namespace App\Domains\Clippings\Templates;

interface ContentTemplate
{
    public function mappedData($data);

    public function buildPreview($data);

}