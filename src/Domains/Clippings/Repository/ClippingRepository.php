<?php

namespace App\Domains\Clippings\Repository;

use App\Domains\Clippings\Entitities\Clipping;

class ClippingRepository
{
    public function __construct
    (
        private Clipping $model,
    )
    {
    }

    public function create($data)
    {
        return $this->model->setData($data);
    }

    public function update($data)
    {
        return $this->model->setData($data);
    }

    public function getClipping()
    {
        return $this->model->getData();
    }

    public function delete($id)
    {
        return $this->model->setData([]);
    }

    public function createOrUpdate($data)
    {
        if (isset($data['_id']) && isset($data['draft'])) {
            return $this->create($data);
        }

        return $this->update($data);
    }
}