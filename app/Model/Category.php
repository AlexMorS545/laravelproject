<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{

    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'description' 
    ];

    public function subCategories(): BelongsToMany
    {
        return $this->belongsToMany(SubCategory::class, 'categories_has_sub_categories', 'category_id', 'sub_category_id');
    }
}
