@extends('website.master.app')
@section('content')
@section('path')
    الرئيسية | الكليات | كلمة العميد
@endsection
<!--========================================== About Us =============================================-->
<section class="container about-us-section">
    {{-- //---------------------- --}}
    @include('website.master.uni-aside')
    <div class="content">

        <div class="box">
            <h2>عميد الكلية </h2>
        </div>
        <div class="instructor">
            <img src="{{asset('storage/deans/'.$dean->photo)}}" alt="instructor" />
            <div class="instructor-desc">

                <h3>أ.د. {{$dean->name}}</h3>
                <h4>كلمة العميد </h4>
            <p>{{$dean->speech}}</p>
            </div>
        </div>




    </div>

</section>
@endsection
