<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listing;
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

// Home Pages
Route::get('/', function () {
    return view('home',[
        'heading' => "Latest Listings",
        'listings' => listing::all()
    ]);
});

// Single Listing
Route::get('/listing/{id}', function ($id) {
    return view('listing',[
        'listing' => listing::find($id)
    ]);
});