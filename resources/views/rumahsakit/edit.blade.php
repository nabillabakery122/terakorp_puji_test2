@extends('layouts.global')

@section('content')

<div class="container">

	<div class="row justify-content-center mt-5">
		<div class="col-12">
			<h1>Edit Data {{$data->nama}}</h1>
		</div>
	</div>

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<div class="row">
		<div class="col-12 mt-5">
			<form action="/rumahsakit/update/{{$data->id}}" method="post">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label for="nama">Nama Rumahsakit</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Rumahsakit" value="{{$data->nama}}">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{$data->email}}">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" id="alamat" name="alamat" rows="3">{{$data->alamat}}</textarea>
				</div>
				<div class="form-group">
					<label for="telepon">No Telepon</label>
					<input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon Rumahsakit" value="{{$data->telepon}}">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection
