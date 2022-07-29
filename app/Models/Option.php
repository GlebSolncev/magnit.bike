<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

/**
 *
 */
class Option extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * @var string[]
     */
    public $translatable = ['title'];

    /**
     * @var string[]
     */
    protected $fillable = [
        'slug'
    ];

    /**
     * @return BelongsTo
     */
    public function groups(){
        return $this->belongsTo(GroupOption::class, 'group_option_id', 'id');
    }
}
