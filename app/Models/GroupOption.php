<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 *
 */
class GroupOption extends Model
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
        'slug',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options(){
        return $this->hasMany(Option::class);
    }
}
