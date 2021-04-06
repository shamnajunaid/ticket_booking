<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Theater;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result = Movie::with('theater')->paginate(10);


        return view('movies',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = Theater::get();


        return view('add_movie',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
             if ($request->has('img')) {
            //  Let's do everything here
            if ($request->file('img')->isValid()) {
                //
              
                $extension = $request->img->extension();
                $name = time();
                $request->img->storeAs('/movies', $name.".".$extension);
               
                $request['img'] =$name.".".$extension;
                $start_date = Carbon::parse($request->start_date);
                $end_date = Carbon::parse($request->end_date);
                $request['start_date'] = $start_date->toDateString();
                $request['end_date'] = $end_date->toDateString();
               
                 Movie::create($request->input());
                return redirect('/movie')->with('message','Movie Added Successfully');
            }
        }
        return redirect('/movie');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
