<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    /**
     * Get all of the berita for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function berita(): HasMany
    {
        return $this->hasMany(Berita::class, 'category_id', 'id');
    }
}
