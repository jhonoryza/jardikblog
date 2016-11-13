@extends('layouts.app')

@section('content')

    @foreach($data as $mydata)
    <h1>{{$mydata->title}} </h1>
    <h5><span class="glyphicon glyphicon-tag" aria-hidden="true">
    Categories: {{$mydata->category->name}} </h5>
    
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
        <h1> Sidebar </h1>
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#">Fly to the Moon</a></li>
            <li><a href="#">Dig to China</a></li>
            <li><a href="#">Swim Across the Sea</a></li>
        </ul>
    </nav>   
@endsection
@section('footer')
    <p class="text-center">2016 Copyright jardik - All Rights Reserved</p>
@endsection