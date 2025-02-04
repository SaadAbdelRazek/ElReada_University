@extends('website.master.app')
@section('content')
@section('path')
    الرئيسية | عن الجامعة
@endsection
<!--========================================== About Us =============================================-->
<section class="container about-us-section">
    {{-- //---------------------- --}}
    @include('website.master.uni-aside')
    <div class="content">

        <h2>تواصل معنا</h2>
        <div class="contact">
            <div class="contact-cards" @if(!$contact->phone) style="display: none;" @endif>

                <i class="fa-solid fa-phone"></i>
                <h3>رقم التواصل</h3>
                <p>{{$contact->phone ?? '-----'}}</p>
                <a href="tel:{{$contact->phone}}">اتصل</a>
            </div>

            <div class="contact-cards" @if(!$contact->email) style="display: none;" @endif>

                <i class="fa-solid fa-envelope"></i>
                <h3>البريد الإلكتروني</h3>
                <p>{{$contact->email ?? '-----'}}</p>
                <a href="mailto:{{$contact->email}}">أرسل</a>
            </div>

            <div class="contact-cards" @if(!$contact->facebook) style="display: none;" @endif>

                <i class="fa-brands fa-facebook"></i>
                <h3>فيسبوك</h3>
                <p>{{$contact->facebook ?? '-----'}}</p>
                <a href="{{$contact->facebook}}">زيارة</a>
            </div>

            <div class="contact-cards" @if(!$contact->whatsapp) style="display: none;" @endif>

                <i class="fa-brands fa-whatsapp"></i>
                <h3>واتس اب</h3>
                <p>{{$contact->whatsapp ?? '-----'}}</p>
                <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}">تواصل</a>
            </div>

            <div class="contact-cards" @if(!$contact->youtube) style="display: none;" @endif>

                <i class="fa-brands fa-youtube"></i>
                <h3>يوتيوب</h3>
                <p>{{$contact->youtube ?? '-----'}}</p>
                <a href="{{$contact->youtube}}">اذهب</a>
            </div>

            <div class="contact-cards" @if(!$contact->linkedin) style="display: none;" @endif>

                <i class="fa-brands fa-linkedin"></i>
                <h3>لنكد ان</h3>
                <p>{{$contact->linkedin ?? '-----'}}</p>
                <a href="{{$contact->linkedin}}">ذهاب</a>
            </div>

            <div class="contact-cards" @if(!$contact->address) style="display: none;" @endif>

                <i class="fa-solid fa-location-dot"></i>
                <h3>لنكد ان</h3>
                <p>{{$contact->address ?? '-----'}}</p>
                {{-- <a href="{{$contact->linkedin}}">ذهاب</a> --}}
            </div>
        </div>




    </div>

</section>
@endsection
