@extends('layouts.layout', [
    'headerStyle' => 'py-22 header-area-space-2',
    'headerBtnStyle' => 'style3',
    'headerWrapper' => false,
    'hasFooterMarque' => false,
])

@section('title', 'Proyek')
@section('meta_description', 'Portofolio proyek PT Soborejo — hasil karya general contractor untuk konstruksi gedung, bangunan, dan industri.')
@section('meta_keywords', 'proyek Soborejo, portofolio kontraktor, jasa konstruksi gedung, kontraktor proyek industri')
@section('canonical', route('projects.index'))

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb title="Projects" :breadcrumbs="['Home' => route('home'), 'Projects' => '']" :bg="$projectBg"/>

    <!--===== Project Section  S T A R T =====-->
    <x-projects.project-section-all :projects="$projectData" />
@endsection
