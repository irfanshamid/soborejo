@extends('layouts.layout-detail', [
    'headerWrapper' => false,
    'hasFooterMarque' => false,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
    'hasFooterSubscriptionForm' => false,
])

@php
    $projectDescription = \Illuminate\Support\Str::limit(strip_tags($project->description ?? $project->content ?? ''), 160);
    if ($projectDescription === '') {
        $projectDescription = 'Detail proyek '.$project->title.' oleh PT Soborejo, general contractor Indonesia.';
    }
    $projectImage = $project->image ? asset('storage/'.$project->image) : '';
@endphp

@section('title', $project->title)
@section('meta_description', $projectDescription)
@section('meta_keywords', 'proyek '.$project->title.', PT Soborejo, general contractor Indonesia, jasa konstruksi')
@section('canonical', route('projects.details', $project->slug))
@section('og_type', 'article')
@section('og_image', $projectImage)

@section('content')
    <!--===== Breadcrumb Section  S T A R T =====-->
    <x-common.breadcrumb
        :bg="$projectBg"
        :title="$project->title"
        :breadcrumbs="['Home' => route('home'), 'Proyek' => route('projects.index'), $project->title => '']"
    />

    <!--===== Project Details Section  S T A R T =====-->
    <x-projects.project-details :project="$project" />
@endsection
