@extends('layouts.admin')

@section('content')

	<h1>Edit User</h1>

<div class="container">
	<div class="col-sm-8">
		  <form method="post" action="/admin/users/{{$user->id}}" enctype="multipart/form-data">
		  		<input type="hidden" name="_method" value="PUT">
		  	{{csrf_field()}}

		  	<div class="form-group">
		      <label for="name">Name:</label>
		      <input type="text" class="form-control" value="{{$user->name}}" name="name">
		    </div>
		  	 
		    <div class="form-group">
		      <label for="email">Email:</label>
		      <input type="email" class="form-control" value="{{$user->email}}" name="email">
		    </div>

		     <div class="form-group form-inline">
		      <label for="email">Role:</label>
						<select name="role_id">
							<option value="{{$user->role_id}}">{{$user->roles->name}}</option>
				    		@foreach($roles as $role)
				    				
									  <option value="{{$role->id}}">{{$role->name}}</option>
									  
							@endforeach
				    		
						</select>
		    </div>

		     <div class="form-group">
		      <label for="is_active">Status:</label>
					<select name="is_active">
						  <option value="1">Online</option>
						  <option value="0">Offline</option>
					</select>
		    </div>
		    
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
		    </div>

		    <div class="form-group">
		 		<label for="photo">Select Photo:</label>
		 		<input type="file" name="photo_id">
		     </div>

		       <div class="form-group">
		 		<label for="photo">Photo:</label>
		 		<img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" width="100" height="100">
		     </div>


		    <button type="submit" name="submit" class="btn btn-default">Submit</button>
		  </form>
		</div>



@endsection
