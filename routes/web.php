<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
Route::get('/', [HomeController::class, 'index']);


// Route::get('/', [WelcomeController::Class, 'welcome'])->name('welcome');

// Route::view('post','post');

// Route::get('/post/firstpage', function () {
//     return view('firstpost');
// });


// Route::get('/post/{id}', function(string $id){
//     return "Post $id";
// });

// Route::get('/data/{id?}', function($id = null){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// });



// Route::get('/data/{id?}/{commentid?}', function($id = null, string $comment){
//     if($id){
//         return "<h1>Post $id . $comment</h1>" ;
//     }else{
//         return "<h1>Post null";
//     }
// });

// Route::get('/data/{id?}', function($id = null){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// });


// Route::get('/data/{id}', function($id = null){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// })->whereNumber('id');

// Route::get('/data/{id}', function($id = null){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// })->whereAlpha('id');

// Route::get('/data/{id}', function($id = null){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// })->whereAlphaNumeric('id');

// Route::get('/data/{id}', function($id = null){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// })->whereIn('id',['movie', 'song', 'painting']);

// Route::get('/data/{id}', function($id = null){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// })->where('id','[a-zA-Z0-9]+'); //Regular Expresion

// Route::get('/data/{id}/comment/{comment}', function($id = null, string $commnet){
//     if($id){
//         return "<h1>Post $id";
//     }else{
//         return "<h1>Post null";
//     }
// })->where('id','[a-zA-Z]+')->whereAlpha('comment');


Route::get('/page', function(){
    return view('page');
})->name('page');

// Route::get('/about', function(){
//     return view('about');
// })->name('about');

Route::get('/post', function(){
    return view('post');
})->name('myPost');


// Route::get('/about', function(){
//     return view('about');
// })->name('about');

// Route::redirect('/about','/test',301);
// Route::redirect('/about','/test');


// Route::get('/users', function(){
//     $name = 'Users page';
//     return view('users')->with('user',$name)->with('city','Delhi');

//     return view('users')->withUser($name)->withCity('Delhi');


// })->name('users');

// Route::get('/users', function(){
//     $name = 'Users page';
//     return view('users',[
//         'user' =>$name,
//         'city' => '']);
// })->name('users');

// Route::prefix('page')->group(function(){
//     Route::get('/post/{id}', function(){
//         return "<h1>Page Post </h1>";
//     });

//     Route::get('/data/{id?}', function(){
//         return "<h1>data Post </h1>";
//     });
// });

// Route::get('/user/{id}',[UserController::class,'showUser'])->name('users');
// Route::get('/showBlock/{id}',[UserController::class,'showBlock'])->name('showBlock');


Route::controller(userController::class)->group(function(){
    Route::get('/user/{id}','showUser')->name('users');
    Route::get('/show','show')->name('show');
    Route::get('/singleUser/{id}','singleUser')->name('singleUser');
    Route::get('/showBlock/{id}','showBlock')->name('showBlock');
    Route::get('/addUser','addUser')->name('addUser');
    Route::get('/updateUser','updateUser')->name('updateUser');
    Route::get('/deleteUser/{id}','deleteUser')->name('deleteUser');
    Route::get('/updateUsers/{id?}','updateUsers')->name('updateUsers');
    Route::post('/insertUser','insertUser')->name('insertUser');
    Route::post('/update/{id}','update')->name('update');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('home', 'index')->name('home');
    Route::get('about-us', 'about')->name('about');
    Route::get('service', 'service')->name('service');
    Route::get('product', 'product')->name('product');
    Route::get('project', 'project')->name('project');
    Route::get('contact-us', 'contact')->name('contact-us');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-detail', 'blogDetail')->name('blog-detail');
    Route::post('/submitForm','submitForm')->name('submitForm');
});



// Route::resource('users', UsersController::class);
Route::resource('users', UsersController::class)->names(['create' => 'userCreate']);


Route::fallback(function(){
    // return "<h1>Ham Pe To Hai na</h1>";
    return render_view('404');
});