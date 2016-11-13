@extends('layouts.app')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-info">{{ Session::get('success') }}</div>
@endif
        <div class="well">
            {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
            <h2> New Categories </h2>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }} <br>
            {{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block']) }}
            {!! Form::close() !!}
        </div>      
        
            <h1> Categories </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $cat)
                    <tr>
                        <td> {{$cat->id}} </td>
                        <td> {{$cat->name}} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
@endsection