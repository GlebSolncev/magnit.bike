<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 *
 */
class OptionGroup extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'option_groups';


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

}
