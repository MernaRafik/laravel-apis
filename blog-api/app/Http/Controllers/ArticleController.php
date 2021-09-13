<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    public function find_id($id){
        return Article::find($id);
    }

    public function create(Request $request){
        return Article::create($request->all());}

    public function delete($id){
        $record = Article::find($id);
        $record->delete();
        return"done";
    }

    public function update(Request $request,$id){
        $record = Article::find($id);
        $record->update($request->all('body'));
        return 200;
    }

    public function article_user($id){
        $user = User::find($id);
        return Article::where('user_id',$id)->get('body');
    }
}
