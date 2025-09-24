<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ConfiguracionesComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/inicial', function () {
        return view('front.inicial');
    })->name('inicial');
    Route::get('segundo',ConfiguracionesComponent::class)->name('segundo');
});

Route::middleware(['auth:sanctum', 'verified', 'permission:manage users'])
    ->get('/admin/users', function () {
        return view('admin.users');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

