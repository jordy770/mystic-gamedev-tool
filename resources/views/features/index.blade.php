@extends('layouts.app')

@section('content')
<div>
    <a style="margin: 25px;" href="{{ route('features.create')}}" class="btn btn-primary">New feature</a>
</div>
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Features</h1>


        @foreach($features as $features)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$features->title}}</h5>
                <p class="card-text">{{$features->description}}</p>
                <a href="{{ route('features.show' ,$features->id)}}" class="btn btn-primary">Details</a>
            </div>
        </div>
        @endforeach

        <div>
        </div>
        @endsection