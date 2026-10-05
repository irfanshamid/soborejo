@extends('layouts.layout', [
    'headerWrapper' => true,
    'hasFooterMarque' => true,
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => true,
])

@section('title', 'Kontak')
@section('meta_description', 'Hubungi PT Soborejo untuk konsultasi general contractor, jasa kontraktor, dan proyek konstruksi di Indonesia.')
@section('meta_keywords', 'kontak PT Soborejo, jasa kontraktor Indonesia, general contractor Jakarta, general contractor Tangerang')
@section('canonical', route('contact.index'))

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb title="Contact" :breadcrumbs="['Home' => route('home'), 'Contact' => '']" />

    <!--===== contact Section    S T A R T =====-->
    <div class="contact mt-120">
        <div class="container">
            <div class="row ">
                <div class="col-lg-5">
                    <!--===== contact Info  =====-->
                    <x-contact.contact-info />
                </div>
                <div class="col-lg-7">
                    <!--===== contact Form  =====-->
                    <x-contact.contact-form-2 />
                </div>
            </div>
        </div>

        <!--===== contact Map  =====-->
        <x-contact.contact-map />
    </div>
@endsection
