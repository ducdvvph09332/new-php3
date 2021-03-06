<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'parent_id',
        'name',
        'total_post',
        'status',
    ];

    public function posts(){
        return $this->belongsToMany(Post::class, 'category_post', 'category_id', 'post_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
}
