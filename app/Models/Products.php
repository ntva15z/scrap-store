<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     * @var string
     */
    protected $table = "products";

    /**
     * The primary key for the model.
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * The name field respectively in table products
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'seo_title',
        'seo_meta_keyword',
        'seo_meta_desc',
        'extension',
        'created_by',
        'updated_by',
    ];
}
