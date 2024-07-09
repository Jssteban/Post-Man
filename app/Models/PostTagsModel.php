<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTagsModel extends Model
{
    use HasFactory;
    protected $table = 'post_tag';
    protected $guarded = [];

    public function post(){
        return $this->belongsToMany(PostsModel::class , 'post_id');
    }
    public function tags(){
        return $this->belongsToMany(TagsModel::class , 'tag_id');
    }
}
