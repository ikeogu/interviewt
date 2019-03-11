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
Auth::routes();

Route::group(['middleware'=>['web','auth']], function()
{

    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('/home',function(){
    if(Auth::user()->role_id ==3){
        return view('dashboardu');
    }elseif(Auth::user()->role_id ==2){
        return view('dashboardm');

    }elseif(Auth::user()->role_id==1){
        $users['users'] = App\User::all();
        return view('dashboard',$users);
    }
});

//using middleware 
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
Route::match(['get', 'post'], '/adminPage/', 'HomeController@admin');

Route::get('/adminPage/','HomeController@admin');
Route::get('dashboard','Homecontroller@admin')->name('dashboard');
});

Route::group(['middleware' => 'App\Http\Middleware\ModeratorMiddleware'], function()
{
Route::match(['get', 'post'], '/moderators/', 'HomeController@moderator');
Route::get('/moderators/','HomeController@moderator');


});

Route::group(['middleware' => 'App\Http\Middleware\UserMiddleware'], function()
{
Route::match(['get', 'post'], '/forusers/', 'HomeController@user');

Route::get('/forusers/','HomeController@user');
Route::Resource('action','ActionController');
Route::put('count', 'ActionController@count')->name('count');
Route::resource('users','UserController');

});