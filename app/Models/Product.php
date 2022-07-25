<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;


    /**
     *
     */
    const STATUSES_STOCK = [
        self::STOCK_NOT_AVAILABLE => 'Нет в наличии',
        self::STOCK_ON_ORDER      => 'Под заказ',
        self::STOCK_IN_STOCK      => 'В наличии',
    ];

    /**
     *
     */
    const STOCK_NOT_AVAILABLE = 'not_available';
    /**
     *
     */
    const STOCK_ON_ORDER = 'on_order';
    /**
     *
     */
    const STOCK_IN_STOCK = 'in_stock';

    /**
     * @var string[]
     */
    public $translatable = ['title', 'description'];

    protected $fillable = [
        'active',
        'slug',
        'sku',
        'image',
        'price',
        'old_price',
        'stock',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function options(){
        return $this->belongsToMany(Option::class, 'option_product', 'product_id', 'id')
            ->withPivot(['option_group_id', 'option_id']);
    }

}
