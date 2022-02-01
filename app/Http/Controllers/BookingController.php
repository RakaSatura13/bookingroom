<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Hotel;

class BookingController extends Controller
{
    public function index($id,$nama)
    {
        $data = Hotel::find($id);
        return view('booking',compact('data'));
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'arrival_date' =>  'required',
            'departure_date' => 'required',
            'nama' => 'required',
            'tamu' => 'required'
        ]);

        $data = new Booking();
        $data->hotel_id=$request->id;
        $data->nama=$request->nama;
        $data->arrival_date=$request->arrival_date;
        $data->departure_date=$request->departure_date;
        $data->tamu=$request->tamu;
        $data->save();

        return redirect()->back()
                        ->with('success','Berhasil Tambah Data');
    }

    public function list()
    {
        $booking = Booking::select('hotels.nama','bookings.arrival_date','bookings.departure_date','bookings.tamu','bookings.nama as nama_tamu')->join('hotels','hotels.id','=','bookings.hotel_id')->get();
        return view('admin.booking.index',compact('booking'));
    }
}
