<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Settings;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function() {
    Route::name('admin.')->prefix('admin')->group(fn() => [
        Route::get('/', Dashboard::class)->name('index'),
        Route::get('settings', Settings::class)->name('settings')
    ]);
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
});
