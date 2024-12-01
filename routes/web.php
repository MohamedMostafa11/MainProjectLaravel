<?php
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

/************** Job ******************/

Route::get('/jobs', function () {
    //$jobs = Job::all();
    //$jobs = Job::with('employer')->paginate(3); //to minimize the number of query
    //$jobs = Job::with('employer')->cursorPaginate(3);
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index',[
        'jobs'=> $jobs
    ]);
});

Route::get('/jobs/create', function (){
  return view('jobs.create');
});

Route::get('/job/{id}', function ($id) {
    $job=Job::find($id);
    return view('jobs.show',['job'=> $job]);
});

Route::post('/jobs',function (){
    //dd(request()->all());
    //validation...
    request()->validate([
        'title'=>'required | min:3',
        'salary'=>'required'
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');

});

/************** contact ******************/


Route::get('/contact', function () {
    return view('contact');
});
