<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/AboutUs', \App\Http\Livewire\AboutUs::class);
Route::get('/', \App\Http\Livewire\Home::class);
Route::get('/NewAudio', \App\Http\Livewire\NewAudio::class);
Route::get('/Video', \App\Http\Livewire\Video::class);
Route::get('/ENews', \App\Http\Livewire\ENews::class);
Route::get('/Gospel', \App\Http\Livewire\Gospel::class);
Route::get('/Cover', \App\Http\Livewire\Cover::class);
Route::get('/ContactUs', \App\Http\Livewire\ContactUs::class);