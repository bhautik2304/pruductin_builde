<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PageController;
use App\Mail\contactus;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('createForm');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/about', [PageController::class, 'AboutPage'])->name('about');
Route::get('/Brands', [PageController::class, 'Brands'])->name('Brands');
Route::get('/', [PageController::class, 'Index'])->name('Index');
Route::get('/Maisondeperfums', [PageController::class, 'Maisondeperfums'])->name('Maisondeperfums');
Route::get('/Retail', [PageController::class, 'Retail'])->name('Retail');
Route::get('/Storelocator', [PageController::class, 'Storelocator'])->name('Storelocator');

Route::get('/mailable', function () {
    $data=[
        "department_user_name"=>"Paras",
        "name"=>"bhautik",
        "Contact"=>"6358006532",
        "email"=>"abcd@gmail.com",
        "msg"=>"abara ka dabara"
    ];
    return new contactus($data);
});
