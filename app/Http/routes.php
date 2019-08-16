<?php

use App\Role;
use App\User;
use App\Post;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Auth;
use App\Category;


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

// route::get('relation',function(){

// 		$user = User::find(1);
// 		$role = $user->roles;
// 		echo $role->name;

// });

route::get('admin',function(){

		return view('admin.index');

});


route::group(['middleware'=>'admin'], function(){
	Route::resource('admin/users','AdminUsersController');
	Route::resource('admin/posts','AdminPostController');
});


