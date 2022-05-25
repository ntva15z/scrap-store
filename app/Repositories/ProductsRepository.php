<?php

namespace App\Repositories;

use App\Interfaces\ProductsRepositoryInterface;
use App\Models\Products;

class ProductsRepository extends BaseRepository implements ProductsRepositoryInterface
{

    /**
     * @var array
     */
    protected $fieldSearchable = [];

    /**
     * @return string
     */
    public function model()
    {
        return Products::class;
    }

    /**
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function storeArray(array $data)
    {
        return $this->makeModel()->insert($data);
    }
}
