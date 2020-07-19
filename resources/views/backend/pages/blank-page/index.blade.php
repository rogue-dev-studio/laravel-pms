@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        Here Add Your HTML Content.....
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
