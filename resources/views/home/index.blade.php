@extends('layouts.layout', [
    'headerStyle' => 'py-22 header-area-space-2',
    'headerBtnStyle' => 'style3',
    'headerWrapper' => false,
    'hasFooterMarque' => false,
])

@section('title', $generalSetting->title ?? 'PT Soborejo')
@section('meta_description', $generalSetting->description ?? 'PT Soborejo — general contractor Indonesia untuk jasa konstruksi gedung, bangunan, dan proyek industri.')
@section('meta_keywords', 'PT Soborejo, Soborejo, general contractor Indonesia, jasa kontraktor Indonesia, perusahaan konstruksi Indonesia, kontraktor gedung')
@section('canonical', route('home'))

@section('content')
    <!--===== HERO =====-->
    <x-hero.hero-section :headline="$headline"/>

    <!--===== HIGHLIGHT SCOPE =====-->
    <x-features.feature-hero-section :services="$scopeOfWorkList"/>

    <!--===== ABOUT =====-->
    <x-about.about-section :vision="$vision" :mission="$mission"/>

    <!--===== OUR VALUE =====-->
    <x-features.feature-section :ourValue="$ourValue" :features="$ourValueList" />
    
    <!--===== LEGAL =====-->
    <x-services.service-section :scope="$scopeOfWork" :services="$legalDoc" />

    <!--===== SCOPE OF WORK =====-->
    <x-features.feature-scope :ourValue="$scopeOfWork" :features="$scopeOfWorkList" />

    <!--===== CLIENT =====-->
    <x-marques.marque-section :marque="$ourClientList" />

    <!--===== PROJECT =====-->
    <x-projects.project-section :projects="$projectData" />

    <!--===== Counter Section  S T A R T =====-->
    <x-counter.counter-section :counterData="$counterData" />

    <!--===== Blog Section  S T A R T =====-->
    <x-blog.blog-section :blogs="$blogData" />

    <!--===== Faq Section  S T A R T =====-->
    <x-faq.faq-section :faqs="$faqs" />

    <!--===== CONTACT INFORMATION =====-->
    <x-cta.cta-section :contact="$generalSetting"/>
@endsection
