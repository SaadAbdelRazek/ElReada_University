@extends('website/master/app')
@section('content')
    <!--========================================== Slider ==========================================-->
    <section class="section-slider">
        <div class="slide-container">
            <div class="slides">
                <!-- <div class="overlay"> -->
                    <img src="./assets/images/sliderimages/slide_1.jpg" class="active" />
                    <img src="./assets/images/sliderimages/slide_1.jpg" />
                    <img src="./assets/images/sliderimages/slide_1.jpg" />
                    <img src="./assets/images/sliderimages/slide_1.jpg" />
                    <img src="./assets/images/sliderimages/slide_1.jpg" />
                    <!-- <img src="./assets/images/sliderimages/image.png" /> -->
                    <!-- <img src="./assets/images/sliderimages/image.png" /> -->
                    <!-- <img src="./assets/images/sliderimages/image.png" /> -->

                <!-- </div> -->
            </div>

            <div class="buttons">
                <span class="prev">&#10095;</span>
                <span class="next">&#10094;</span>

            </div>

            <div class="dotsContainer">
                <div class="dot active" attr='0' onclick="switchImage(this)"></div>
                <div class="dot" attr='1' onclick="switchImage(this)"></div>
                <div class="dot" attr='2' onclick="switchImage(this)"></div>
                <div class="dot" attr='3' onclick="switchImage(this)"></div>
                <div class="dot" attr='4' onclick="switchImage(this)"></div>
            </div>

        </div>
    </section>

    <!--========================================== Swipper ==========================================-->
    <section class="news">
        <div class="container">
            <div class="card__container row swiper">
                <h1>أخبار الجامعة</h1>
                <a href="{{route('news')}}" class="btn btn-m">اظهارالكل</a>
                <div class="card__content">
                    <div class="card-list swiper-wrapper">
                        @foreach($news as $single)
                        <article class="card-item card__article swiper-slide">
                            <a href="#" class="card-link">
                                <img class="card-item__swipper card-image" src="{{asset('storage/'.$single->photo)}}" alt="Card Image"
                                    class="card-image">
                                <p class="news-title">{{$single->title}}</p>
                                <button class="card-button material-symbols-rounded"><i
                                        class="fa-solid fa-arrow-right"></i>
                                </button>
                            </a>
                        </article>
                        @endforeach
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    <i class="ri-arrow-right-s-line"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-s-line"></i>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--========================================== Parallax ==========================================-->
    <section class="parallax-section">
        <div class="container contain parallax-content">
            <h2 class="parallax-h-one">تعرف على جامعتنا</h2>
            <div id="parallax-title-s">
                <img src="assets/images/img/image2.png" alt="collage" />
                <div class="content-desc">
                    <h3>الجامعة الإسلامية</h3>
                    <p>
                        الجامعة الإسلامية بمنيسوتا، صرح علمي وأكاديمي رائد، تأسست عام 2006 م في مدينة مينيابوليس، بولاية
                        مينيسوتا الأمريكية، على يد المجلس الفقهي في الولاية (IJCM). وفق أسس علمية بحتة، تهدف إلى تعزيز
                        البحث
                        العلمي، والتميز التعليمي، في التخصصات الشرعية وغير الشرعية. لا تنتمي إلى أي حزب أو جماعة أو تيار
                        فكري أو سياسي.
                    </p>
                    <button><a href="#">إظهار الكل</a></button>
                </div>
            </div>
            <h2 class="parallax-h-two">أرقام الجامعة</h2>
            <div class="statistics-section">
                <div class="statistics">
                    <i class="fa fa-building fa-5x" aria-hidden="true"></i>
                    <p>الكليات</p>
                    <div class="statistic" data-target="500">0</div>
                </div>
                <div class="statistics">
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                    <p>الأدراريين</p>
                    <div class="statistic" data-target="120">0</div>
                </div>
                <div class="statistics">
                    <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
                    <p>الطلاب</p>
                    <div class="statistic" data-target="300">0</div>
                </div>
            </div>
        </div>
    </section>

    <!--========================================== Swipper ==========================================-->
    <section class="news" style="background-color: white">
        <div class="container">
            <div class="card__container row swiper">
                <h1> الأحداث القادمة</h1>
                <a href="{{route('news')}}" class="btn btn-m">اظهارالكل</a>
                <div class="card__content">
                    <div class="card-list swiper-wrapper">
                        @foreach($events as $event)
                            <article class="card-item card__article swiper-slide">
                                <a href="#" class="card-link">
                                    <img class="card-item__swipper card-image" src="{{asset('storage/'.$event->photo)}}" alt="Card Image"
                                         class="card-image">
                                    <p class="news-title">{{$event->title}}</p>
                                    <button class="card-button material-symbols-rounded"><i
                                            class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </a>
                            </article>
                        @endforeach
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                    <i class="ri-arrow-right-s-line"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="ri-arrow-left-s-line"></i>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    <!--========================================== Colleges ================================-->
    <section class="colleges news">
        <h1>الكليات</h1>
        <div class="slider">
            <div class="slider-inner">
                <div class="slider-item">
                <a href="#">
                    <div class="card">
                        <img src="./assets/images/colleges/Medical Symbol.webp" alt="Image 1">
                        <div class="card-content">
                            <h3>الكلية الطب</h3>
                        </div>
                    </div>
                </a>
                </div>
                <div class="slider-item">
                <a href="#">
                    <div class="card">
                        <img src="./assets/images/colleges/Medical Symbol.webp" alt="Image 1">
                        <div class="card-content">
                            <h3>الكلية الطب</h3>
                        </div>
                    </div>
                </a>
                </div>
                <div class="slider-item">
                    <a href="#">

                    <div class="card">
                        <img src="./assets/images/colleges/Medical Symbol.webp" alt="Image 1">
                        <div class="card-content">
                            <h3>الكلية الطب</h3>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="#">

                    <div class="card">
                        <img src="./assets/images/colleges/Medical Symbol.webp" alt="Image 1">
                        <div class="card-content">
                            <h3>الكلية الطب</h3>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="slider-item">
                <a href="#">
                    <div class="card">
                        <img src="./assets/images/colleges/Medical Symbol.webp" alt="Image 1">
                        <div class="card-content">
                            <h3>الكلية الطب</h3>
                        </div>
                    </div>
                 </a>
                </div>
                <div class="slider-item">
                    <a href="#">
                    <div class="card">
                        <img src="./assets/images/colleges/Medical Symbol.webp" alt="Image 1">
                        <div class="card-content">
                            <h3>الكلية الطب</h3>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>
    <!--========================================== Question And Answer ================================-->
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
            <center>
                <a href="{{route('freqQuestions')}}" class="btn btn-m">اظهارالكل</a>
            </center>
    </section>


@endsection
