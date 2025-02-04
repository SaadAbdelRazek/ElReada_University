@extends('website.master.app')
@section('content')
@section('path')
    الرئيسية | الكليات
@endsection
    <!--========================================== Colleges =============================================-->
    <section class="college-section container">
        <div class="main-tit-college">
            <h2>الكــلــيات</h2>
        </div>

        <div class="college-items-dis">
            @foreach ($colleges as $college)

            <div class="college-card-des">
                <div class="college-crd-cnt">
                    <a class="my-col-desc" href="{{route('college_info', $college->id)}}">{{$college->name}}</a>
                </div>
            </div>
            @endforeach


        </div>
    </section>
    <!--========================================== Footer =============================================-->
    @endsection

