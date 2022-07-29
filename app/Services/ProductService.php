<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;

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
    protected function getAll(): Collection
    {
        return $this->model->where([['active', '=', 1]])->get();
    }

    /**
     * @return Collection
     */
    public function getProductsForCategory(): Collection
    {
        return $this->getAll();
    }

    public function filterProducts(Collection $products, array $data): Collection
    {
        return $products->reverse()->map(function($product) use($data){
//            $product->active = $product->options->whereIn('slug', $data)->isNotEmpty();
            $product->active = $product->options->whereIn('slug', $data)->count() == count($data);

            return $product;
        });
    }

    public function getFilterByProducts(Collection $products)
    {
        $productOptions = $products->pluck('options')->flatten(1);
        $productGroups = $productOptions->flatten(1)->pluck('groups')->unique('slug');

        return $productGroups->map(function($group) use ($productOptions){
            $group->options = $group->options->map(function ($option) use ($productOptions) {
                $option->count = $productOptions->flatten(1)->where('slug', $option->slug)->count();
                return $option;
            });

            return $group;
        });
    }

}