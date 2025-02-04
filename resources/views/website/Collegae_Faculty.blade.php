@extends('website.master.app')

@section('content')
@section('path')
الرئيسية | الكليات | كلية {{$college->name}}
@endsection
    <!--========================================== About Us =============================================-->
    <section class="container about-us-section">

        @include('website.master.uni-aside')

        <div class="content">
            <div class="box">
                <h2>كلية {{$college->name}}</h2>

            </div>
            <div class="box">
                <h2>عميد الكلية</h2>
            </div>
            <div class="instructor">
                <img src="{{asset('storage/deans/'. $college->dean->photo)}}" alt="instructor" />
                <div class="instructor-desc">
                    <h3>{{$college->dean->name}}</h3>
                    <p>عميد كلية {{$college->name}}</p>
                    <button class="ins-btn"><a href="{{route('college_dean',$college->dean->id)}}">تفاصيل</a></button>

                </div>
            </div>

            <section class="colleges news">
                <h1>الأقسام</h1>
                <div class="slider">
                    <div class="slider-inner">
                        <div class="slider-item">
                            @foreach ($college->department as $department)

                            <a href="{{route('department_info',$department->id)}}">
                                <div class="card">
                                    <img src="{{asset('storage/departments/'. $department->photo)}}" alt=" {{$department->name}}">
                                    <div class="card-content">
                                        <h3>{{$department->name}}</h3>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </section>

            <div class="box">
                <h2>عن الكلية
                </h2>

                    <p> {{$college->description}}</p>


            </div>
            <div class="box">
                <h2>رؤية الكلية
                </h2>
                <p>{{$college->vision}}</p>

            </div>
            <div class="box">
                <h2>رسالة الكلية
                </h2>
                <p>{{$college->message}}</p>

            </div>




        </div>

    </section>
    <!--========================================== Footer =============================================-->
    @endsection
