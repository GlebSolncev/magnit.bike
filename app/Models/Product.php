<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Spatie\Translatable\HasTranslations;

/**
 *
 */
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

    /**
     * @var string[]
     */
    protected $fillable = [
        'active',
        'slug',
        'sku',
        'image',
        'price',
        'old_price',
        'stock',
    ];

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return BelongsToMany
     */
    public function options()
    {
        return $this->belongsToMany(Option::class, 'product_option');
    }

    public function scopeFilter(Builder $builder)
    {
        return $builder->when(request('filter'), function (Builder $q) {
            foreach (request('filter') as $group => $items) {
                $q->with('options')->whereHas('options', function ($query) use ($group, $items) {
                    $query->whereIn('slug', $items);
                    $query->with('groups')->whereHas('groups', function ($gQ) use ($group) {
                        $gQ->where('slug', $group);
                    });
                });
            }

        });
    }
}
