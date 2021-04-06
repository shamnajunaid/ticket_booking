<?php

namespace App\Http\Controllers;

use App\Models\Theater;
use App\Models\Theater_time;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;

class TheaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $result = Theater::with('timings')->paginate(2);


        return view('theaters',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_theater');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:theaters,name',
            
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {

           // print_r($validator->errors());die;
           
              return Redirect::back()->withErrors($validator);
        }
        $id = Theater::create($request->input())->id;
        if($id){
            $time = $request->time;
            foreach ($time as $tim) {
                Theater_time::create(['theater_id'=>$id,'show_time'=>$tim]);
            }
        }

        return redirect('/theater')->with('message','Theater Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function show(Theater $theater)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function edit(Theater $theater)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theater $theater)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theater  $theater
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theater $theater)
    {
        //
    }
}
