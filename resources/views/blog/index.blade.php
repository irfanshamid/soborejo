@extends('layouts.layout', [
    'headerStyle' => 'py-22 header-area-space-2',
    'headerBtnStyle' => 'style3',
    'headerWrapper' => false,
    'hasFooterMarque' => false,
])

@section('title', 'Blog')
@section('meta_description', 'Artikel dan insight seputar konstruksi, general contractor, dan industri bangunan dari PT Soborejo.')
@section('meta_keywords', 'blog konstruksi, artikel general contractor, jasa konstruksi Indonesia')
@section('canonical', route('blogs.index'))

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb title="Blog" :breadcrumbs="['Home' => route('home'), 'Blogs' => '']" :bg="$blogBg"/>

    <!--===== Project Section  S T A R T =====-->
    <x-blog.blog-all :blogs="$blogData" />
@endsection
