@extends('template')

@section('title')
    Blog da Ana 
@stop    

@section('content')
    <h1 class="template__header mdl-cell mdl-cell--12-col mdl-typography--body-2">Blog Admin</h1>

    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
    	<tr>
    		<th>ID</th>
    		<th class="mdl-data-table__cell--non-numeric">Title</th>
    		<th>Action</th>
    	</tr>
    	@foreach($posts as $post)
    	<tr>
    		<td>{{ $post->id }}</td>
    		<td class="mdl-data-table__cell--non-numeric">{{ $post->title }}</td>
    		<td></td>
    	</tr>
    	@endforeach
    </table>
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-navigation mdl-cell--12-col">
    	{!! $posts->render() !!}    
 	</div>
@stop