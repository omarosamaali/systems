<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evorq Technology</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <style>
        /* تعديل الـ html و الـ body لإزالة الطول الإجباري */
        html, body {
        height: auto; /* غيرها من 100% لـ auto */
        min-height: 100%;
        background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%) !important;
        margin: 0;
        padding: 0;
        height: 120% !important;
        overflow-x: hidden; /* لمنع التمرير العرضي */
        }
        
        /* تقليل الفراغ العلوي في الـ main */
        main#main {
        margin-top: 60px !important; /* بدلاً من 80 أو 20 */
        padding-top: 0 !important;
        }
        .whatsapp_float {
            position: fixed;
            bottom: 40px;
            left: 10px;
        }

        html {
            height: 100%;
            background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%) !important;
            /* overflow: hidden !important; */
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100%;
            /* overflow: hidden !important; */
            background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%) !important;
        }

        #stars {
            width: 1px;
            height: 1px;
            background: transparent;
            animation: animStar 50s linear infinite;
        }

        #stars:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
        }

        #stars2 {
            width: 2px;
            height: 2px;
            background: transparent;
            animation: animStar 100s linear infinite;
        }

        #stars2:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 2px;
            height: 2px;
            background: transparent;
        }

        #stars3 {
            width: 3px;
            height: 3px;
            background: transparent;
            animation: animStar 150s linear infinite;
        }

        #stars3:after {
            content: " ";
            position: absolute;
            top: 2000px;
            width: 3px;
            height: 3px;
            background: transparent;
        }

        #title {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            color: #FFF;
            text-align: center;
            font-weight: 300;
            font-size: 50px;
            letter-spacing: 10px;
            margin-top: -60px;
            padding-left: 10px;
        }

        #title span {
            background: -webkit-linear-gradient(white, #38495a);
            background: linear-gradient(white, #38495a);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes animStar {
            from {
                transform: translateY(0px);
            }

            to {
                transform: translateY(-2000px);
            }
        }
    </style>
    <style>
        @font-face {
            font-family: 'Tajawal';
            src: url('http://localhost/evorq/core/public/fonts/alfont_com_AlFont_com_BoutrosART-Medium.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Tajawal', Arial, sans-serif !important;
            font-size: 19px;
        }

        #footer--bottom {
            padding: 20px;
            position: fixed;
            z-index: 999999999999;
            bottom: 0px;
            right: 5px;
        }

        .social-links a {
            background-color: #1877f2;
            text-align: center;
            align-items: center;
            justify-content: center;
            display: flex;
            margin: auto;
            padding: 0px !important;
            margin: 0px !important;
            margin-left: 5px !important;
            gap: 3px !important;
        }

        .header-dropdown .btn {
            color: white !important;
            display: flex;
            align-items: center;
            gap: 3px;
        }

        .footer-img {



            align-items: center;
            justify-content: center;
            display: flex;
            margin: auto;
            right: unset;
            transform: translateX(-50%);
            left: 50%;
            position: absolute;
            width: 100%;
            z-index: 4;
        }

        @media (max-width: 970px) {
            .footer-img {
                bottom: 0px;
            }
        }

        .footer-img-top {
            align-items: center;
            justify-content: center;
            display: flex;
            margin: auto;
            right: unset;
            transform: translateX(-50%);
            left: 50%;
            position: absolute;
            width: 457px;
            z-index: 5;
        }

        @media(max-width:700px) {
            .desktop--logo {
                display: none !important;
            }

            .mobile--menu {
                display: block !important;
            }
        }

        .mobile--menu {
            display: none;
        }

        .desktop--logo {
            display: flex;
            gap: 3px;
        }

        .mobile-logo {
            display: none;
        }

        #main-menu ul li {
            padding-top: 5px !important;
            color: rgb(0, 0, 0);
        }

        .container-top {
            position: fixed;
            top: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 0px 10px;
            z-index: 99;
        }

        @media (max-width: 567px) {
            .menu-toggle {
                top: 26px !important;
            }
        }

        .link-outer {
            font-size: 16px;
        }

        .link-outer:hover {
            text-decoration: underline;
        }

        /* حاوية القائمة */
        .lang-dropdown {
            /* position: fixed; */
            top: 25px;
            right: 100px;
            /* مسافة ليكون بجانب زر القائمة */
            z-index: 10000;
        }

        /* الزر الرئيسي */
        .lang-btn {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 6px 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 4px;
            transition: 0.3s;
            min-width: 120px;
            font-size: 15px;
        }

        .lang-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .lang-btn img {
            width: 20px;
            border-radius: 2px;
        }

        /* القائمة المنسدلة */
        .lang-menu {
            position: absolute;
            /* top: 110%; */
            left: 9;
            width: fit-content !important;
            background: #111;
            border: 1px solid rgba(255, 255, 255, 0.1);
            list-style: none;
            padding: 5px 0;
            margin: 0;
            display: none;
            /* مخفية افتراضياً */
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .lang-menu li a {
            color: white;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-size: 13px;
            transition: 0.2s;
        }

        .lang-menu li a:hover {
            background: #fff;
            color: #000;
        }

        .lang-menu li a img {
            width: 20px;
        }

        /* كلاس الإظهار */
        .lang-menu.show {
            display: block;
        }

        #footer {
            display: flex;
            position: fixed;
            bottom: 0px;
            right: 0px;
            z-index: 99999999;
            gap: 9px;
            margin: 16px;
        }

        #footer div {
            background: black;
            width: 34px;
            height: 34px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
        }

        .mobile-footer {
            z-index: 4;
            width: 100%;
        }

        @media(max-width:1050px) {
            .mobile-footer {
                margin-top: 89px;
            }
        }
    </style>
    @stack('before-styles')
    @yield('headInclude')
    @stack('after-styles')
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="overflow: hidden; z-index: 88888888;">
    <div id="stars"></div>
    <div id="stars2"></div>
    <script>
        // Generate box-shadow for stars
      function generateStars(count) {
    let shadows = [];
    for (let i = 0; i < count; i++) {
        const x = Math.floor(Math.random() * 2000);
        // تم تغيير الـ 2000 هنا إلى 1000 أو أقل لتقليل الارتفاع الإفتراضي
        const y = Math.floor(Math.random() * 1000); 
        shadows.push(`${x}px ${y}px #FFF`);
    }
    return shadows.join(', ');
}

        // Apply box-shadows to stars
        const stars1 = document.getElementById('stars');
        const stars2 = document.getElementById('stars2');
        const stars3 = document.getElementById('stars3');

        const shadows1 = generateStars(100);
        const shadows2 = generateStars(200);
        const shadows3 = generateStars(100);

        stars1.style.boxShadow = shadows1;
        stars1.querySelector = stars1.style.boxShadow;

        const afterStyle1 = document.createElement('style');
        afterStyle1.textContent = `#stars:after { box-shadow: ${shadows1}; }`;
        document.head.appendChild(afterStyle1);

        stars2.style.boxShadow = shadows2;
        const afterStyle2 = document.createElement('style');
        afterStyle2.textContent = `#stars2:after { box-shadow: ${shadows2}; }`;
        document.head.appendChild(afterStyle2);

        stars3.style.boxShadow = shadows3;
        const afterStyle3 = document.createElement('style');
        afterStyle3.textContent = `#stars3:after { box-shadow: ${shadows3}; }`;
        document.head.appendChild(afterStyle3);
    </script>
</body>

<body>
    <div class="container-top">
        <div class="">
            <div class="lang-dropdown">
                <button class="lang-btn" id="langBtn">
                    @if(app()->getLocale() == 'ar')
                    <img src="https://flagcdn.com/w20/ae.png" alt="Ar"> <span>العربية</span>
                    @else
                    <img src="https://flagcdn.com/w20/us.png" alt="En"> <span>English</span>
                    @endif
                    <i class="fa-solid fa-chevron-down"></i>
                </button>

                <ul class="lang-menu" id="langMenu">
                    <li><a href="{{ route('lang.switch', 'ar') }}">
                            <img src="https://flagcdn.com/w20/ae.png"> العربية</a>
                    </li>
                    <li><a href="{{ route('lang.switch', 'en') }}">
                            <img src="https://flagcdn.com/w20/us.png"> English</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="desktop--logo">
            <a target="_blan" class="pr-2 link-outer" href="https://evorq.online/">{{ __('messages.systems') }} <i
                    class="fa-solid fa-laptop-code"></i></a>
            <a target="_blan" class="link-outer" href="https://www.evorq.site/">{{ __('messages.hosting') }} <i
                    class="fa-solid fa-server"></i></a>
        </div>

        <div class="header-dropdown-btns">
            <img width="180px" style="min-width: 180px;" class="desktop--logo"
                src="{{ asset('assets/images/width-logo.png') }}" alt="">
            <img width="30px" class="mobile--menu" src="{{ asset('assets/images/mobile-logo.png') }}" alt="">
        </div>

    </div>
    <div>
        {{-- <img class="mx-auto w-32 mt-20 pt-14" src="{{ asset('assets/images/white-logo.png') }}" alt="">
        <h3 class="text-white text-4xl font-bold pt-5">{{ __('messages.star_experts') }}</h3> --}}
    </div>
    <div id="ui-layer">
        <!-- ui layer inner start -->
        <div class="ui-layer-inner">
            <!-- menu start -->
            <div class="fadeIn-element-2" id="menu-wrapper">
                <!-- menu button start -->
                <button class="menu-toggle lines-button mt-5 hover:mt-5" id="main-menu-caller">
                    <span class="lines"></span>
                </button>
                <!-- navigation start -->
                <div id="main-menu">
                    <div class="menu-nav-wrapper">
                        <nav class="menu-nav" style="top: -55px; position: relative;">
                            <ul>
                                <li>
                                    <img class="w-32 mt-10" src="{{ asset('assets/images/black-logo.png') }}" alt="">
                                </li>
                                <li class="">
                                    <a style="font-size: 30px; color: black !important; font-weight: 600;"
                                        class="pr-2 link-outer" href="{{ url('/') }}">
                                        {{ __('messages.home') }}
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a style="font-size: 30px; color: black !important; font-weight: 600;"
                                        class="link-outer" href="{{ route('about') }}">
                                        {{ __('messages.about') }}
                                        <i class="fa-solid fa-address-card"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a style="font-size: 30px; color: black !important; font-weight: 600;"
                                        class="link-outer" href="{{ route('contact') }}">
                                        {{ __('messages.contact') }}
                                        <i class="fa-solid fa-headset"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a target="_blank"
                                        style="font-size: 30px; color: black !important; font-weight: 600;"
                                        class="link-outer" href="https://evorq.online/login">
                                        {{ __('messages.login') }}
                                        <i class="fa-solid fa-headset"></i>
                                    </a>
                                </li>
                                <li class="mobile--menu">
                                    <a style="font-size: 30px; color: black !important; font-weight: 600;"
                                        target="_blank" class="pr-2 link-outer" href="https://evorq.online/">
                                        {{ __('messages.systems') }}
                                        <i class="fa-solid fa-laptop-code"></i>
                                    </a>
                                </li>
                                <li class="mobile--menu">
                                    <a style="font-size: 30px; color: black !important; font-weight: 600;"
                                        target="_blank" class="link-outer" href="https://www.evorq.site/">
                                        {{ __('messages.hosting') }}
                                        <i class="fa-solid fa-server"></i>
                                    </a>
                                </li>
                            </ul>
                            <div style="color: black;" class="!pb-[30px] font-bold menu credits brackets">
                                {{ __('messages.AllRightsReserved') }}
                                {{ __('messages.evorq') }}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="upper-page current" id="home">
                <div class="border-top top-position"></div>
                <div class="border-left left-position"></div>
                <div class="border-right right-position"></div>
                <div class="border-bottom bottom-position"></div>
            </div>
        </div>
    </div>

    <main id="main" class=" px-4 mx-auto max-w-screen-xl text-center mt-20 pt-14 lg:px-12 ">
        @yield('content')
        <style>
            div:where(.swal2-container).swal2-top,
            div:where(.swal2-container).swal2-center,
            div:where(.swal2-container).swal2-bottom {
                align-items: center;
                justify-content: center;
                display: flex;
                z-index: 999999999999999999999999999999999;
            }
        </style>
        <div class="container mx-auto max-w-6xl px-4 py-10">
            <div style="direction: rtl;" class="flex items-center justify-between mb-16">
                <div class="text-right">
                    <h1 class="text-3xl font-bold">ايفورك للتكنولوجيا</h1>
                    <p class="text-xl text-gray-400">الامارات العربية المتحدة, دبي</p>
                    <p class="text-xl text-gray-400">منطقة الورقاء2</p>
                </div>
                <div>
                    <img class="w-32" src="{{ asset('assets/images/white-logo.png') }}" alt="EVORQ">
                </div>
                <div class="text-left" style="direction: ltr;">
                    <h1 class="text-3xl font-bold text-white">EVORQ TECHNOLOGIES</h1>
                    <p class="text-xl text-gray-400">UAE, Dubai</p>
                    <p class="text-xl text-gray-400">Al Warqa 2</p>
                </div>
            </div>
        
            <div class="flex flex-wrap md:flex-nowrap gap-12" style="direction: rtl;">
        
                <div class="w-full md:w-1/3 text-right space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold mb-4 text-white">بيانات التواصل</h2>
                        <div class="space-y-6">
                            <div>
                                <p class="text-gray-400 mb-1">البريد الإلكتروني:</p>
                                <a href="mailto:contact@evorq.com"
                                    class="text-xl text-blue-400 font-semibold">contact@evorq.com</a>
                            </div>
                            <div>
                                <p class="text-gray-400 mb-1">تواصل عبر واتساب:</p>
                                <a href="https://wa.me/971501774477" target="_blank"
                                    class="text-xl text-green-500 font-semibold" style="direction: ltr; display: inline-block;">
                                    +971 50 177 4477
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="w-full md:w-2/3 bg-gray-900 p-8 rounded-2xl border border-gray-800 shadow-2xl">
                    <form action="{{ route('contact.send') }}"
                        method="POST"
                        style="position: relative; z-index: 99999999999999999999;"
                        class="space-y-5 text-right">
                        @csrf <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-300 mb-2">الاسم</label>
                                <input type="text" name="name" placeholder="اسمك الكريم"
                                    class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:ring-2 focus:ring-blue-500 outline-none">
                            </div>
                            <div>
                                <label class="block text-gray-300 mb-2">رقم الهاتف</label>
                                <input type="tel" name="phone" placeholder="05x xxx xxxx"
                                    class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:ring-2 focus:ring-blue-500 outline-none text-right">
                            </div>
                        </div>
        
                        <div>
                            <label class="block text-gray-300 mb-2">البريد الإلكتروني</label>
                            <input type="email" name="email" placeholder="example@mail.com"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:ring-2 focus:ring-blue-500 outline-none text-left">
                        </div>
        
                        <div>
                            <label class="block text-gray-300 mb-2">الرسالة</label>
                            <textarea name="message" rows="4" placeholder="كيف يمكننا مساعدتك؟"
                                class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 text-white focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                        </div>
        
                        <button type="submit"
                            class="w-full bg-white text-black font-bold py-4 rounded-lg hover:bg-gray-200 transition-all duration-300 shadow-lg">
                            إرسال البيانات الآن
                        </button>
                    </form>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
                <script>
                    // التأكد من وجود رسالة نجاح في السيشن
            @if(session('success'))
                Swal.fire({
                    title: 'تم الإرسال بنجاح!',
                    text: "سيتم التواصل معك خلال 48 ساعة خلال ايام العمل",
                    icon: 'success',
                    confirmButtonText: 'حسناً',
                    confirmButtonColor: '#3085d6',
                    timer: 9993000, // ستختفي تلقائياً بعد 3 ثواني
                    timerProgressBar: true,
                    didOpen: () => {
                        // تجعل التنبيه يظهر من اليمين لليسار ليتناسب مع اللغة العربية
                        document.querySelector('.swal2-container').style.direction = 'rtl';
                    }
                });
            @endif
                </script>
            </div>
        </div>
        {{-- <img class="footer-img-top" src="http://localhost/evorq/core/public/images/arab.png" alt="">
        <img class="footer-img" src="http://localhost/evorq/core/public/images/footer.png" alt=""> --}}
    </main>

<footer id="footer">
        <div>
            <a href="https://www.facebook.com/profile.php?id=61586542407035">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </div>
        <div>
            <a
                href="https://x.com/EVORQ_Tech?fbclid=IwY2xjawPYfB5leHRuA2FlbQIxMABicmlkETE0UTlHUEZ3WkhQWlZ6MzRmc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHijeE5ruqAiRX-wmtB7l7zS5i_6cGm57CFX33H8aEwct-zk_MPB53rj76kTl_aem_yo4ML8XTljV3qHXbIuKf3w">
                <i class="fa-brands fa-x"></i>
            </a>
        </div>
        <div>
            <a href="https://www.instagram.com/evorq_tech/">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
        <div>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </footer>    
    <img class="footer-img-top" src="{{ asset(path: 'assets/images/arab.png') }}" alt="">
    <img class="footer-img-top mobile-footer" src="{{ asset(path: 'assets/images/footer.png') }}" alt="">
    <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/hombre.js') }}" type="text/javascript"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const langBtn = document.getElementById('langBtn');
        const langMenu = document.getElementById('langMenu');
            langBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            langMenu.classList.toggle('show');
        });
            document.addEventListener('click', function() {
            langMenu.classList.remove('show');
        });
    });
    </script>
</body>

</html>