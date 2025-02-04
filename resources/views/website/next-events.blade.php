@extends('website.master.app')
@section('content')

    <link rel="stylesheet" href="{{asset('css/all-events.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<section class="events-section">
    <div class="container">
        <h1 class="section-title">الأحداث القادمة</h1>
        <div class="events-grid">
            @foreach($events as $event)
            <div class="event-card">
                <div class="event-image">
                    <img src="{{$event->photo}}" alt="Event 1">
                </div>
                <div class="event-content">
                    <h2 class="event-title">{{$event->title}}</h2>
                    <p class="event-date"><i class="fa fa-calendar"></i> {{$event->end_date}}</p>
                    <a href="{{route('event-details',['id' => $event->encrypted_id])}}" class="event-button">المزيد</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
