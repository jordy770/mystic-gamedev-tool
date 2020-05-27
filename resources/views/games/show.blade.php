@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div>
        <h2 id="h2-first"><strong>Game information</strong></h2>
                <h3><strong>Naam:</strong> {{$game->title}}</h2>
                <h5><strong>Description:</strong> {{$game->description}}</h2>
        </div>
        @foreach{{$feature as feature }}
        if($feature->game_id == 0){
            <h1>{{$feature->title}}</h1>
        }
    </div>
</div>
@endsection