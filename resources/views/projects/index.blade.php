@extends('layouts.layout-detail', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false,
])

@section('title', 'Projects')
@section('meta_description', 'Building & Construction Services')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb title="Projects" :breadcrumbs="['Home' => route('home'), 'Projects' => '']" :bg="$projectBg"/>

    <!--===== Project Section  S T A R T =====-->
    <x-projects.project-section-all :projects="$projectData" />
@endsection
