@extends('base')

@section('main')
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a feature</h1>
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
      <form method="post" action="{{ route('features.store') }}">
        @csrf
        <div class="form-group">
          <label for="first_name">Title of the feature:</label>
          <input type="text" class="form-control" name="title" required/>
        </div>

        <div class="form-group">
          <label for="last_name">Description:</label>
          <input type="text" class="form-control" name="description" required/>
        </div>
        <div class="form-group">
          <label for="status">Status: active</label>
          <input type="radio" value="0" id="active" name="status">
          </br>
          <label for="status">Status: closed</label>
          <input type="radio" value="1" id="closed" name="status">
          </br>

          <label for="status">Status: in review</label>
          <input type="radio" value="2" id="in_review" name="status">
          </br>

        </div>
        <div class="form-group">
          <input type="hidden" class="form-control" name="upvote" value="0" />
        </div>
        <div class="form-group">
          <input type="hidden" class="form-control" name="downvote" value="0" />
        </div>
        <div class="form-group">
          <label for="companyName">Company Name:</label>
          <input type="text" class="form-control" name="companyName" required/>
        </div>
        <div class="form-group">
          <label for="gameTitle">Game title:</label>
          <input type="text" class="form-control" name="gameTitle" required/>
        </div>
        <button type="submit" class="btn btn-primary">Add feature</button>
      </form>
    </div>
  </div>
</div>
@endsection