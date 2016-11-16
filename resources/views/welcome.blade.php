@extends('layouts.app')

@section('content')

    @foreach($data as $mydata)
    <h2>{{$mydata->title}} </h2>
    <p><span class="glyphicon glyphicon-tag" aria-hidden="true">
    {{$mydata->category->name}}
    <span class="glyphicon glyphicon-time" aria-hidden="true">
    {{$mydata->created_at}}</p>
    
    <?php
    $result = str_replace(' ', '&nbsp;', $mydata->content);
    $result = nl2br($result);
    ?>
    <p>{!!$mydata->content!!}</p>
    @endforeach
    {{ $data->links() }}
       

@endsection
@section('sidebar')
    <nav id="sidebar-nav">
        <h2> Categories </h2>
        <ul class="nav nav-pills nav-stacked">
            @foreach($cat as $cats)
                <li><a href="#">{{$cats->name}}</a></li>
            @endforeach
        </ul>
    </nav>   
@endsection
@section('footer')
    <p class="text-center">2016 Copyright jardik - All Rights Reserved</p>
@endsection