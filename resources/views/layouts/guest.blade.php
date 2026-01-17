<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evorq Technology</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <style>
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

<body style="z-index: 88888888;">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <script>
        // Generate box-shadow for stars
        function generateStars(count) {
            let shadows = [];
            for (let i = 0; i < count; i++) {
                const x = Math.floor(Math.random() * 2000);
                const y = Math.floor(Math.random() * 2000);
                shadows.push(`${x}px ${y}px #FFF`);
            }
            return shadows.join(', ');
        }

        // Apply box-shadows to stars
        const stars1 = document.getElementById('stars');
        const stars2 = document.getElementById('stars2');
        const stars3 = document.getElementById('stars3');

        const shadows1 = generateStars(700);
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

    <div style="direction: ltr;" class="container-top">
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
                                    <img class="w-32 mt-10 ml-0 mr-auto"
                                        src="{{ asset('assets/images/black-logo.png') }}" alt="">
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
                <i class="fa-brands fa-twitter"></i>
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
    <img class="footer-img-top" src="http://localhost/evorq/core/public/images/arab.png" alt="">
    <img class="footer-img-top mobile-footer" src="http://localhost/evorq/core/public/images/footer.png" alt="">
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