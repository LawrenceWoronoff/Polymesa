<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\FontController;
use App\Http\Controllers\Admin\DictionaryController;
use App\Http\Controllers\Admin\CryptoController;




use App\Http\Controllers\Customer\DashboardController;
use App\Http\Controllers\Customer\StatisticController;
use App\Http\Controllers\Customer\MediaController;
use App\Http\Controllers\Customer\ProfileController;




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


Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
//Language Translation

// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');



// ============= Guest Mode Routes ============= //
Route::get('/', [HomeController::class, 'root']);
Route::get('/donate', [HomeController::class, 'donate']);

// ============= Admin Role Routes ============= //
Route::get('/users',   [UserController::class, 'index'])->name('user-list');
Route::get('/users/add',     [UserController::class, 'create'])->name('users/add');
Route::post('/users/store',     [UserController::class, 'store'])->name('users/store');
Route::get('/users/edit/{id}',     [UserController::class, 'edit'])->name('users/edit');
Route::post('/users/update/{id}',     [UserController::class, 'update'])->name('users/update');
Route::post('/users/changeStatus',     [UserController::class, 'changeStatus'])->name('users/changeStatus');
Route::post('/users/destroy/{id}',    [UserController::class, 'destroy'])->name('users/destroy');


Route::get('/categories',   [CategoryController::class, 'index']);
Route::post('/categories/add',   [CategoryController::class, 'create'])->name('categories/add');
Route::post('/categories/getInfo',   [CategoryController::class, 'getInfo'])->name('categories/getInfo');
Route::post('/categories/destroy',   [CategoryController::class, 'destroy'])->name('categories/destroy');

Route::get('/subcategories/{id}',    [CategoryController::class, 'subcategoryIndex'])->name('subcategories');
Route::post('/subcategories/destroy',    [CategoryController::class, 'destroy_subcategory'])->name('subcategories/destroy');
Route::post('/subcategories/add',    [CategoryController::class, 'subcategory_add'])->name('subcategories/add');

Route::get('/cryptos',                 [CryptoController::class, 'index']);
Route::post('/cryptos-add',            [CryptoController::class, 'addCrypto'])->name('cryptos/add');
Route::post('/cryptos/destroy/{id}',   [CryptoController::class, 'destroy'])->name('cryptos/destroy');

Route::get('/tags',                 [TagController::class, 'index']);
Route::post('/tags-add',            [TagController::class, 'addFeaturedTag'])->name('tags/add');
Route::post('/tags/destroy/{id}',   [TagController::class, 'destroy'])->name('tags/destroy');

Route::get('/settings',             [SettingController::class, 'index']);
Route::post('/settings/update',     [SettingController::class, 'update'])->name('settings/update');

Route::get('/tags/english-dictionary',   [DictionaryController::class, 'english'])->name('english-dictionary');
Route::get('/tags/serbian-dictionary',   [DictionaryController::class, 'serbian'])->name('serbian-dictionary');
Route::get('/tags/spanish-dictionary',   [DictionaryController::class, 'spanish'])->name('spanish-dictionary');
Route::get('/tags/french-dictionary',   [DictionaryController::class, 'french'])->name('french-dictionary');


Route::get('/admin-fonts',  [FontController::class, 'index']);

// ============= Customer Role Routes ============= //
Route::get('/user-dashboard',   [DashboardController::class, 'index']);
Route::get('/user-statistics',  [StatisticController::class, 'index']);
Route::get('/upload',           [MediaController::class, 'upload']);

Route::get('/contacts-profile', [ProfileController::class, 'index'])->name('contacts-profile');
Route::get('/contacts-profile-edit', [ProfileController::class, 'edit'])->name('contacts-profile-edit');
Route::post('/contacts-profile/update', [ProfileController::class, 'update'])->name('contacts-profile/update');


Route::get('/community-voting', [MediaController::class, 'voting']);

