@extends('base')

@section('content')

    <div class="page">
        <div class="page__head">
            @yield('page-title')
        </div>
        <div class="page__body">
            @yield('page-content')
        </div>
        <div class="page__foot">

            <!-- Page nav -->
            <div class="page-nav">
                <div class="page-nav__prev">
                    @yield('page-prev')
                </div>
                <div class="page-nav__index">
                    @section('page-index')
                        <button class="link-button js-open">
                            Naar Menu
                        </button>
                    @show
                </div>
                <div class="page-nav__next">
                    @yield('page-next')
                </div>
            </div>

        </div>
    </div>

@endsection
