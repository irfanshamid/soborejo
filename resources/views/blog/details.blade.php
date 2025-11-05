@extends('layouts.layout', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false,
])

@section('title', 'Blog Details')
@section('meta_description', 'Building & Construction Services Laravel 12 Template')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb :bg="$blogBg" title="Blog Details" :breadcrumbs="['Home' => route('home'), 'Blogs Details' => '']" />

    <!--===== Project Details Section  S T A R T =====-->
    <x-blog.blog-new-details :blog="$blogData" />
@endsection
