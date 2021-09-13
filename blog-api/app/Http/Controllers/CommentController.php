<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;

class CommentController extends Controller
{
    public function create_comment(Request $request,$id){
        $request['article_id']=$id;
        return Comment::create($request->all());
    }

    public function show_comment($id){
        $article = Article::find($id);
        $comments= Comment::where('article_id',$id)->get();
        return[$article,$comments];
    }
}
