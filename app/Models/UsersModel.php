<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    protected $table = 'userss';
    protected $guarded = [];

    public function post(){
        return $this->hasMany(PostsModel::class , 'user_id');
    }
}
