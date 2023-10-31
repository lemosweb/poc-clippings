<?php

namespace App\Domains\Clippings\Service;

use App\Domains\Clippings\Templates\AlwaysOnTemplate;
use App\Domains\Clippings\Templates\CategorizedTemplate;
use App\Domains\Clippings\Templates\DescriptiveTemplate;
use App\Domains\Clippings\Templates\TextTemplate;
use App\Domains\Clippings\Repository\ClippingRepository;
use App\Domains\Clippings\Templates\CscTemplate;
use App\Domains\Clippings\Templates\DefaultTemplate;
use App\Domains\Clippings\Repository\TemplateRepository;
use App\Domains\Clippings\Factories\TemplateFactory;

class ClippingService
{
    public function __construct(
        private ClippingRepository     $repository,
        private TemplateRepository     $templateRepository,
        private TemplateFactory        $templateFactory
    )
    {
    }

    private function getTemplateData($data)
    {
        $templateType = $this->templateRepository->getTemplateTypeById($data['template_id']);
        $templateDTO = $this->templateFactory->createTemplateDTO($templateType);

        return $templateDTO->mappedData($data);
    }

    public function create($data)
    {
        $data['draft'] = true;
        return $this->repository->createOrUpdate($this->getTemplateData($data));
    }

    public function update($data)
    {
        // Na última etapa o payload deve vir com a flag 'draft' como false
        $this->repository->update($this->getTemplateData($data));
    }

    public function preview($data)
    {
        $templateType = $this->templateRepository->getTemplateTypeById($data['template_id']);

        $templateDTO =  $this->templateFactory->createTemplateDTO($templateType);

        return $templateDTO->buildPreview($data);
    }
}
