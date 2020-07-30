<?php

use App\Http\Controllers\main_controller;
use App\Http\Controllers\newscontrol;
use Illuminate\Support\Facades\Route;
use App\post;

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

/*ADMIN*/
//admin_controller
Route::get('login', function () {
    if (Session::get('user')) {
        return redirect('create');
    }
    return view('admin.admin_login');
});

Route::post('admin_login', 'control_post@admin_login');
Route::get('create', function () {
    if (!Session::get('user')) {
        return redirect('login');
    }
    return view('admin.create');
});

Route::post('create_post', 'control_post@create');
Route::get('posts', 'control_post@view_post');
Route::get('show-{id}', 'control_post@show');
Route::get('logout', 'control_post@logout_admin');
Route::get('delete_post.{id}', 'control_post@delete_post');
Route::get('messages', 'control_post@show_messages');
Route::get('delete_message-{id}', 'control_post@delete_message');


//main_controller
Route::get('/', 'main_controller@index');
Route::get('post-{id}', 'main_controller@show_post');
Route::post('message', 'main_controller@message');
Route::view('about', 'about');
Route::get('news', 'main_controller@news');
Route::post('comment', 'main_controller@comment');


Route::get('covid-19', function () {
    $recent = post::OrderBy('id', 'desc')->paginate(4);
    return view('covid', ['recents' => $recent]);
});


Route::get('search', 'newscontrol@search_news');
Route::get('search_result', 'newscontrol@search_result');
