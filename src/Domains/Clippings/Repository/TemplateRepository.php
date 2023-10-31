<?php

namespace App\Domains\Clippings\Repository;

use App\Domains\Clippings\Entitities\Template;

class TemplateRepository
{
    public static $templateExamples = [
        [
            'id' => 1,
            'type' => 'default'
        ],
        [
            'id' => 2,
            'type' => 'csc'
        ],
        [
            'id' => 3,
            'type' => 'descriptive'
        ],
        [
            'id' => 4,
            'type' => 'text'
        ],
        [
            'id' => 5,
            'type' => 'categorized'
        ],
        [
            'id' => 6,
            'type' => 'always-on'
        ],


    ];

    private $model;
    public function __construct()
    {
        $this->model = new Template();
    }

    public function create($data)
    {
        $this->model = $data;
    }

    public function update($data)
    {
        $this->model = $data;
    }

    public function delete($id)
    {
        $this->model = [];
    }

    public function getTemplateTypeById($id)
    {
        $result = array_filter(self::$templateExamples, fn($template) => $template['id'] == $id);
        foreach ($result as $template) {
            return $template['type'];
        }
    }
}