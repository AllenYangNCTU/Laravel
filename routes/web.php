<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatibus laborum perspiciatis omnis maxime laboriosam similique repellendus. Aperiam tempore harum, nisi consequatur amet odio ut odit. Distinctio assumenda cupiditate autem'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatibus laborum perspiciatis omnis maxime laboriosam similique repellendus. Aperiam tempore harum, nisi consequatur amet odio ut odit. Distinctio assumenda cupiditate autem'
            ]
        ]
    ]);
});

// Route::get('/hello', function () {
//     return response('<h1>Hello world</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     dd($request->name . ' ' . $request->city);
// });

// Route::get('/search2', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });