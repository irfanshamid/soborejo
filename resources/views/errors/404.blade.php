@extends('layouts.layout', [
    'headerWrapper' => true,
    'hasFooterMarque' => true,
    'footerMarqueTopMargin' => 'mt-80',
    'footerMarqueLevelOneStyle' => 'marque-section-4',
    'footerMarqueLevelTwoStyle' => 'marque-section-5',
])

@section('title', 'Halaman Tidak Ditemukan')
@section('meta_description', 'Halaman yang Anda cari tidak ditemukan di situs PT Soborejo.')
@section('meta_robots', 'noindex, follow')

@section('content')
    <!--===== Breadcrumb Section    S T A R T =====-->
    <x-common.breadcrumb title="404" :breadcrumbs="['Home' => route('home'), '404' => '']" />

    <section class="error section-padding pb-0 fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-12 d-flex justify-content-center flex-column align-items-center">
                    <div class="error__thumb">
                        <img src="{{ asset("assets/images/error/error.svg") }}" alt="svg">
                    </div>
                    <div class="error-content text-center">
                        <div class="error-content__text mt-30">
                            <h6>Sorry, the page you’re looking for doesn’t exist. If you think something is broken, report a porblem</h6>
                        </div>
                        <div class="btn-wrapper pt-35">
                            <a class="theme-btn style1" href="{{ route('home') }}">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
