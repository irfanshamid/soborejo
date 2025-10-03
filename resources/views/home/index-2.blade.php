@extends('layouts.layout', [
    'headerStyle' => 'py-10 header-area-space-2 bg-white',
    'headerMenuStyle' => 'main-menu-home-2',
    'headerWrapper' => true,
    'btnAreaStyle' => 'header-home-2',
    'logo' => 'dark',
    'hasFooterMarque' => true,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => true,
])

@section('title', 'Home 2')
@section('meta_description', 'Building & Construction Services Laravel 12 Template')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Hero Section   S T A R T =====-->
    <x-hero.hero-section-2 />

    <!--===== Marque Section    S T A R T =====-->
    <x-marques.marque-section-2 />

    <!--===== About Section   S T A R T =====-->
    <x-about.about-section-2 />

    <!--===== Counter Section   S T A R T =====-->
    <x-counter.counter-section :style="'section-padding'" :counterData="$counterData" />

    <!--===== Service Section  Two  S T A R T =====-->
    <x-services.service-section-2 :services="$serviceHome2Data" />

    <!--===== Testimonial Section   S T A R T =====-->
    <x-testimonial.testimonial-section :testimonials="$testimonialData" />

    <!--===== Marque Section    S T A R T =====-->
    <x-marques.marque-section :marque="$marqueData" />

    <!--===== Project Section  Two   S T A R T =====-->
    <x-projects.project-section-2 :projects="$projectData" />

    <!--===== cta Section  Two  S T A R T =====-->
    <x-cta.cta-section-2 />

    <!--===== Faq Section Two   S T A R T =====-->
    <x-faq.faq-section-2 :faqs="$faqs" />
@endsection
