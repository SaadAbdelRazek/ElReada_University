@extends('website.master.app')
@section('path')
الرئيسية | عن الجامعة | شعار الجامعة
@endsection
@section('content')

    <!--========================================== About Us =============================================-->
    <section class="container about-us-section">

        @include('website.master.uni-aside')

        <div class="content">
            <div class="box">
                <h2>شعار الجامعة</h2>
                <div class="slogan">
                    <img src="{{asset('storage/'. $logo)}}" alt="RiadaLogo" />
                </div>
            </div>
        </div>
    </section>
    <!--========================================== Footer =============================================-->
    <section>
        <div class="top-of-footer">
            <h2 class="top-h">الجامعة الإسلامية</h2>
            <h3 class="top-p">نظام فريد لجيل جديد</h3>
            <button class="top-btn-f">سجل الأن</button>
        </div>
    </section>
    @endsection
