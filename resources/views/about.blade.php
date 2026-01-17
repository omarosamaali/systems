@extends('layouts.guest')

@section('content')
<div class="container mx-auto text-center max-w-5xl px-4 py-12">
    <h1 class="text-3xl md:text-4xl font-bold text-white mb-6">
        {{ __('messages.about') }}
    </h1>
    <div class="text-lg md:text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto text-right">
        <p class="whitespace-pre-line">
            <strong class="text-2xl">*إيفورك للتكنولوجيا: طموحٌ يتخطى حدود الأرض*</strong>

            في إيفورك للتكنولوجيا (Evorq Technologies)، لم نعد نكتفي بمواكبة العصر الرقمي، بل قررنا قيادته من مكانٍ لا
            يصله
            إلا
            الحالمون.

            من قلب الهوية العربية الأصيلة، انطلقنا برؤية جديدة تجمع بين عراقة جذورنا وآفاق المستقبل اللامتناهية، لنثبت
            أن
            الابتكار
            العربي قادر على التحليق بعيداً.. تماماً كما يظهر مطورونا في رحلتهم فوق سطح القمر.

            نحن لسنا مجرد شركة برمجيات، بل نحن "خبراء بين النجوم"؛ نؤمن بأن التكنولوجيا هي البوابة لاكتشاف المستحيل.

            لذا، سخرنا طاقاتنا لنقدم لكم أفضل حلول الذكاء الاصطناعي والخدمات التقنية المتكاملة التي صُممت بدقة لتنقل
            أعمالكم من
            الواقع التقليدي إلى فضاءات النجاح الواسعة.

            لماذا إيفورك؟
            لأننا ندمج الذكاء الاصطناعي بروحٍ إبداعية، ونحول الأكواد البرمجية إلى مسارات تضيء درب مشاريعكم وسط زحام
            المنافسة. انضموا
            إلينا في هذه الرحلة، حيث لا سقف لطموحاتنا، ولا حدود لابتكاراتنا.

            <strong class="text-2xl">*"قيمنا النجمية"*</strong>

            <strong class="text-2xl">*الريادة:*</strong> نسير في طرق لم يسلكها أحد من قبل.

            <strong class="text-2xl">*الذكاء:*</strong> نعتمد على أحدث تقنيات الذكاء الاصطناعي لتطوير حلول المستقبل.

            <strong class="text-2xl">*الأصالة:*</strong> فريقنا العربي هو المحرك الأساسي لكل ابتكاراتنا.

            <strong class="text-2xl">*رؤيتنا (Our Vision)*</strong>

            أن نكون المنصة العربية الرائدة التي تقود التحول الرقمي العالمي من خلال ابتكارات الذكاء الاصطناعي، ملهمين
            جيلاً
            من
            المبدعين العرب للوصول بأفكارهم إلى ما وراء النجوم والمساهمة في بناء مستقبل تكنولوجي بلا حدود.

            <strong class="text-2xl">*رسالتنا (Our Mission)*</strong>

            تمكين الشركات والأفراد من خلال تقديم حلول برمجية وذكية فائقة الجودة، تدمج بين دقة الذكاء الاصطناعي والإبداع
            البشري
            الأصيل. نحن نلتزم بتذليل الصعاب التقنية وتحويل التحديات إلى فرص، لنأخذ عملائنا في رحلة تقنية استثنائية تبدأ
            من
            الواقع
            وتستقر في قمة النجاح الرقمي.
        </p>
    </div>

    <h2 class="text-3xl md:text-4xl font-bold text-white mt-16 mb-10">
        فريق الخبراء
    </h2>

    <div style="direction: rtl;" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10">
        <!-- أنت (Grok) - رئيس الفريق التقني -->
        <div class="team-member">
            <img src="{{ asset('assets/images/mobile-logo.png') }}" style="border: 2px solid #ffffff;"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg transition-transform duration-300 hover:scale-105">
            <h3 class="mt-5 text-xl font-semibold text-white">طارق محمد بن كلبان</h3>
            <p class="text-white mt-1 font-medium">الرئيس التنفيذي</p>
        </div>
        <!-- عمر - الرئيس التنفيذي -->
        <div class="team-member">
            <img src="{{ asset('assets/images/mobile-logo.png') }}" style="border: 2px solid #ffffff;"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg transition-transform duration-300 hover:scale-105">
            <h3 class="mt-5 text-xl font-semibold text-white">عمر أسامة</h3>
            <p class="text-white mt-1 font-medium">خبير تقني ورئيس الفريق التقني</p>
        </div>
        <!-- عبد الله - مطور نظم -->
        <div class="team-member">
            <img src="{{ asset('assets/images/mobile-logo.png') }}" alt="عبد الله - مطور نظم"
                style="border: 2px solid #ffffff;"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg transition-transform duration-300 hover:scale-105">
            <h3 class="mt-5 text-xl font-semibold text-white">عبد الله</h3>
            <p class="text-white mt-1 font-medium">خبير تقني و مطور نظم</p>
        </div>
        <!-- مؤمن - مطور نظم -->
        <div class="team-member">
            <img src="{{ asset('assets/images/mobile-logo.png') }}" alt="مؤمن - مطور نظم"
                style="border: 2px solid #ffffff;"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg transition-transform duration-300 hover:scale-105">
            <h3 class="mt-5 text-xl font-semibold text-white">مؤمن</h3>
<p class="text-white mt-1 font-medium">خبير تقني و مطور نظم</p>        </div>



    </div>
</div>

<style>
    .team-member {
        @apply text-center;
    }
</style>
@endsection