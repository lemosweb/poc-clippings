<?php

namespace App\Domains\Clippings\Entitities;

class Template
{
    private $data = [];
    public function __construct()
    {
    }

    public function getdata()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
}