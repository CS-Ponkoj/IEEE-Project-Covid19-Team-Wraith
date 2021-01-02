<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use App\Blog;
class HomeController extends Controller
{
public function __construct(){
}
    public function index(){
        $client = new Client();
        $blogs=Blog::published()->get();

        $global_response=$client->request('GET', 'https://corona.lmao.ninja/v2/continents?yesterday&sort')->getBody();
        $globally=json_decode($global_response);
        return view('welcome',compact('globally','total_countries','blogs'));
    }
    public function affectedCountries(){

        $client = new Client();
        $global_response=$client->request('GET', 'https://corona.lmao.ninja/v2/continents?yesterday&sort')->getBody();
        $globally=json_decode($global_response);
        $results=[];
        $countryStatus=[];
        $response_countries = $client->request('GET', 'https://corona.lmao.ninja/v2/countries?yesterday&sort')->getBody();
        $countries = json_decode($response_countries);

        return view('affected-countries',compact('globally','countries','results','country_status'));

    }
    public function countryStatus(Request $request){
        $client = new Client();
        $global_response=$client->request('GET', 'https://corona.lmao.ninja/v2/continents?yesterday&sort')->getBody();
        $globally=json_decode($global_response);
        $response_countries = $client->request('GET', 'https://corona.lmao.ninja/v2/countries?yesterday&sort')->getBody();
        $countries = json_decode($response_countries);
        $response = $client->request('GET', 'https://corona.lmao.ninja/v2/countries/'.$request->country.'?yesterday&strict&query')->getBody();
        $results=json_decode($response);
        $response_by_country=$client->request('GET', 'https://corona.lmao.ninja/v2/historical/'.$request->country.'?lastdays=30')->getBody();
        $countryStatus=json_decode($response_by_country);

        return view('affected-countries',compact('globally','results','countries','countryStatus'));
    }
    public function about(){
        $client=new Client();
        $global_response=$client->request('GET', 'https://corona.lmao.ninja/v2/continents?yesterday&sort')->getBody();
        $globally=json_decode($global_response);
        return view('about',compact('globally'));
    }
    public function blogs(){
        $empty="";
        $blogs=Blog::published()->orderBy('created_at','asc')->paginate(3);
        return view('blog',compact('blogs','empty'));
    }
    public function searchByCategory(Category $category ){
        $empty="";
        $categoryName=$category->title;
        $blogs=$category->blogs()->published()->paginate(3);

        return view('blog',compact('blogs','categoryName','empty'));
    }
    public function singleBlog(Blog $blog){
        $blogs=Blog::with('comments.replies')->where('slug',$blog->slug)->first();

        return view('single-blog',compact('blogs'));
    }
    public function contact(){
        return view('contact');
    }
    public function blogSearch(Request $request){

        $blogs=Blog::where('title', 'LIKE',"%{$request->search}%")->paginate(3);
        $empty="";

        if($blogs->count()<1){
            $empty="No blog available with this key word!";
        }
        return view('blog',compact('blogs','empty'));
    }
    public function myProfile($id){
        $orders=Order::where('entrepreneur_id',$id)->get();
        return view('myprofile',compact('orders'));
    }
}
