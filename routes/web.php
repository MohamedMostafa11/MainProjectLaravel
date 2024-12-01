<?php
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    //$jobs = Job::all();
    //$jobs = Job::with('employer')->paginate(3); //to minimize the number of query
    //$jobs = Job::with('employer')->cursorPaginate(3);
    $jobs = Job::with('employer')->simplePaginate(3);
    return view('jobs',[
        'jobs'=> $jobs
    ]);
});

Route::get('/job/{id}', function ($id) {
    $job=Job::find($id);
    return view('job',['job'=> $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
