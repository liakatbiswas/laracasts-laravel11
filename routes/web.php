<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

    // return response()->json([
    //     'jobs' => [
    //         [
    //             'title' => 'Director',
    //             'salary' => '$50000',
    //         ],
    //         [
    //             'title' => 'Programmer',
    //             'salary' => '$10000',
    //         ],
    //         [
    //             'title' => 'Teacher',
    //             'salary' => '$40000',
    //         ],
    //     ],
    // ]);
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});
