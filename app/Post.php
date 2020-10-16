<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','description','user_id'];//to solve
//mass assignment problem i say to the user u can't fill with data anything ecxept title and description

public function user (){
    return $this->belongsTo(User::class);
}

}
