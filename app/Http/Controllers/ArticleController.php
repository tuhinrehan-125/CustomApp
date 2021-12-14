<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Article;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('article.index', ['articles'=>$articles]);
    }

    public function create(){
        $categories = Category::all();
        return view('article.create', ['categories'=>$categories]);
    }

    public function store(Request $request){

        $validator = Validator::make(
            $request->all(),
            [
                'category_id' => 'required',
                'article_name' => 'required',
                'description' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 400, 
                'errors' => $validator->errors(),
            ]);
        }

        $article = new Article();

        // $this->authorize('create', $hub);

        // $category->created_by = auth()->user()->id;

        $article->category_id = $request->input('category_id');
        $article->article_name = $request->input('article_name');
        $article->article_slug = strtolower(str_replace(' ', '-',$request->article_name));
        $article->description = $request->input('description');

        $article->save();

        session()->flash('message','Article Added Successfully');

        return redirect('article/index');

    }

    public function edit($id){
        $article = Article::find($id);

        $categories = Category::all();

        // $this->authorize('view', $hub);

        return view('article.edit')
            ->with('article',$article)
            ->with('categories',$categories);
    }

    public function update(Request $request, $id){

        $validator = Validator::make(
            $request->all(),
            [
                'category_id' => 'required',
                'article_name' => 'required',
                'description' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false, 
                'errors' => $validator->errors()
            ], 422);
        }

        $article = Article::find($id);

        // $category->updated_by = auth()->user()->id;

        if ($request->has('category_id')) {
            $article->category_id = $request->input('category_id');
        }
        if ($request->has('article_name')) {
            $article->article_name = $request->input('article_name');
        }

        $article->article_slug = strtolower(str_replace(' ', '-',$request->article_name));

        if ($request->has('description')) {
            $article->description = $request->input('description');
        }

        // $this->authorize('update', $hub);
        
        $article->save();

        
        session()->flash('message','Category Update Successfully');
        return redirect('article/index');
    }

    public function destroy($id){

        $article = Article::find($id);

        // $this->authorize('delete', $hub);
        
        $article->delete();

        return back()->with('message','Article deleted successfully');
    }
}
