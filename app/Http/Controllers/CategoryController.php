<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category.index', ['categories'=>$categories]);
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request){

        // $this->authorize('create', Hub::class);

        $validator = Validator::make(
            $request->all(),
            [
                'category_name' => 'required',
                'description' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => 400, 
                'errors' => $validator->errors(),
            ]);
        }

        $category = new Category();

        // $this->authorize('create', $hub);

        // $category->created_by = auth()->user()->id;

        $category->category_name = $request->input('category_name');
        $category->category_slug = strtolower(str_replace(' ', '-',$request->category_name));
        $category->description = $request->input('description');

        $category->save();

        session()->flash('message','Category Added Successfully');

        return redirect('category/index');

    }

    public function edit($id){
        $category = Category::find($id);

        // $this->authorize('view', $hub);

        return view('category.edit')
            ->with('category',$category);
    }

    public function update(Request $request, $id){

        $validator = Validator::make(
            $request->all(),
            [
                'category_name' => 'required',
                'description' => 'required',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false, 
                'errors' => $validator->errors()
            ], 422);
        }

        $category = Category::find($id);

        // $category->updated_by = auth()->user()->id;

        if ($request->has('category_name')) {
            $category->category_name = $request->input('category_name');
        }

        $category->category_slug = strtolower(str_replace(' ', '-',$request->category_name));

        if ($request->has('description')) {
            $category->description = $request->input('description');
        }

        // $this->authorize('update', $hub);
        
        $category->save();

        
        session()->flash('message','Category Update Successfully');
        return redirect('category/index');
    }

    public function destroy($id){

        $category = Category::find($id);

        // $this->authorize('delete', $hub);
        
        $category->delete();

        return back()->with('message','Category deleted successfully');
    }
}
