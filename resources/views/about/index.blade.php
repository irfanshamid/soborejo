@extends('layouts.layout', [
    'headerWrapper' => true,
    'hasFooterMarque' => true,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => true,
])

@section('title', 'Tentang Kami')
@section('meta_description', 'Profil PT Soborejo — perusahaan general contractor dan jasa konstruksi Indonesia untuk proyek gedung, bangunan, dan industri.')
@section('meta_keywords', 'PT Soborejo, tentang Soborejo, perusahaan general contractor, perusahaan konstruksi Indonesia')
@section('canonical', route('about.index'))

@section('content')
    <!--===== Breadcrumb Section    S T A R T =====-->
    <x-common.breadcrumb title="About Us" :breadcrumbs="['Home' => route('home'), 'About Us' => '']" />

    <!--===== About Section  S T A R T =====-->
    <x-about.about-section />

    <!--===== Feature Section  S T A R T =====-->
    <x-features.feature-section :features="$featureData" />

    <!--===== Marque Section  S T A R T =====-->
    <x-marques.marque-section :marque="$marqueData" />

    <!--===== Video Section  S T A R T =====-->
    <x-video.video-section :style="'section-padding'" />

    <!--===== Counter Section  S T A R T =====-->
    <x-counter.counter-section :style="'pt-0'" :hasCounterText="true" :counterData="$counterData" />
@endsection
