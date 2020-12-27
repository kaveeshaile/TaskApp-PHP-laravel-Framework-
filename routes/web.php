<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/tasks', function () {
    $data=App\Task::all();


    return view('task')->with('tasks',$data);
    

}); 

Route::post('/saveTask','taskcontroller@store');


Route::get('/markascompleted/{id}','taskcontroller@updatetaskcompleted');

Route::get('/delete/{id}','taskcontroller@taskdelete');


Route::get('/update/{id}','taskcontroller@taskupdate');

Route::post('/updatedata','taskcontroller@taskupdatedata');