<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

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

// Home page - returns a view (resources/views/welcome.blade.php)
Route::get('/', function () {
    return view('home');
});

// About page - returns a string
Route::get('/about', function () {
    return view('about');
});

// Contact page - returns a view (resources/views/contact.php)
Route::get('/contact', function () {
    return view('contact');
});

// API test - returns JSON response
Route::get('/api-test', function () {
    return ['foo' => 'bar'];
});

// Jobs (page)
Route::get('/jobs', function ()  {

    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

// Job (post)
Route::get('/job/{id}', function($id)  {

    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

