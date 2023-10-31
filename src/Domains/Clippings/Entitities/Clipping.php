<?php

namespace App\Domains\Clippings\Entitities;

class Clipping
{
    private static $data = [];

    public function __construct()
    {
    }

    public function getData()
    {
        return self::$data;
    }

    public function setData($data)
    {
        self::$data = $data;
    }
}