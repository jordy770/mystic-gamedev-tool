@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a game</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('games.store') }}">
          @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group" >
              <input type="hidden" class="form-control" name="company_id" value="2"/>
          </div>
          <div class="form-group">
              <label for="company_id">Company:</label>
              <input type="text" class="form-control" name="company_id" id="company_id"/>
          </div>
          

          <button type="submit" class="btn btn-primary-outline">Add Game</button>
      </form>
  </div>
</div>
</div>
@endsection