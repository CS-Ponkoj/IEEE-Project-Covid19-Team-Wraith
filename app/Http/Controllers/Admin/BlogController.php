<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Catagory;
use App\Blog;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    protected $uploadPath;
    public function __construct(){
    }
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $onlyTrashed=null;
        if($request->get('status')&&$request->get('status')=='trash'){
            $posts=Blog::onlyTrashed()->orderBy('created_at','desc')->paginate(5);
            $onlyTrashed=True;
            $postCount=Blog::onlyTrashed()->count();
        }
        elseif($request->get('status')&&$request->get('status')=='published'){
            $posts=Blog::published()->orderBy('created_at','desc')->paginate(5);
            $postCount=Blog::published()->count();
        }
        elseif($request->get('status')&&$request->get('status')=='draft'){
            $posts=Blog::where('published_at',0)->orderBy('created_at','desc')->paginate(5);
            $postCount=Blog::where('published_at',0)->count();
        }

        else{
           $posts=Blog::orderBy('created_at','desc')->paginate(5);
           $onlyTrashed=False;
           $postCount=Blog::count();
        }

        $counts=[
            'all'       =>Blog::count(),
            'trashed'   =>Blog::onlyTrashed()->count(),
            'published' =>Blog::published()->count(),
            'draft'     =>Blog::where('published_at',0)->count()
        ];
        return view('backend.blog.index',compact('posts','onlyTrashed','postCount','counts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog)
    {
        return view('backend.blog.create',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BlogRequest $request)
    {

        $data           =$this->handleRequest($request);
        $slugarray      =explode(" ", $request->title);
        $slug           =implode("-", $slugarray);
        $data['slug']   = $slug;
        if($request->submitbutton){
            $data['published_at']=1;
        }
        elseif($request->submitdraftbutton){
            $data['published_at']=0;
        }


        Blog::create($data);
        return redirect('admin/blogs')->with('status','The Blog has been successfully added !');
    }
    private function handleRequest($request){
        $data=$request->all();
        if( $request->hasFile('image')){

            $image              =$request->file('image');
            $filename           =$image->getClientOriginalName();
            $uploadPath         =public_path('uploads');
            $destinationPath    =$uploadPath;
            $successUploaded=$image->move($destinationPath, $filename);

            $data['image']=$filename;

        }
        return $data;
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
        $blog=Blog::findOrFail($id);
       return view('backend.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\BlogRequest $request, $id)
    {

        $post=Blog::findOrFail($id);
        $oldImage=$post->image;
        if($oldImage!=$post->image);
        $this->removeImage($oldImage);
        $data=$this->handleRequest($request);
        if($request->submitbutton){
            $data['published_at']=1;
        }
        elseif($request->submitdraftbutton){
            $data['published_at']=0;
        }
        $post->update($data);
        return redirect('admin/blogs')->with('status','The Blog has been successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=Blog::findOrFail($id);
       $post->delete();
       return redirect('admin/blogs')->with('trash',['The blog has been successfully deleted !',$id]);
    }
    public function restore($id){
        $post=Blog::withTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->back()->with('status', 'The post has been restroed!');
    }
    public function forceDestroy($id){
        $post=Blog::withTrashed()->findOrFail($id);
        $post->forceDelete();
        $this->removeImage($post->image);
        return redirect('admin/blogs?status=trash')->with('status', 'The blog has been permanantly deleted!');
    }
    private function removeImage($image){
        $uploadPath         =public_path('uploads');
        $destinationPath    =$uploadPath;
        $imagePath     =$uploadPath .'/'.$image;
        $extention     =substr(strrchr($image,'.'),1);


        if($imagePath && file_exists(public_path('uploads').'/'.$image)) unlink($imagePath);

    }
}
