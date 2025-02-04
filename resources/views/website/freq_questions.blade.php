@extends('website.master.app')
@section('content')
    <h1 class="faq-title">الأسئلة الشائعة</h1>
    <section class="container faq-section">
        @foreach($freq as $question)
            <div class="faq-item">
                <button class="faq-button" onclick="toggleAnswer('main1')">
                    <p>{{$question->question}}</p>
                    <span class="plus-sign">+</span>
                </button>
                <div id="main1" class="faq-answer">
                    <p>
                        {{$question->answer}}
                    </p>
                </div>
            </div>
        @endforeach
    </section>
@endsection
