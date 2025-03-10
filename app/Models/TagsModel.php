<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsModel extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $guarded = [];

    public function post_tag(){
        return $this->hasMany(PostsModel::class , 'tag_id');
    }

}
