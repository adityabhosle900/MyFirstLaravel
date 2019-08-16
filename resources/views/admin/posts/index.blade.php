
@extends('layouts.admin')

@section('content')
	<h1>POSTS</h1>




<div class="container">            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>User</th>
        <th>Category</th>
        <th>Photo</th>
		<th>Title</th>
        <th>Content</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

@if($posts)
	@foreach($posts as $post)
      <tr>
      	<td>{{$post->id}}</td>
      	<td>{{$post->user->name}}</td>
      	<td>{{$post->category_id}}</td>
      	<td>
      		<img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" width="100" height="100">
      	</td>
      	<td>{{$post->title}}</td>
      	<td>{{$post->body}}</td>
      	<td>{{$post->created_at}}</td>
      	<td>{{$post->updated_at}}</td>
      </tr>
      @endforeach
@endif
     
   
    </tbody>
  </table>
</div>

@endsection