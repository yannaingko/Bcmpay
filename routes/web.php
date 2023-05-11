<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\ContactSearch;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\View\Components\TestComponent;

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

Route::get('/',HomeComponent::class)->name('home');

Route::get('/contact-search',ContactSearch::class)->name('contact-search');

Route::get('/research',[SearchController::class,'research'])->name('research');

Route::get('/process/{id}', [SearchController::class,'process'])->name('process');

Route::get('/transaction',[SearchController::class,'transaction'])->name('transaction');

Route::get('/search',[SearchController::class,'search'])->name('search');

Route::get('/get-user-balance', [SearchController::class, 'getUserBalance']);



// Route::get('/search',[SearchController::class,'search'])->name('search');
// Route::get('/',HomeComponent::class)->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
