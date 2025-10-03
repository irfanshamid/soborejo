@extends('layouts.layout', [
    'headerWrapper' => true,
    'hasFooterMarque' => true,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => true,
])

@section('title', 'Blog Details')
@section('meta_description', 'Building & Construction Services Laravel 12 Template')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb title="Blog Details" :breadcrumbs="['Home' => route('home'), 'Blog Details' => '']" />

    <!--===== Blog Details Section    S T A R T right =====-->
    <div class="blog2 mt-120 fix">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
                    <!--===== Blog Search widget    S T A R T right =====-->
                    <x-blog.blog-search-widget :keyword="isset($keyword) ? $keyword : null" />

                    <!--===== Blog Category Widget =====-->
                    <x-blog.blog-category-widget :blogCategories="$blogCategories" />

                    <!--===== Recent Blog widget - 3 (Blog Recent Post)   S T A R T =====-->
                    <x-blog.recent-blog-widget :recentPosts="$recentPosts" />

                    <!--===== Blog Tags Widget  S T A R T =====-->
                    <x-blog.blog-tags-widget :blogTags="$blogTags" />
                </div>

                <div class="col-lg-8">
                    <!--===== Blog Details area S T A R T right =====-->
                    <x-blog.blog-details-area :post="$post" :prevSlug="$prevSlug" :nextSlug="$nextSlug" />
                </div>
            </div>
        </div>
    </div>
@endsection
