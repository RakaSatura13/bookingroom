@extends('layouts.app')

@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">{{ $data->nama }}</h2>
            <ol class="breadcrumb">
                @foreach (json_decode($data->foto) as $image)
                    <img src="{{ url('img/photo/' . $image) }}" width="800px">
                @endforeach
            </ol>
            <h2 class="page-cover-tittle">$ {{ $data->harga }}/night</h2>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->


<!--================ Accomodation Area  =================-->
<!--================Booking Tabel Area =================-->
<section class="hotel_booking_area">
    <div class="container">
        <div class="row hotel_booking_table">
            <div class="col-md-3">
                <h2>Book<br> Your Room</h2>
            </div>
            <div class="col-md-9">
                <div class="boking_table">
                    <div class="row">
                    <form action="{{ route('storebooking') }}" class="row" method="POST">
                        @csrf
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker11'>
                                        
                                        <input type='text' class="form-control" name="arrival_date" placeholder="Arrival Date"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" name="departure_date" placeholder="Departure Date"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <div class="input-group">
                                    <select class="wide" name="tamu">
                                        <option data-display="Tamu">Tamu</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <button type="submit" class="book_now_btn button_hover">Book Now</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection