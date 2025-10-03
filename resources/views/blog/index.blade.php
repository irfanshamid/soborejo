@extends('layouts.layout', [
    'headerWrapper' => true,
    'hasFooterMarque' => true,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => true,
])

@section('title', 'Blog')
@section('meta_description', 'Building & Construction Services Laravel 12 Template')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb title="Blog" :breadcrumbs="['Home' => route('home'), 'Blog' => '']" />

    <!--===== Blog Section    S T A R T =====-->
    <div class="blog2 mt-120 pb-0 fix">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4 ">
                    <!--===== Blog Search widget S T A R T =====-->
                    <x-blog.blog-search-widget :keyword="isset($keyword) ? $keyword : null"/>

                    <!--===== Blog Category widget  S T A R T =====-->
                    <x-blog.blog-category-widget :blogCategories="$blogCategories" />

                    <!--===== Recent Blog widget - 3 (Blog Recent Post)   S T A R T =====-->
                    <x-blog.recent-blog-widget :recentPosts="$blogData" />

                    <!--===== Blog Tags Widget  S T A R T =====-->
                    <x-blog.blog-tags-widget :blogTags="$blogTags" />
                </div>

                <div class="col-lg-8">
                    <!--===== Blog Section    S T A R T =====-->
                    <x-blog.blog-main-section :blogs="$blogData" />
                </div>
            </div>
        </div>
    </div>
@endsection
