@extends('website.master.app')
@section('content')
    <!--========================================== News =============================================-->
    <section class="news-section container">
        <div class="main-tit-news">
            <h2>أخـــر الأخبـــــــار</h2>
        </div>
        @foreach($news as $single)
        <div class="news-card-des">
            <div class="news-card-img">
                <img class="ns-im" src="{{asset('storage/'.$single->photo)}}" alt="NewsImage" />
            </div>
            <div class="news-crd-cnt">
                <h2 class="news-crd-title-main">{{$single->title}}</h2>
                <p class="news-card-secondary">
                    {{$single->body}}
                </p>
            </div>
        </div>
        @endforeach
    </section>
@endsection
