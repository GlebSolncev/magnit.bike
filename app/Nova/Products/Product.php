<?php

namespace App\Nova\Products;

use App\Nova\Category;
use App\Nova\Resource;
use App\Services\ProductService;
use Illuminate\Container\Container;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Arr;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Spatie\NovaTranslatable\Translatable;

/**
 *
 */
class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

    /**
     * @var string
     */
    public static $group = 'Products';
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];


    /**
     * @return string
     */
    public static function label()
    {
        return 'Продукты';
    }

    /**
     * @return string
     */
    public static function singularLabel()
    {
        return 'Продукт';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Panel::make('Настройки', [
                Boolean::make('Включить', 'active'),
                Text::make('Slug', 'slug'),
                Text::make('SKU', 'sku'),
                BelongsTo::make('Категория', 'category', Category::class),

            ]),

            Panel::make('Информация', [
                Image::make('Картинка', 'image'),
                Currency::make('Старая цена', 'old_price')->min(1)->max(100000)->step(0.01),
                Currency::make('Цена', 'price')->min(1)->max(100000)->step(0.01),
                Select::make('Наличие', 'stock')
                    ->options(self::$model::STATUSES_STOCK)
                    ->displayUsing(function ($key){
                        return Arr::get(self::$model::STATUSES_STOCK, $key);
                    }),
                BelongsToMany::make('Параметры', 'options', Option::class),

            ]),

            Panel::make('Перевод', [
                Translatable::make([
                    Text::make('Наименование', 'title'),
                    Markdown::make('Описание', 'title'),
                ])
            ]),

        ];
    }

//    public $translatable = ['title', 'description'];
//
//
//'active',
//'slug',
//'sku',
//'image',
//'price',
//'old_price',
//'stock',
    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
