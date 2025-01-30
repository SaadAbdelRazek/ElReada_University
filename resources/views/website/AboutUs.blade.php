@extends('website.master.app')
@section('content')
@section('path')
    الرئيسية / عن الجامعة
@endsection
<!--========================================== About Us =============================================-->
<section class="container about-us-section">
    {{-- //---------------------- --}}
    @include('website.master.uni-aside')
    <div class="content">
        <h2>رؤية الجامعة </h2>
        <div class="box">
            @foreach ($university_info as $vision)

            <p>
                {{$vision->vision}}
            </p>
            @endforeach
        </div>

        <div class="box">
            <h2>رسالة الجامعة
            </h2>
            <ul class="box-ul">
                @foreach ($messages as $message)

                <li>{{$message->message}}</li>
                @endforeach

            </ul>
        </div>

        <div class="box">
            <h2>أهداف الجامعة
            </h2>
            <ul class="box-ul">
                @foreach ($goals as $goal)
                    <li>{{ $goal->goals }}</li>
                @endforeach
            </ul>
        </div>

        <div class="box">
            <h2>قيم الجامعة
            </h2>
            <p>تلتزم الجامعة فى جميع أعمالها وبرامجها وأنشطتخا بترسيخ القيم التالية</p>
            <div class="fac-values">
                @foreach ($values as $value)
                <div class="circle">
                    <p class="circle-desc">{{ $value->value }}</p>
                    </div>
                    @endforeach

            </div>
        </div>
    </div>

</section>
@endsection
