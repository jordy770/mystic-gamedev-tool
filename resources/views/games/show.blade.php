@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div>
            <h2 id="h2-first"><strong>Game information</strong></h2>
            <h3><strong>Naam:</strong> {{$game->title}}</h3>
            <h5><strong>Description:</strong> {{$game->description}}</h5>
        </div>
        {{--
        @foreach($features as feature)
        <div class="display-comment">
        <strong>{{ $feature->name }}</strong>
        <p>{{ $feature->d }}</p>        
    </div>
        @endforeach
        --}}
    </div>
</div>
@endsection