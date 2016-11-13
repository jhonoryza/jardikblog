@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <a href="{{ route('addpost.create') }}">
                        Add new post
                    </a>
                    <table class="table table-bordered">
                        <tr>
                            <th> index </th>
                            <th> title </th>
                            <th> action </th>
                        </tr>
                        @foreach($data as $mydata)
                        <tr>
                            <td> {{$mydata->id}} </td>
                            <td> {{$mydata->title}} </td>
                            <td>
                            {!! Form::open(['route' => ['addpost.edit', $mydata->id], 'method' => 'get']) !!}
                            <a href="{{ route('addpost.edit', $mydata->id) }}"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                            {!! Form::close() !!} 
                            
                            {!! Form::open(['route' => ['addpost.destroy', $mydata->id], 'method' => 'DELETE']) !!}
                            {{Form::submit('Delete')}}
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
@endsection
