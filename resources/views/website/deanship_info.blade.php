@extends('website.master.app')

@section('content')
@section('path')
    الرئيسية | عمادة {{ $deanship->name }}
@endsection
<!--========================================== About Us =============================================-->
<section class="container about-us-section">

    @include('website.master.uni-aside')

    <div class="content">
        {{-- <div class="box"> --}}
        {{-- <h2>قسم {{$department->name}}</h2> --}}

        {{-- </div> --}}
        <div class="box">
            <center>
                <h2>عمادة {{ $deanship->name }}</h2>
            </center>
        </div>


        <div class="instructor">
            <img src="{{ asset('storage/deanship_headers/' . $deanship->photo) }}" alt="instructor" />
            <div class="instructor-desc">
                رئيس العمادة <h3>أ.د. {{ $deanship->deanship_header }}</h3>
                <p>كلمة رئيس العمادة : <br>{{ $deanship->deanship_header_speech }}</p>
            </div>

        </div>
        <div class="box">
            <h2>عن العمادة</h2>
            <p> {{ $deanship->description }} </p>
        </div>


    </div>

</section>
<!--========================================== Footer =============================================-->
@endsection
