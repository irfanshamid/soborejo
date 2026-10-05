@extends('layouts.layout', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false,
])

@php
    $postDescription = \Illuminate\Support\Str::limit(strip_tags($blogData->content ?? ''), 160);
    if ($postDescription === '') {
        $postDescription = $blogData->title.' — artikel dari PT Soborejo.';
    }
    $postImage = ! empty($blogData->image) ? asset('storage/'.$blogData->image) : '';
@endphp

@section('title', $blogData->title)
@section('meta_description', $postDescription)
@section('meta_keywords', 'blog konstruksi, '.$blogData->title.', PT Soborejo, general contractor Indonesia')
@section('canonical', route('blogs.details', $blogData->slug))
@section('og_type', 'article')
@section('og_image', $postImage)

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb
        :bg="$blogBg"
        :title="$blogData->title"
        :breadcrumbs="['Home' => route('home'), 'Blog' => route('blogs.index'), $blogData->title => '']"
    />

    <!--===== Project Details Section  S T A R T =====-->
    <x-blog.blog-new-details :blog="$blogData" />
@endsection
