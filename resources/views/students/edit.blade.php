@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h2 class="text-center">LARAVEL CRUD</h2>
    </div>

    @if(count($errors) > 0)
	<div class="alert alert-danger">
		
		@foreach($errors->all() as $error)
				<li class="list">{{$error}}</li>
		@endforeach
	</div>
	@endif

	@if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>	
	@endif
	<form action="{{route('students.update' , $students->id)}}" method="POST" enctype="multipart/form-data">
		{{csrf_field()}}
		{{method_Field('PATCH')}}
		<div class="form-group">
			<label for="Name" class="label-control">First Name</label>
			<input type="text" name="firstname" class="form-control" value="{{$students->firstname}}">
		</div>
		<div class="form-group">
			<label for="Name" class="label-control">Last Name</label>
			<input type="text" name="lastname" class="form-control" value="{{$students->lastname}}">
		</div>
		<div class="form-group">
			<label for="Name" class="label-control">Email Name</label>
			<input type="text" name="email" class="form-control" value="{{$students->email}}">
		</div>
		<div class="form-group">
			<label for="Name" class="label-control">Image</label>
			<input type="file" name="avatar" class="form-control" class="btn btn-primary">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-info">
		</div>
	</form>



</div>
@endsection
