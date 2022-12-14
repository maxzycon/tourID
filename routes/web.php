<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\MasterDataArea\DistrictController;
use App\Http\Controllers\Admin\MasterDataArea\ProvinceController;
use App\Http\Controllers\Admin\MasterDataArea\RegencyController;
use App\Http\Controllers\Admin\MasterDataArea\VillageController;
use App\Http\Controllers\Admin\PromoController;
use App\Http\Controllers\ProfileController;
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
    return redirect("/login");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource("province",ProvinceController::class);
    Route::resource("regency",RegencyController::class);
    Route::resource("district",DistrictController::class);
    Route::resource("village",VillageController::class);
    Route::resource("promo",PromoController::class);
    Route::resource("article",ArticleController::class);
    Route::resource("destination",DestinationController::class);
});

require __DIR__.'/auth.php';
