<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Ticket_booking;
use Validator;
use Carbon\Carbon;
use PDF;
use Mail;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Movie::with('theater.timings')->get();

        
        return response()->json(['status' => 'success', 'result' => $result], 200);

    }
    public function book_ticket(Request $request)
    {
         $rules = [
                'name'=>'required',
                'email'=>'required',
                'movie_id'=>'required',
                'time_id'=>'required',
                'booking_date'=>'required'
        ];



        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return response()->json(['status' => 'fail',  'msg' => ($validator->errors())], 200);

        }else{
            $date = Carbon::parse($request->booking_date);
               
                $request['booking_date'] = $date->toDateString();
                
            $id = Ticket_booking::create($request->all())->id;
            $item = Ticket_booking::with('movie.theater','time')->find($id);
            $data['email']=$item->email;
            $data['name']=$item->name;
            $data['movie_name']=$item->movie->title;
            $data['theater_name']=$item->movie->theater->name;
            $data['time']=$item->time->show_time;
             $pdf = PDF::loadView('ticket', $data);

    
        
        Mail::send('ticket', $data, function($message)use($data, $pdf) {
            $message->to($data['email'])
                    ->subject('Ticket')
                    ->attachData($pdf->output(), "Ticket.pdf");
        });

        }
    }

    
}
