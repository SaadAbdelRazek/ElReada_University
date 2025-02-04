@extends('website.master.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/event-details.css')}}">


    <!-- Hero Section (With Background Image & Overlay) -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="event-title">{{$event->title}}</h1>
            <p class="event-date"><i class="fa-solid fa-calendar"></i> الموعد:{{$event->end_date}}</p>
            <a href="register.html" class="register-button">سجل الآن</a>
        </div>
    </section>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Event Content -->
    <div class="event-container">

        <!-- Media Section -->
        <div class="event-media">
            <img src="{{$event->photo}}" alt="صورة الحدث" class="event-image">
            <video class="event-video" controls>
                <source src="{{$event->video}}" type="video/mp4">
                متصفحك لا يدعم تشغيل الفيديو.
            </video>
        </div>

        <!-- Description & Countdown -->
        <div class="event-details">
            <h2>عن الحدث</h2>
            <p class="event-description">
                {{$event->description}}
            </p>


            <a href="{{route('event-form',$id)}}" class="register-button">سجل الآن</a>
        </div>
    </div>
<br><br>

@endsection
