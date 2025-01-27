<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[PagesController::class, "index"])->name('Homepage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index',[PagesController::class, "index"])->name('donations');

Route::get('/about',[PagesController::class, "moreofus"])->name('about.us');

Route::get('/index/contact.form', [PagesController::class, 'allform'])->name('contact.form');

Route::get('/ourpartners',[PagesController::class, "helpers"])->name('our.partners');

Route::get('/donationmatters',[PagesController::class, "donmatter"])->name('donation.matters');

Route::get('/ourservice',[PagesController::class, "servicom"])->name('our.service');

Route::get('/ourservice/send.message',[PagesController::class, "send_message"])->name('send.message');

Route::get('/project', [PagesController::class, "trueproject"])->name('project');

Route::get('/donationplan', [PagesController::class, "plans"])->name('donationplan');

Route::get('/thankyou',[PagesController::class, "thank_you"])->name('thank.you');