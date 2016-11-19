@extends('layouts.app')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ 
      selector:'textarea',
      plugins:'link codesample image lists table emoticons',
      toolbar: "codesample image link table emoticons"
      });
   </script>
@section('content')
            {!! Form::open(['route' => ['addpost.update', $data->id], 'method' => 'PATCH']) !!}
            <h2> Edit Post </h2>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', $data->title, ['class' => 'form-control']) }} <br>
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content', $data->content, ['class' => 'form-control', 'rows' => '12']) }} <br>
            {{ Form::label('category', 'Category:') }}
            {{ Form::select('category', $categories, $data->category_id) }} <br>
            {{ Form::submit('Update Post', ['class' => 'btn btn-primary btn-block']) }}
            {!! Form::close() !!}
@endsection