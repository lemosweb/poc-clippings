<?php

namespace App\Domains\Clippings\Factories;

use App\Domains\Clippings\Templates\AlwaysOnTemplate;
use App\Domains\Clippings\Templates\CategorizedTemplate;
use App\Domains\Clippings\Templates\ContentTemplate;
use App\Domains\Clippings\Templates\CscTemplate;
use App\Domains\Clippings\Templates\DefaultTemplate;
use App\Domains\Clippings\Templates\DescriptiveTemplate;
use App\Domains\Clippings\Templates\TextTemplate;
use Exception;

class TemplateFactory
{
    public function createTemplateDTO($templateType): ContentTemplate
    {

        switch ($templateType) {
            case 'default':
                return new DefaultTemplate();
            case 'csc':
                return new CscTemplate();
            case 'categorized':
                return new CategorizedTemplate();
             case 'descriptive':
                return new DescriptiveTemplate();
             case 'text':
                return new TextTemplate();
             case 'always-on':
                return new AlwaysOnTemplate();
             default:
                throw new Exception('Template not Found', 400);
        }
    }
}