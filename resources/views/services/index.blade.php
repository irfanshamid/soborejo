@extends('layouts.layout-detail', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false
])

@section('title', 'Dokumen Legal')
@section('meta_description', 'Dokumen legal dan legalitas PT Soborejo sebagai perusahaan general contractor dan jasa konstruksi Indonesia.')
@section('meta_keywords', 'legalitas PT Soborejo, dokumen perusahaan kontraktor, perusahaan konstruksi Indonesia')
@section('canonical', route('services.index'))

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb :bg="$serviceBg" title="Legal Document" :breadcrumbs="['Home' => route('home'), 'Service' => '']" />

    <!--===== Service Section  S T A R T =====-->
    <x-services.service-main-section :services="$serviceData" />
@endsection
