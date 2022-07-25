<?php

namespace App\Services;


use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

/**
 *
 */
class ProductService extends AbstractService
{

    /**
     * @var Product
     */
    protected Product $model;

    /**
     * @var OptionGroupService
     */
    protected OptionGroupService $optionGroupService;

    /**
     * @param Product $model
     */
    public function __construct(Product $model, OptionGroupService $optionGroupService)
    {
        $this->model = $model;
        $this->optionGroupService = $optionGroupService;
    }

    /**
     * @return Collection
     */
    public function getOptionGroupsForFieldNova(){
        return $this->optionGroupService->getAllForRelation()->pluck('slug', 'id');
    }
}