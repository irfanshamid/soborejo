@extends('layouts.layout', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false,
])

@section('title', 'Legal Document Details')
@section('meta_description', 'Building & Construction Services Laravel 12 Template')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb :bg="$serviceBg" title="Legal Document Details" :breadcrumbs="['Home' => route('home'), 'Legal Document Details' => '']" />

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
