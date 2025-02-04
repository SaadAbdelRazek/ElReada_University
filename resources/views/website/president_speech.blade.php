@extends('website.master.app')
@section('content')
@section('path')
    الرئيسية / كلمة رئيس الجامعة
@endsection
<!--========================================== About Us =============================================-->
<section class="container about-us-section">
    {{-- //---------------------- --}}
    @include('website.master.uni-aside')
    <div class="content">

        <div class="box">
            <h2>رئيس الجامعة </h2>
        </div>
        <div class="instructor">
            <img src="{{asset('storage/'.$president->photo)}}" alt="instructor" />
            <div class="instructor-desc">

                <h3>الدكتور {{$president->f_name .' '. $president->l_name}}</h3>
                <h4>كلمة رئيس الجامعة  </h4>
                <p>{{$president->speech}}</p>
                {{-- <button class="ins-btn"><a href="#">كلمة رئيس الجامعة</a></button> --}}
            </div>
        </div>

    </div>

</section>
@endsection
