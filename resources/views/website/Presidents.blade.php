@extends('website.master.app')
@section('path')
الرئيسية | عن الجامعة | مجلس الجامعة
@endsection
@section('content')

    <!--========================================== About Us =============================================-->
    <section class="container about-us-section">

        @include('website.master.uni-aside')

        <div class="content">
            <div class="box">
                <h2>الهيكل التنظيمى والإدارى</h2>

            </div>
            <div class="box">
                <h2>رئيس الجامعة</h2>
            </div>
            <div class="instructor">
                <img src="{{asset('storage/'.$university_header->photo)}}" alt="instructor" />
                <div class="instructor-desc">

                    <h3>{{$university_header->f_name}}</h3>
                    <h4>كلمة رئيس جامعة الريادة </h4>
                    <p>{{$university_header->speech}}</p>
                    {{-- <button class="ins-btn"><a href="#">كلمة رئيس الجامعة</a></button> --}}
                </div>
            </div>

            <div class="box">
                <h2>أهداف المجلس
                </h2>
                <ul class="box-ul">
                    @foreach ($c_goal as $goal)

                    <li>{{$goal->Council_goals}}</li>
                    @endforeach

                </ul>
            </div>

            <div class="box">
                <h2>صلاحيات المجلس
                </h2>
                <p>
                    يعد مجلس الجامعة المكون من رئيس الجامعة والأعضاء السلطة الإدارية. إذ يتم فيه مناقشة شؤون الجامعة
                    ويضطلع برسم وتقويم السياسة العامة التي تسير عليها. واقتراح ما يكفل النهوض بها. وله على وجه الخصوص:
                </p>
                <ul class="box-ul">
                    @foreach ($c_power as $power)

                    <li>{{$power->Council_powers}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>
    <!--========================================== Footer =============================================-->
    @endsection

