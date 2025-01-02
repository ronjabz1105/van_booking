<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips= Trip::paginate(10);
        

        return view('booking.index',[
            'trips'=>$trips,
           
        ]);
      
    }

    
    public function all_trips()
    {
        $trips= Trip::all();
        
      
        return view('booking.trips',[
            'trips'=>$trips,
            
           
        ]);
    }

    public function addbooking($id)
    {

        $bookings= DB::table('bookings')->where('tripId','=',$id )->where('userId', '=', Auth::user()->id )->get();
          
        $exist=$bookings->isNotEmpty();
       
       $trip = Trip::find($id);
        return view('booking.create',compact('trip','exist' ));
  
    }

    public function editbooking( $bookingId){
        
        $booking = Booking::find($bookingId);
        $trip = Trip::find($booking->tripId);
       
        // $booking =  DB::table('bookings')->join('trips','bookings.tripId', '=' ,'trips.id')->where('bookings.id', '=', $bookingId)->where('bookings.userId','=',Auth::user()->id )->get();
      

        return view('booking.edit',compact('booking','trip' ));
    }

    public function cancelbooking( $bookingId){

       // $booking->update(['status'=>0 ]);
        $data = Booking::find($bookingId);
        $data->status = 0;
        $data->save();
       return redirect('/mybookings')->with('status', 'Booking was  Cancelled');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $trip)
    {
        return view('booking.create',compact('trip'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        // $paymetnStatus=1;
        $request->validate([

            
            'tripId'=> 'required',
            'userId'=> 'required',
            'numberOfPassenger'=> 'required|int',
            'passengerName'=> 'required|string|max:225',
            'passengerEmail'=> 'required|email|max:225|lowercase',
            'passengerPhoneNumber'=> 'required',
            //'passengerPhoneNumber'=> 'required|regex:/(01)[0-9]{9}/',
            
        ]);

        Booking::create([
            
            'tripId'=> $request->tripId,
            'userId'=> $request->userId,
            'numberOfPassenger'=> $request->numberOfPassenger,
            'passengerName'=> $request->passengerName,
            'passengerEmail'=> $request->passengerEmail,
            'passengerPhoneNumber'=> $request->passengerPhoneNumber,
            
            


        ]);
       return redirect('/mybookings')->with('status', 'Booking Details Saved');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return  view('booking.show');
    }

    public function mybooking()
    {
       $bookings = DB::table('trips')->join('bookings','trips.id', '=' ,'bookings.tripId')->where('bookings.userId','=',Auth::user()->id )->get();
      
        return  view('booking.mybookings', compact('bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('booking.edit');
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request , $id)
    {

        $data= Booking::find($id);
        // $request->validate([ 
        //     'numberOfPassenger'=> 'required|integer',
        //     'passengerName'=> 'required|string|max:225',
        //     'passengerEmail'=> 'required|email|max:225|lowercase',
        //     'passengerPhoneNumber'=> 'required',
        // ]);

        $data->numberOfPassenger= $request->numberOfPassenger;
        $data->passengerName= $request->passengerName;
        $data->passengerEmail= $request->passengerEmail;
        $data->passengerPhoneNumber= $request->passengerPhoneNumber;
        $data->save();

       
       return redirect('/mybookings')->with('status', 'Booking Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }

    


}
