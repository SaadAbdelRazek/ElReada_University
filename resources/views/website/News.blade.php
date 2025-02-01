<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الأخبار</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Spartan:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!--=============== FlatIcon ===============-->
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <!--=============== Swiper CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Spartan:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <!--=============== Font Awesome ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!--=============== Swiper CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/swipper.css">
</head>

<body>
    <!--========================================== Header ===============================================-->
    <header>
        <nav class="header-top">
            <div class="header-top-right">
                <button class="top-btn">
                    <a href="#">سجل معنا</a>
                </button>
                <button class="top-btn">
                    <i></i>
                    <a href="#">الخدمات الإلكترونية</a>
                </button>
                <button class="top-btn">
                    <i></i>
                    <a href="#">الدفع الإلكترونى</a>
                </button>
            </div>
            <div class="header-top-center">
                <img class="logo" src="assets/images/logo/Logo_Uni.png" alt="logo" />
            </div>
            <div class="header-top-left">
                <form action="">
                    <div class="search-bar">
                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        <input type="text" placeholder="بحث">
                    </div>
                </form>
                <ul class="communicate">
                    <li><i></i><a href="#">الدعم الفنى</a></li>
                    <li><span>|</span></li>
                    <li><a href="#">التقويم الجامعى</a></li>
                </ul>
            </div>
            <div id="mobile">
                <i id="bar" class="fas fa-bars"></i>
            </div>
        </nav>
        <button class="menu-toggle" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
        <div class="mobile-menu" id="mobile-menu">
            <ul>
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="AboutUs.html">عن الجامعة</a></li>
                <li><a href="Colleage.html">الدراسة فى الجامعة</a></li>
                <li><a href="Event.html">الأحداث</a></li>
                <li><a href="News.html">الأخبار</a></li>
                <li><a href="#">تواصل معنا</a></li>


            </ul>
        </div>
        <div class="header-bottom">
            <nav>
                <ul class="nav-items">
                    <li class="nav-item"><a href="index.html">الرئيسية</a></li>
                    <li class="nav-item">
                        <a href="AboutUs.html">عن الجامعة</a>
                        <ul class="dropdown">
                            <li><a href="#">مجلس الجامعة</a></li>
                            <li><a href="#">رئيس الجامعة</a></li>
                            <li><a href="#">وكيل الجامعة</a></li>
                            <li><a href="#">وكالة الجامعة</a></li>
                            <li><a href="#">المجلس العلمى</a></li>
                            <li><a href="#">اللجنة الدائمة للترقيات</a></li>
                            <li><a href="#">الإدارة العامة للشؤون المالية والإدارية</a></li>
                            <li><a href="#">الشؤؤون الإدارية</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="Colleage.html">الدراسة فى الجامعة</a>
                        <ul class="dropdown">
                            <li class="nav-item">
                                <a href="Colleage.html">الكليات</a>
                                <ul class="dropdown">
                                    <li><a href="#">كلية الدراسة الإسلامية</a></li>
                                    <li><a href="#">كلية الطب</a></li>
                                    <li><a href="#">كلية العلوم</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">العمادات</a>
                                <ul class="dropdown">
                                    <li><a href="#">عمادة تقنية المعلمومات</a></li>
                                    <li><a href="#">عمادة الدراسات العليا</a></li>
                                    <li><a href="#">عمادة القبول والتسجيل</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">الوحدات الإدارية المساعدة</a>
                                <ul class="dropdown">
                                    <li><a href="#">وحدة البحث العلمى</a></li>
                                    <li><a href="#">وحدة التصوير</a></li>
                                    <li><a href="#">وحدة المتابعة</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">أعضاء هيئة التدريس</a>
                                <ul class="dropdown">
                                    <li><a href="#">كلية الهندسة</a></li>
                                    <li><a href="#">كلية الطب</a></li>
                                    <li><a href="#">كلية العلوم</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">الخطط الدراسية</a>
                                <ul class="dropdown">
                                    <li><a href="#">كلية الهندسة</a></li>
                                    <li><a href="#">كلية الطب</a></li>
                                    <li><a href="#">كلية العلوم</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">المراكز</a>
                        <ul class="dropdown">
                            <li><a href="#">مركز التدريب والتطوير</a></li>
                            <li><a href="#">مركز اللغات والترجمة</a></li>
                            <li><a href="#">المركز العلمى</a></li>
                            <li><a href="#">مركز الدراسات الأكاديمية</a></li>
                            <li><a href="#">مركز الدعوة</a></li>
                            <li><a href="#">مكتبة الكلية</a></li>
                            <li><a href="#">المكتبة الرقمية</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="#">الفروع</a></li>
                    <li class="nav-item"><a href="#">اللوائح والأنظمة</a></li>
                    <li class="nav-item"><a href="Event.html">الأحداث</a></li>
                    <li class="nav-item"><a href="News.html">الأخبار</a></li>
                    <li class="nav-item"><a href="#">تواصل معنا</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="about">
        <div class="pos-where">
            <p>الرئيسية |الأخبـــــــار</p>
        </div>
    </section>
    <!--========================================== News =============================================-->
    <section class="news-section container">
        <div class="main-tit-news">
            <h2>أخـــر الأخبـــــــار</h2>
        </div>
        <div class="news-card-des">
            <div class="news-card-img">
                <img class="ns-im" src="assets/images/news/image.png" alt="NewsImage" />
            </div>
            <div class="news-crd-cnt">
                <h2 class="news-crd-title-main">خبر جديد</h2>
                <p class="news-card-secondary">
                    زار الجامعة وفد إسلامي عربي بهدف تعزيز التعاون بين الجامعات الإسلامية وتعميق العلاقات الأكاديمية
                    والثقافية. تضمنت الزيارة عدة اجتماعات مع أعضاء هيئة التدريس والطلاب لمناقشة المبادرات المشتركة
                    والمشاريع البحثية. أعرب الوفد عن إعجابه بالبنية التحتية الحديثة للجامعة وبرامجها التعليمية المتقدمة.
                    كما تم تنظيم جولة في الحرم الجامعي لعرض المرافق والمعامل البحثية. أبدى أعضاء الوفد اهتمامًا كبيرًا
                    بتطوير برامج تبادل الطلاب والأساتذة لتعزيز الخبرات التعليمية والتواصل بين الجامعات. في ختام الزيارة،
                    تم توقيع مذكرة تفاهم لتعزيز التعاون في مجالات البحث العلمي والتعليم العالي وتبادل الخبرات
                    الأكاديمية.
                </p>
            </div>
        </div>

        <div class="news-card-des">
            <div class="news-card-img">
                <img class="ns-im" src="assets/images/news/image.png" alt="NewsImage" />
            </div>
            <div class="news-crd-cnt">
                <h2 class="news-crd-title-main">خبر جديد</h2>
                <p class="news-card-secondary">
                    زار الجامعة وفد إسلامي عربي بهدف تعزيز التعاون بين الجامعات الإسلامية وتعميق العلاقات الأكاديمية
                    والثقافية. تضمنت الزيارة عدة اجتماعات مع أعضاء هيئة التدريس والطلاب لمناقشة المبادرات المشتركة
                    والمشاريع البحثية. أعرب الوفد عن إعجابه بالبنية التحتية الحديثة للجامعة وبرامجها التعليمية المتقدمة.
                    كما تم تنظيم جولة في الحرم الجامعي لعرض المرافق والمعامل البحثية. أبدى أعضاء الوفد اهتمامًا كبيرًا
                    بتطوير برامج تبادل الطلاب والأساتذة لتعزيز الخبرات التعليمية والتواصل بين الجامعات. في ختام الزيارة،
                    تم توقيع مذكرة تفاهم لتعزيز التعاون في مجالات البحث العلمي والتعليم العالي وتبادل الخبرات
                    الأكاديمية.
                </p>
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
    <footer>

        <div class="top-footer">
            <div class="top-right">
                <h2>الروابط الهامة</h2>
                <ul>
                    <li><a href="#">تسجيل الجامعة لدى المواقع</a></li>
                    <li><a href="#">مجلة الجامعة</a></li>
                    <li><a href="#">المكتبة الرقمية</a></li>
                    <li><a href="#">صحيفة صدى الجامعة</a></li>
                    <li><a href="#">مواقع أعضاء التدريس</a></li>
                </ul>
            </div>
            <div class="top-center">
                <h2>الوصول السريع</h2>
                <ul>
                    <li><a href="#">عمادة تقنية المعلومات</a></li>
                    <li><a href="#">عمادة الدراسات العليا</a></li>
                    <li><a href="#">عمادة القبول والتسجيل</a></li>
                    <li><a href="#">عمادة شؤون الطلاب</a></li>
                    <li><a href="#">عمادة الشؤون الأكاديمية</a></li>
                    <li><a href="#">عمادة شؤون هيئة أعضاء التدريس</a></li>
                </ul>
            </div>
            <div class="top-left">
                <h2>تابعنا على </h2>
                <ul>
                    <li><a href="#"><img src="assets/images/scocialmedia/facebook.png" alt="facebook" /></a></li>
                    <li><a href="#"><img src="assets/images/scocialmedia/linkedin.png" alt="linkedin" /></a></li>
                    <li><a href="#"><img src="assets/images/scocialmedia/twitter.png" alt="twitter" /></a></li>
                    <li><a href="#"><img src="assets/images/scocialmedia/whatsapp.png" alt="whatsapp" /></a></li>
                    <li><a href="#"><img src="assets/images/scocialmedia/youtube.png" alt="youtube" /></a></li>
                </ul>
            </div>
        </div>
        <hr class="ruler">
        <div class="bottom-footer">
            <img src="assets/images/logo/Logo_Uni.png" alt="logo" />
            <ul class="item-title">
                <li><a href="#">سياسة الخصوصية</a></li>
                <li><a href="#">ملفات الارتباط</a></li>
                <li><a href="#">شروط وأحكام الخدمة</a></li>
            </ul>
            <p>جميع الحقوق محفوظة الجامعة الإسلامية © 2024 | برمجة المعلمين</p>
        </div>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/Bmenu.js"></script>
</body>

</html>