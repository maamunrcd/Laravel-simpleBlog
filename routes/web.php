<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks','TasksController@index');
Route::get('/tasks/{id}','TasksController@show');
Route::get('/posts','PostsController@index');
Route::get('/posts/{postId}','PostsController@show');
Route::get('/posts2','PostsController2@index')->name('home');
Route::get('/posts2/create','PostsController2@create');
Route::post('/posts2','PostsController2@store');
Route::get('/posts2/{id}','PostsController2@view');
Route::post('/posts2/{id}/comments','CommentsController@store');


//Custom auth
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
//Route::get('/tasks', function() {
//    //Frist weay to get all data $tasks=DB::table('tasks')->latest()->get();
//    $tasks = App\Task::all();
//return view('tasks.index', compact('tasks'));
//});
//Route::get('/tasks/{id}', function($id) {
////    /* 1 weay to get data by user id
//$task_id=$id;
// $taskid=DB::table('tasks')->find($task_id);
//
//    $taskid = App\Task::find($id);
//    return view('tasks.show', compact('taskid'));
//});
