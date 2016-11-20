@extends('layouts.app')

@section('content')
<h2>About me</h2>
<p>Hi, I am Fajar Sidik Priatna,</p>  
<p>a developer (who works on the web, desktop and embedded system) based on Indonesia. </p> 
<p>Graduated from Physics Department of Padjadjaran University (UNPAD).</p> 

If you find some bugs or you want to share something, you can contact me..

<h2>Contact me</h2>
Find me on <a href="https://plus.google.com/+FajarSidikPriatna">Google+</a>  / <a href="https://github.com/jhonoryza">Github</a>  / <a href="https://twitter.com/jardik7">Twitter</a>  or just say Hello at jardik.oryza@gmail.com.

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