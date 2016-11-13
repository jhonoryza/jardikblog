@extends('layouts.app')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ 
      selector:'textarea',
      plugins:'link codesample image lists table emoticons',
      toolbar: "codesample image link table emoticons"
      });
   </script>
@section('content')
            <!--<form action="{{ url('/addpost') }}" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea class="form-control" rows="16" placeholder="Content" name="content"></textarea>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="submit" class="btn btn-default">Add new post</button>
            </form>-->
            {!! Form::open(['route' => 'addpost.store', 'method' => 'POST']) !!}
            <h2> New Post </h2>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }} <br>
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content', null, ['class' => 'form-control', 'rows' => '12']) }} <br>
            {{ Form::label('category', 'Category:') }}
            {{ Form::select('category', $categories) }} <br>
            {{ Form::submit('Create New Post', ['class' => 'btn btn-primary btn-block']) }}
            {!! Form::close() !!}
@endsection