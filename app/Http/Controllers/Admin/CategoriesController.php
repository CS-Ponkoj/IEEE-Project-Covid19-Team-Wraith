<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Blog;
class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::with('blogs')->orderBy('created_at','desc')->paginate(5);
        $categoryCount=Category::count();
        return view('backend.category.index',compact('categories','categoryCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=new Category();
        return view('backend.category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CategoryRequest $request)
    {
        $data           =$request->all();
        $slugarray      =explode(" ", $request->title);
        $slug           =implode("-", $slugarray);
        $data['slug']   = $slug;
        Category::create($data);
        return redirect('/admin/categories')->with('status','category has been successfully created !' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CategoryRequest $request, $id)
    {
        $uncategorized=9;
        $category=Category::findOrFail($id);
        $user_id=Blog::where('category_id',$id)->update(['category_id'=>$uncategorized]);
        $category->update($request->all());
        return redirect('/admin/categories')->with('status','The category has been successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uncategorized=9;
        $catagory=Category::findOrFail($id);
        $category_id=Blog::where('category_id',$id)->update(['category_id'=>$uncategorized]);
        $catagory->delete();

        return redirect('/admin/categories')->with('status','The category has been successfully deleted !');
    }
}
