@extends('layouts.guest')

@section('content')
<div class="container mx-auto text-center max-w-5xl px-4 py-12">
    <h1 class="text-3xl md:text-4xl font-bold text-white mb-6">
        {{ __('messages.about_title_hero') }}
    </h1>

    <div
        class="text-lg md:text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
        <p class="whitespace-pre-line mb-6">
            {{ __('messages.about_p1') }}
        </p>
        <p class="whitespace-pre-line mb-6">
            {{ __('messages.about_p2') }}
        </p>
        <p class="whitespace-pre-line mb-6">
            {{ __('messages.about_p3') }}
        </p>
        <p class="whitespace-pre-line mb-10">
            {{ __('messages.about_p4') }}
        </p>

        <h3 style="{{ app()->getLocale() == 'ar' ? 'text-align:right;' : 'text-align: left;' }}" class="text-2xl font-bold text-white mb-4">{{ __('messages.why_evorq') }}</h3>
        <p class="mb-10">{{ __('messages.about_p5') }}</p>

        <h3 style="{{ app()->getLocale() == 'ar' ? 'text-align:right;' : 'text-align: left;' }}" class="text-2xl font-bold text-white mb-4">{{ __('messages.star_values') }}</h3>
        <ul class="space-y-4 mb-10">
            <li><strong class="text-white">{{ __('messages.leadership') }}:</strong> {{ __('messages.leadership_desc')
                }}</li>
            <li><strong class="text-white">{{ __('messages.intelligence') }}:</strong> {{
                __('messages.intelligence_desc') }}</li>
            <li><strong class="text-white">{{ __('messages.authenticity') }}:</strong> {{
                __('messages.authenticity_desc') }}</li>
        </ul>

        <h3 style="{{ app()->getLocale() == 'ar' ? 'text-align:right;' : 'text-align: left;' }}" class="text-2xl font-bold text-white mb-4">{{ __('messages.our_vision') }}</h3>
        <p class="mb-10">{{ __('messages.vision_desc') }}</p>

        <h3 style="{{ app()->getLocale() == 'ar' ? 'text-align:right;' : 'text-align: left;' }}" class="text-2xl font-bold text-white mb-4">{{ __('messages.our_mission') }}</h3>
        <p>{{ __('messages.mission_desc') }}</p>
    </div>

    <h2 class="text-3xl md:text-4xl font-bold text-white mt-16 mb-10">
        {{ __('messages.team_title') }}
    </h2>

    <div style="direction: rtl; z-index: 9999999999999999; position: relative;" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10"
        style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }};">
        <div class="team-member">
            <img src="{{ asset('assets/images/tareq.png') }}"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg border-2 border-white hover:scale-105 transition-transform">
            <h3 class="capitalize mt-5 text-xl font-normal text-white">{{ __('messages.tareq') }}</h3>
            <p class="text-gray-200 mt-1">{{ __('messages.ceo') }}</p>
        </div>

        <div class="team-member">
            <img src="{{ asset('assets/images/omar.png') }}"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg border-2 border-white hover:scale-105 transition-transform">
            <h3 class="capitalize mt-5 text-xl font-normal text-white">{{ __('messages.omar') }}</h3>
            <p class="text-gray-200 mt-1">{{ __('messages.tech_lead') }}</p>
        </div>

        <div class="team-member">
            <img src="{{ asset('assets/images/abdalla.png') }}"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg border-2 border-white hover:scale-105 transition-transform">
            <h3 class="capitalize mt-5 text-xl font-normal text-white">{{ __('messages.abdallah') }}</h3>
            <p class="text-gray-200 mt-1">{{ __('messages.sys_dev') }}</p>
        </div>

        <div class="team-member">
            <img src="{{ asset('assets/images/mobile-logo.png') }}"
                class="p-2 w-36 h-36 md:w-48 md:h-48 mx-auto rounded-full object-cover shadow-lg border-2 border-white hover:scale-105 transition-transform">
            <h3 class="capitalize mt-5 text-xl font-normal text-white">{{ __('messages.moamen') }}</h3>
            <p class="text-gray-200 mt-1">{{ __('messages.sys_dev') }}</p>
        </div>
    </div>
</div>

<style>
    .team-member {
        @apply text-center;
    }
</style>
@endsection