@extends('layouts.app')

@section('content')
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Accomodation</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Accomodation</li>
            </ol>
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
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker11'>
                                        <input type='text' class="form-control" placeholder="Arrival Date"/>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" placeholder="Departure Date"/>
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
                                    <select class="wide">
                                        <option data-display="Adult">Adult</option>
                                        <option value="1">Old</option>
                                        <option value="2">Younger</option>
                                        <option value="3">Potato</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <select class="wide">
                                        <option data-display="Child">Child</option>
                                        <option value="1">Child</option>
                                        <option value="2">Baby</option>
                                        <option value="3">Child</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book_tabel_item">
                                <div class="input-group">
                                    <select class="wide">
                                        <option data-display="Child">Number of Rooms</option>
                                        <option value="1">Room 01</option>
                                        <option value="2">Room 02</option>
                                        <option value="3">Room 03</option>
                                    </select>
                                </div>
                                <a class="book_now_btn button_hover" href="#">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Booking Tabel Area  =================-->
<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Normal Accomodation</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast,</p>
        </div>
        <div class="row accomodation_two">
            @forelse($data as $d)
            <div class="col-lg-3 col-sm-6">
                <div class="accomodation_item text-center">
                    <div class="hotel_img">
                        @foreach (json_decode($d->foto) as $image)
                        <img src="{{ url('img/photo/' . $image) }}" >
                        @endforeach
                        <img src="{{ asset('') }}/img/photo/{{ $d->foto }}" alt="">
                        <a href="{{ url('booking/'.$d->id.'/'.$d->nama) }}" class="btn theme_btn button_hover">Book Now</a>
                    </div>
                    <a href="#"><h4 class="sec_h4">{{ $d->nama }}</h4></a>
                    <h5>{{ $d->harga }}<small>/night</small></h5>
                </div>
            </div>
            @empty 

            @endforelse
        </div>
    </div>
</section>
@endsection