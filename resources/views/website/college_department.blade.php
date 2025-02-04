@extends('website.master.app')

@section('content')
@section('path')
الرئيسية | كلية {{$college->name}}|  قسم {{$department->name}}
@endsection
    <!--========================================== About Us =============================================-->
    <section class="container about-us-section">

        @include('website.master.uni-aside')

        <div class="content">
            {{-- <div class="box"> --}}
                {{-- <h2>قسم {{$department->name}}</h2> --}}

            {{-- </div> --}}
            <div class="box">
                <h2>كلمة رئيس القسم</h2>
            </div>
            <div class="instructor">
                <img src="{{asset('storage/department_header/'. $department->head->photo)}}" alt="instructor" />
                <div class="instructor-desc">
                    <h3>الدكتور {{$department->head->name}}</h3>
                    <p>{{$department->head->speech}}</p>


                </div>
            </div>



            <div class="box">
                <h2>عن القسم
                </h2>

                    <p> {{$department->description}}</p>


            </div>
            <div class="box">
                <h2>رؤية القسم
                </h2>
                <p>{{$department->vision}}</p>

            </div>
            <div class="box">
                <h2>رسالة القسم
                </h2>
                <p>{{$department->message}}</p>

            </div>




        </div>

    </section>
    <!--========================================== Footer =============================================-->
    @endsection
