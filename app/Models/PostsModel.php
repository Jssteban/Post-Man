<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = [];

    public function categories(){
        return $this->belongsTo(CategoriesModel::class);
    }

    public function user(){
        return $this->belongsTo(UsersModel::class);
    }
    public function post_tag(){
        return $this->hasMany(PostTagsModel::class , 'post_id');
    }
}
