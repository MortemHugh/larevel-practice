<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    //ORM
    /** 
     * Fetching users
     */ 
    // $users = User::where('id', 2)->first();
    /** 
     * Creating users
     */ 
    // $users = User::create([
    //     'name' => 'New User',
    //     'email' => 'newsample@gmail.com',
    //     'password' => 'password',
    // ]);

    /** 
     * Updating users
     */ 
    // //fetch first the data
    // $user = User::find(11);
    // //updating
    // $user->update([
    //     'email' => 'newupdates@gmail.com',
    // ]);

    /**
     * Deleting the data
     */
    // $user = User::find(11);
    // $user->delete();

    /**
     * Fetching all user
     */ 
    // $users = User::all();

    /**
     * Creating with encrypted password
     */
    // $user = User::create([
    //     'name'=> 'ricky Intal',
    //     'email'=> 'rickyintal@sample.com',
    //     'password'=> bcrypt('pasword'),
    // ]);


    

    // dd($users);
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
