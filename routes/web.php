<?php

use Illuminate\Support\Facades\Route;
use App\Blog;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/','HomeController@index')->name('home');
Route::get('/affected-countries','HomeController@affectedCountries')->name('affactedCountries');
Route::get('/about','HomeController@about')->name('about');
Route::POST('/corona-status','HomeController@countryStatus')->name('country-status');
Route::get('/blogs','HomeController@blogs')->name('blogs');
Route::get('/blogs/{category}','HomeController@searchByCategory')->name('searchByCategory');
Route::get('/blog/{blog}','HomeController@singleBlog')->name('single-blog');
Route::resource('/comments','CommentController');
Route::resource('/replies','ReplyController');
Route::get('/contact-us','HomeController@contact')->name('contact');
Route::POST('/blogs','HomeController@blogSearch')->name('blogs.search');
Route::get('/profile/{id}','HomeController@myProfile')->name('profile');
Auth::routes();

Route::get('/donation','TransactionController@index')->name('transaction');
Route::get('/transaction/success','TransactionController@transactionSuccess')->name('transaction.success');
Route::post('/transaction','TransactionController@store')->name('transaction.store');


//sslcommerz
Route::get('/pay', 'PublicSslCommerzPaymentController@index')->name('pay');
Route::post('/success', 'PublicSslCommerzPaymentController@success');
Route::post('/fail', 'PublicSslCommerzPaymentController@fail');
Route::post('/cancel', 'PublicSslCommerzPaymentController@cancel');
Route::post('/ipn', 'PublicSslCommerzPaymentController@ipn');

//sslcommerz





//admin routers
Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::get('/logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
});
Route::resource('/admin/blogs','Admin\BlogController');
Route::put('/admin/blogs/restore/{blog}',[
    'uses'	=>'Admin\BlogController@restore',
    'as'	=>'blog.restore'
]);

Route::delete('/admin/blogs/forceDestroy/{blog}',[
    'uses'	=>'Admin\BlogController@forceDestroy',
    'as'	=>'blog.force-destroy'
]);
Route::resource('/admin/categories','Admin\CategoriesController');
Route::put('/admin/categories/restore/{category}',[
    'uses'	=>'Admin\CategoriesController@restore',
    'as'	=>'categories.restore'
]);
Route::delete('/admin/categories/forceDestroy/{category}',[
    'uses'	=>'Admin\CategoriesController@forceDestroy',
    'as'	=>'categories.force-destroy'
]);

//donations
Route::resource('orders','OrderController');


