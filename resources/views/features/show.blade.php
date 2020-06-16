@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">Feature</h3>
                    <br />
                    <h2>{{ $feature->title }}</h2>
                    <p>
                        {{ $feature->description }}
                    </p>
                    <hr />
                    <h4>Display Comments</h4>

                    @include('features.commentsDisplay', ['comments' => $feature->comments, 'feature_id' => $feature->id])
                    
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comments.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="feature_id" value="{{ $feature->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection