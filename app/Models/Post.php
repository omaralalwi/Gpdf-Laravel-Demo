<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Omaralalwi\LexiTranslate\Traits\LexiTranslatable;

class Post extends Model
{
    use HasFactory,LexiTranslatable;

    protected $fillable = [
        'title',
        'description',
        'meta_description',
        'image',
        'created_at',
        'updated_at',
    ];

    protected $translatableFields = ['title', 'description'];

}
