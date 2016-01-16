@extends('template')

@section('title')
    Blog da Ana 
@stop    

@section('content')
    <h1>Blog da Ana</h1>
    <ul>
        @foreach($posts as $title => $post)
            <li>
                <a href="#"><h2>{{ $title}}</h2></a>
                <p>{{ $post}}</p>
            </li>
         @endforeach       
    </ul>
@stop