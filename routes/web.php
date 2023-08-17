<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delet();
// Route::options();

// Route::match(['get', 'post'], '/', function(){
//     return 'POST ADN GET ALLOWED';
// });

// Route::any('/welcome', function(){
//     return 'welcome';
// });

// Route::any('/welcome', 'welcome');

// Route::get('/users', function(Request $request){   get what in the user
//     dd($request);
// return null;
// });

// Route::permanentRedirect('/welcome', '/');
// Route::get('/user/{id}/{group}', function($id, $group){
//     return response ($id.'-'.$group , 200);
        
// });

// Route::get('/request-json', function(){
//     return response()->json(['name'=> 'Display Json', 'Orange', '22']);
// });

// Route::get('/request-download', function(){
//     $path = public_path().'sample.txt';
//     $name = aaray(
//         'Content-type : application/text-plain',
//     );
//     return response()->download($path, $name, $header);
// });

Route::get('/',[StudentController::class, 'index']);
    

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/student/{id}', [UserController::class, 'show']);


