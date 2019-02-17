<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['namespace' => 'Frontend'],function(){

    Route::get('frontend/about','AboutController@index')->name('frontend.about');
    Route::get('frontend/contact','ContactController@index')->name('frontend.contact');
    Route::post('sendcontact','ContactController@sendContact')->name('fronetnd.sendContact');
    Route::get('/','FrontendController@index')->name('frontend.home');
    Route::get('frontend/khulna','KhulnaController@index')->name('frontend.khulna');
    Route::get('frontend/rashahi','RashahiController@index')->name('frontend.rashahi');
   //Login Route
    Route::get('frontend/login','loginController@index')->name('frontend.login');
   //SingUp Route
    Route::get('frontend/singup','SingupController@index')->name('frontend.singup');
    Route::post('frontend/singup','SingupController@store')->name('frontend.singup.store');
   //Sylhet Route
    Route::get('frontend/sylhet','SylhetController@index')->name('frontend.sylhet');
   //Dhaka Route
    Route::get('frontend/dhaka','DhakaController@index')->name('frontend.dhaka');
    //ShoppingController
    Route::get('frontend/shopping','ShoppingController@index')->name('frontend.shopping');
    //CheckoutController
    Route::get('frontend/checkout','CheckoutController@index')->name('frontend.checkout');
    //CustomerControler
    Route::get('frontend/customer','CustomerControler@index')->name('frontend.customer');
});
Auth::routes();

// Route::get('home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['as'=>'admin.','prefix'=>'admin','namespace' => 'Admin',['middleware'=>'checkRole:admin','auth']],function(){
   
        
        Route::resource('category', 'CategoryController');
        Route::resource('contact','ContacttConroller');
        Route::resource('fooditem', 'FoodItemController');
        Route::resource('resturant', 'ResturantController');
        Route::resource('subcategory', 'SubCategoryController');
        Route::resource('about','AboutConroller');
        Route::resource('profile','ProfileContoroller');
        Route::get('order','OrderControler@index')->name('order.index');

        //DashBoardController

        Route::get('home','DashBoardController@index')->name('dashboard.index');
        
});