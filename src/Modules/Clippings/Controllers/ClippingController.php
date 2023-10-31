<?php

namespace App\Modules\Clippings\Controllers;

use App\Domains\Clippings\Repository\ClippingRepository;
use App\Domains\Clippings\Service\ClippingService;

class ClippingController
{
    public function __construct
    (
        private readonly ClippingRepository $repository,
        private readonly ClippingService    $service
    )
    {
    }

    public function create($data)
    {
        try {
            $this->service->create($data);

            print_r($this->repository->getClipping());
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
    }


    public function preview($data)
    {
        echo $this->service->preview($data);
    }
}