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
    <h2> Categories </h2>
    <ul class="nav nav-pills nav-stacked">
        @foreach($cat as $cats)
            <li><a href="{{ route('listpost', $cats->id) }}">{{$cats->name}} <span class="badge">{{ $cats->posts->count() }}</span></a></li>
        @endforeach
    </ul>
    
    <h2>Contact me</h2>
    <!--<a href="jardik.oryza@gmail.com"><span class="glyphicon glyphicon-envelope"></span> Mail</a> <br>-->
    <a class="btn btn-social-icon btn-github" href="https://github.com/jhonoryza"><span class="fa fa-github"></span> </a> 
    <a class="btn btn-social-icon btn-google" href="https://plus.google.com/+FajarSidikPriatna"><span class="fa fa-google-plus"></span> </a> 
    <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/jardikoryza"><span class="fa fa-facebook-official"></span></a> 
    <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/jardik7"><span class="fa fa-twitter"></span></a>  
@endsection
@section('footer')
    <p class="text-center">2016 Copyright @jardik - All Rights Reserved</p>
@endsection