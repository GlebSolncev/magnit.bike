<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

/**
 *
 */
class ProductFilter extends QueryFilter
{

    public function filter(Builder $builder)
    {
        foreach (request('filter') as $groupSlug => $optionSlugs) {
            $builder->when(request('filter.' . $groupSlug), function (Builder $q) use ($groupSlug, $optionSlugs) {
                $q->with('options')->whereHas('options', function ($query) use ($groupSlug, $optionSlugs) {
                    $query->with('groups')->whereHas('groups', function ($gQ) use ($groupSlug) {
                        $gQ->where('slug', $groupSlug);
                    });
                    $query->whereIn('slug', $optionSlugs);
                });

            });
        }
//        return $this->builder->when($data, function (Builder $query) use ($data) {
//
//
////            foreach($data as $groupSlug => $optionSlugs){
////                $query
////                    ->join('product_option', 'product_id', '=', 'products.id')
////                    ->join('options', 'product_option.option_id', '=', 'options.id')
////                    ->join('group_options', 'options.group_option_id', '=', 'group_options.id')
////                    ->orWhere(function($query) use($groupSlug, $optionSlugs){
////                        $query->where('group_options.slug', $groupSlug)->where('options.slug', $optionSlugs);
////                    });
////            }
////
////            $query->select('products.*');
////            $query->groupBy('products.id')->having('products.id', '=', count($data));
////            dd($query->toSql());
//        });
    }

    /**
     * @param array $slug
     * @return mixed
     */
    public function color(array $slug)
    {
        return $this->builder->when($slug, function ($query) use ($slug) {
            $query
                ->join('product_option', 'product_id', '=', 'products.id')
                ->join('options', 'product_option.option_id', '=', 'options.id')
                ->whereIn('options.slug', $slug);
        });
    }

    /**
     * @param $search_string
     * @return mixed
     */
    public function search_field($search_string = '')
    {
        return $this->builder
            ->where('title', 'LIKE', '%' . $search_string . '%')
            ->orWhere('description', 'LIKE', '%' . $search_string . '%');
    }
}