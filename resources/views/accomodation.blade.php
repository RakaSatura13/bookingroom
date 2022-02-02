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