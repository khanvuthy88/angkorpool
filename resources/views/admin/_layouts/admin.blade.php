@extends('admin._layouts.app')

@section('body_class','nav-md')

@section('page')
    <div class="container body">
        <div class="main_container">
            @section('header')
                @include('admin._sections.navigation')
                @include('admin._sections.header')
            @show

            @yield('left-sidebar')

            <div class="right_col" role="main">
                <div class="page-title">
                    <div class="title_left">
                        <h1 class="h3">@yield('title')</h1>
                    </div>
                </div>
                @yield('content')
            </div>

            <footer>
                @include('employer.sections.footer')
            </footer>
        </div>
    </div>
@stop

@section('styles')
    {{ Html::style('assets/admin/css/admin.css') }}

@endsection

@section('scripts')
    {{ Html::script('assets/admin/js/admin.js') }}
@endsection