@extends('layouts.admin')

@section('content')

	<h1>Create Users</h1>

	

<div class="container">
  <form method="post" action="/admin/users" enctype="multipart/form-data">

  	{{csrf_field()}}

  	<div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="Enter name" name="name">
    </div>
  	 
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>

     <div class="form-group form-inline">
      <label for="email">Role:</label>
				<select name="role_id">
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

    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
  </form>
</div>



@endsection
