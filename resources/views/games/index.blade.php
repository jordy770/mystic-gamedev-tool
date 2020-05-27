@extends('base')

@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('games.create')}}" class="btn btn-primary">New game</a>
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
    <h1 class="display-3">Games</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
            <td>Name</td>
            <td>Description</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($game as $game)
        <tr>
            <td>{{$game->title}}</td>
            <td>{{$game->description}}</td>
            <td>
                <a href="{{ route('games.edit',$game->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <a href="{{ route('games.show',$game->id)}}" class="btn btn-primary">Details</a>
            </td>
            <td>
                <form action="{{ route('games.destroy', $game->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection