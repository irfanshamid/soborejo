@extends('layouts.layout', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false,
])

@php
    $serviceDescription = \Illuminate\Support\Str::limit(strip_tags($service->description ?? ''), 160);
    if ($serviceDescription === '') {
        $serviceDescription = 'Dokumen legal '.$service->title.' — PT Soborejo, general contractor Indonesia.';
    }
@endphp

@section('title', $service->title)
@section('meta_description', $serviceDescription)
@section('meta_keywords', $service->title.', dokumen legal PT Soborejo, perusahaan konstruksi Indonesia')
@section('canonical', route('services.details', $service->slug))
@section('og_type', 'article')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb
        :bg="$serviceBg"
        :title="$service->title"
        :breadcrumbs="['Home' => route('home'), 'Dokumen Legal' => route('services.index'), $service->title => '']"
    />

    <!--===== Service Section    S T A R T =====-->
    <section class="service1-details mt-120">
        <div class="container">
            <div class="row gy-5 gy-xl-0">
                <div class="col-lg-12">
                    <!--===== Service Details Content  S T A R T =====-->
                    <x-services.service-details-area :service="$service" />
                </div>
            </div>
        </div>
    </section>
@endsection
