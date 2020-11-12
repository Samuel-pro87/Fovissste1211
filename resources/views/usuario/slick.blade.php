@extends('layouts.app')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick/slick-theme.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/slick/slick.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Codebase.helpers('slick'); });</script>
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">{{$user->name}}</h2>
            <h3 class="h5 text-muted mb-0">{{$user->email}}</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- Slider with dots -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Foto de Perfil</h3>
                    </div>
                    <div class="js-slider" data-dots="true">
                        <div>
                            <img class="img-fluid" src="{{ $user->avatar}}" alt="photo">
                        </div>
                    </div>
                    <!-- END Slider with dots -->
                </div>
                <!-- END Dots -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
