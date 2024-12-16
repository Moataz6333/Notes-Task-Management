<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Request;

Route::get('/login',[AuthController::class,'loginPage'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('user.check');
Route::get('/signUp',[AuthController::class,'signUp'])->name('user.singUp');
Route::post('/signUp',[AuthController::class,'store'])->name('user.store');
Route::get('/',[NoteController::class,'welcome'])->name('notes.welcome');
Route::get('/logout',function(Request $request){
   $user = Auth::user();

   // Set the remember_token to null
   $user->remember_token = null;
   $user->save();  // Save the changes to the database

   // Log the user out
   Auth::logout();

   // Invalidate the session and regenerate the CSRF token
   $request->session()->invalidate();
   $request->session()->regenerateToken();
   return redirect('/login');
})->name('logout')->middleware('auth');



Route::middleware('auth:sanctum')->group(function(){
   Route::get('/dashboard',[NoteController::class,'dashboard'])->name('notes.dashboard');
   Route::put('/dashboard/{note}',[NoteController::class,'done'])->name('notes.done');
Route::get('/create',[NoteController::class,'create'])->name('notes.create');
Route::get('/profile',[NoteController::class,'profile'])->name('notes.profile');
Route::get('/history',[NoteController::class,'history'])->name('notes.history');
Route::post('/history',[NoteController::class,'deleteAll'])->name('notes.deleteAll');
Route::post('/create',[NoteController::class,'store'])->name('notes.store');
Route::get('/change-password',[NoteController::class,'changePass'])->name('notes.changePass');
Route::put('/change-password',[NoteController::class,'UpdatePass'])->name('notes.NewPassword');
// tasks

Route::get('/create-tasks',[TaskController::class,'create'])->name('tasks.create');
Route::post('/save-tasks',[TaskController::class,'save'])->name('tasks.save');

Route::get('/week',[TaskController::class,'week'])->name('tasks.week');
Route::post('/update-tasks/{week}',[TaskController::class,'updateTasks'])->name('tasks.update');

Route::get('/tasks/{week}',[TaskController::class,'index'])->name('tasks.index');
Route::get('/create-tasks/{week}',[TaskController::class,'edit'])->name('tasks.edit');
Route::post('/update-week/{week}',[TaskController::class,'updateWeek'])->name('tasks.updateWeek');
Route::delete('/tasks/delete/{week}/{task}',[TaskController::class,'delete'])->name('tasks.delete');

Route::get('/edit/{note}',[NoteController::class,'edit'])->name('notes.edit');
Route::post('/edit/{note}',[NoteController::class,'update'])->name('notes.update');
Route::delete('/delete/{note}',[NoteController::class,'delete'])->name('notes.delete');
Route::get('/show/{note}',[NoteController::class,'show'])->name('notes.show');
});

