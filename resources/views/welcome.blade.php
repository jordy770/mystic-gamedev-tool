@extends('layouts.app')

@section('content')
<div class="dashboard py-4">
    <img id="bg" src="{{ asset('images/unknown.png')}}">
    <div class="container-fluid">
        <h1 class="dashboard__title">Mystic Gamedev Tool</h1>
        <hr class="dashboard__line">
        <div class="row">
            <div class="col">
                <h2> Companies</h2>
                <div class="row row-cols-1 row-cols-md-2 dashboard-companies">
                    <a href="{{ route('features.index')}}">
                        <div class="col md-4">
                            <img src="{{ asset('images/gamezo.png')}}" alt="test" class="rounded">
                        </div>
                    </a>
                    <a href="{{ route('features.index')}}">
                        <div class="col md-4">
                            <img src="{{ asset('images/gameraider.png')}}" alt="test" class="rounded">
                        </div>
                    </a>
                    <a href="{{ route('features.index')}}">
                        <div class="col md-4">
                            <img src="{{ asset('images/gameric.png')}}" alt="test" class="rounded">
                        </div>
                    </a>
                    <a href="{{ route('features.index')}}">
                        <div class="col md-4">
                            <img src="{{ asset('images/gameland.png')}}" alt="test" class="rounded">
                        </div>
                    </a>
                    <a href="{{ route('features.index')}}">
                        <div class="col md-4">
                            <img src="{{ asset('images/gamingly.png')}}" alt="test" class="rounded">
                        </div>
                    </a>
                    <a href="{{ route('features.index')}}">
                        <div class="col md-4">
                            <img src="{{ asset('images/gamegenix.png')}}" alt="test" class="rounded">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col highlights">
                <h2> Highlights</h2>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/half.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection