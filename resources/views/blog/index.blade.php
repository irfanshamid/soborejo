@extends('layouts.layout', [
    'headerStyle' => 'py-22 header-area-space-2',
    'headerBtnStyle' => 'style3',
    'headerWrapper' => false,
    'hasFooterMarque' => false,
])

@section('title', 'Blog')
@section('meta_description', 'Building & Construction Services')
@section('meta_tags', 'architecture, building, construction, constructor, contractor, engineering, industry, painter, renovation')

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb title="Blog" :breadcrumbs="['Home' => route('home'), 'Blogs' => '']" :bg="$blogBg"/>

    <!--===== Project Section  S T A R T =====-->
    <x-blog.blog-all :blog="$blogData" />
@endsection
