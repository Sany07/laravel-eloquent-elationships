<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your App\Modelslication. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // \App\Models\Address::create([
    //     'user_id' => 1,
    //     'country' => 'bd'
    // ]);   
    //  \App\Models\Address::create([
    //     'user_id' => 2,
    //     'country' => 'bdc'
    // ]);    
    // \App\Models\Address::create([
    //     'user_id' => 1,
    //     'country' => 'bdf'
    // ]);   
    //  \App\Models\Address::create([
    //     'user_id' => 1,
    //     'country' => 'bdf'
    // ]);
    
    $users = \App\Models\User::all();

    // $users[0] -> addresses() -> create([
    //     'country' => 'nepal' ]
    // );
    $addresses = \App\Models\Address::all();
    
    return view('users.index', compact('users','addresses'));

});

Route::get('/post', function () {

//     \App\Models\tag::create([
    
//          'tag' => 'python'
//     ]);  

$post = \App\Models\post::first();
$tag = \App\Models\tag::first();

#for adding tag
$post -> tags() -> attach($tag);

#for remove tag
$post -> tags() -> detach($tag);
$post -> tags() -> sync($tag);


return view('users.index');
});
