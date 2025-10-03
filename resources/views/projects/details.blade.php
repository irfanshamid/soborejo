@extends('layouts.layout-detail', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false,
])

@section('title', 'Project Details')
@section('meta_description', 'Building & Construction Services Laravel 12 Template')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb :bg="$projectBg" title="Projects Details" :breadcrumbs="['Home' => route('home'), 'Projects Details' => '']" />

    <!--===== Project Details Section  S T A R T =====-->
    <x-projects.project-details :project="$project" />
@endsection
