<?php

use Illuminate\Support\Arr;
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
    return view('jobs',
        [
            'jobs' => [
                [
                    'id' => 1,
                    'title' => 'Director',
                    'salary' => '$50000',
                ],
                [
                    'id' => 2,
                    'title' => 'Programmer',
                    'salary' => '$10000',
                ],
                [
                    'id' => 3,
                    'title' => 'Teacher',
                    'salary' => '$40000',
                ],
            ],
        ]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50000',
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10000',
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40000',
        ],
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});
