@extends('website.master.app')
@section('content')
@section('path')
    الرئيسية | الكليات | كلمة الوكيل
@endsection
<!--========================================== About Us =============================================-->
<section class="container about-us-section">
    {{-- //---------------------- --}}
    @include('website.master.uni-aside')
    <div class="content">

        <div class="box">
            @if ($university->agent_id == $agent->id)

            <h2>وكيل الجامعة </h2>
            @else
            <h2>وكيل الكلية </h2>
            @endif
        </div>

        <div class="instructor">
            <img src="{{asset('storage/agents/'.$agent->photo)}}" alt="agent" />
            <div class="instructor-desc">

                <h3>أ.د. {{$agent->name}}</h3>
                <h4>كلمة الوكيل  </h4>
                <p>{{$agent->speech}}</p>
                {{-- <button class="ins-btn"><a href="#">كلمة رئيس الجامعة</a></button> --}}
            </div>
        </div>
            

    </div>

</section>
@endsection
