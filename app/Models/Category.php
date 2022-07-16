<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 *
 */
class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * @var string[]
     */
    public $translatable = ['title', 'description'];

    /**
     * @var string[]
     */
    protected $fillable = [
        'slug',
        'active',
        'title',
        'description'
    ];

    public function parent(){
        return $this->belongsTo(__CLASS__, 'parent_id', 'id');
    }

}
