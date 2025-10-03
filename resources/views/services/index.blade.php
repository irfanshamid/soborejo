@extends('layouts.layout-detail', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false
])

@section('title', 'Service')
@section('meta_description', 'Building & Construction Services Laravel 12 Template')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb :bg="$serviceBg" title="Legal Document" :breadcrumbs="['Home' => route('home'), 'Service' => '']" />

    <!--===== Service Section  S T A R T =====-->
    <x-services.service-main-section :services="$serviceData" />
@endsection
