
@extends('layouts.admin')

@section('content')
	<h1>USERS</h1>
@if(Session::has('deleted_users'))
<p>{{session('deleted_users')}}</p>
@endif



<div class="container">            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Role</th>
		    <th>Email</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

@if($users)
	@foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>
          <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" width="100" height="100">
        </td>
        <td>
          <a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a>
        </td>
        <td>{{$user->roles->name}}</td>
        <td>{{$user->email}}</td>
        <td>
        		{{$user->is_active==1?"Online":"Offline"}}
        </td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td>
          <form action="/admin/users/{{$user->id}}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            {{csrf_field()}}
            <input type="submit" name="submit" value="Delete">
          </form>
        </td>
      </tr>
      @endforeach
@endif
     
   
    </tbody>
  </table>
</div>

@endsection