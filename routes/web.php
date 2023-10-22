<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchClassController;
use App\Http\Controllers\SchclassController as ControllersSchclassController;
use App\Http\Controllers\SchconfigController;
use App\Models\Schconfig;
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

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('/auth/login');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::prefix('/management')->name('managements.')->group(function () {
                Route::get('/home', [SchconfigController::class, 'home' ])->name('home');
                 Route::prefix('/config')->name('configs.')->group(function () {
                    Route::get('/', [SchconfigController::class, 'index'])->name('index');
                    Route::get('/config', [SchconfigController::class, 'index'])->name('config');
                    Route::get('/create', [SchconfigController::class, 'create'])->name('create');
                    Route::post('/store', [SchconfigController::class, 'store'])->name('store');
                    Route::get('/edit/{schconfig:id}', [SchconfigController::class, 'edit'])->name('edit');
                    Route::put('/edit/{schconfig:id}', [SchconfigController::class, 'update'])->name('update');
                    Route::delete('/destroy/{schconfig:id}', [SchconfigController::class, 'destroy'])->name('destroy');
                     });
                     Route::prefix('/class')->name('class.')->group(function () {
                        Route::get('/', [SchclassController::class,'index'])->name('index');
                        Route::get('/class', [SchclassController::class,'index'])->name('class');
                        Route::get('/create', [SchclassController::class,'create'])->name('create');
                        Route::post('store', [SchclassController::class,'store'])->name('store');
                        Route::get('/edit/{schclasses:id}', [SchclassController::class,'edit'])->name('edit');
                        Route::get('/edit/{schclasses:id}', [SchclassController::class,'update'])->name('update');
                        Route::delete('/destroy/{schlasses:id}', [SchclassController::class,'destroy'])->name('destroy');
                        
                    });
                });
                    
        }   );
    require __DIR__.'/auth.php';
});
