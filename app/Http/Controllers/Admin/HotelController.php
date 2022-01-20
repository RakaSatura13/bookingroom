<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotel = Hotel::all();
        return view('admin.hotel.index',compact('hotel'));
    }

    public function add()
    {
        return view('admin.hotel.add');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'alamat' => 'required',
            'rating' => 'required',
            'review' => 'required',
            'foto' => 'required',
            'foto.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG'
        ]);

        if($request->hasFile('foto')) {
            foreach($request->file('foto') as $file)
            {
                $name = uniqid() . '_' . time(). '.' .$file->getClientOriginalName();
                $file->move(public_path().'/img/photo/', $name);
                $data[] = $name;
            }

            $file = new Hotel();
            $file->nama=$request->nama;
            $file->alamat=$request->alamat;
            $file->rating=$request->rating;
            $file->review=$request->review;
            $file->foto = json_encode($data);
            $file->save();
        }

        return redirect()->route('hotel')
                        ->with('success','Berhasil Tambah Data');
    }

    public function edit($id)
    {
        $data = Hotel::find($id);
        return view('admin.hotel.edit',compact('data'));
    }

    public function update(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'alamat' => 'required',
            'rating' => 'required',
            'review' => 'required',
        ]);

        if($request->hasFile('foto')) {
            foreach($request->file('foto') as $file)
            {
                $name = uniqid() . '_' . time(). '.' .$file->getClientOriginalName();
                $file->move(public_path().'/img/photo/', $name);
                $data[] = $name;
            }

            $file = Hotel::find($request->id);
            $file->nama=$request->nama;
            $file->alamat=$request->alamat;
            $file->rating=$request->rating;
            $file->review=$request->review;
            $file->foto = json_encode($data);
            $file->update();
        }else{
            $file = Hotel::find($request->id);
            $file->nama=$request->nama;
            $file->alamat=$request->alamat;
            $file->rating=$request->rating;
            $file->review=$request->review;
            $file->update();
        }

        return redirect()->route('hotel')
                        ->with('success','Berhasil Tambah Data');
    }

    public function delete($id)
    {
        $data = Hotel::find($id);
        $data->delete();
        return redirect()->route('hotel')
                        ->with('success','Berhasil Hapus Data');
    }
}
