<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Article;

class Comment extends Model
{
    protected $fillable = ['body','user_id','article_id'];


    public function article(){
        return $this->belongsTo(Article::class);
    }

    public function user_comment(){
        return $this->belongsTo(User::class);
    }
}
