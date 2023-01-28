<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// CARA ROUTING

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', fn() => view('home')); //7.4

// Route::view('/', 'welcome', ['appName' => 'Laravel8']);

Route::get('/', HomeController::class)->name('home');

Route::middleware('auth')->group(function(){
  Route::get('profile/{identifier}', ProfileInformationController::class);
  Route::resource('tasks', TasksController::class);
  Route::get('contact', [ContactController::class, 'create']);
  Route::post('contact', [ContactController::class, 'store']);
  Route::get('users', [UserController::class, 'index'])->name('users.index');
  Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');
  Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function(){
  Route::get('register', [RegistrationController::class, 'create'])->name('register');
  Route::post('register', [RegistrationController::class, 'store'])->name('register');
  Route::get('login', [LoginController::class, 'create'])->name('login');
  Route::post('login', [LoginController::class, 'store'])->name('login');
});