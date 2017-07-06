@extends('layouts.app')

<link href="{{ asset('css/center.css') }}" rel="stylesheet">

@section('title')Edit @endsection

@section('content')
	<form action="{{route('main.editCzescSuccess', $czesc)}}" method="post">
		<h1>Edytuj część</h1>

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<input type="text" name="nazwa" placeholder="Podaj nazwe" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="idCar" placeholder="Podaj id auta" class="form-control">
		</div>


		<div class="form-group">
			<button class="btn btn-primary">Edit</button>
		</div>
	</form>

	<table class="table table-hover">
		<tr>
			<td><h3>Dostępne id</h3></td>
			<td><h3>Marka</h3></td>
		</tr>
		@foreach($cars as $car)
		<tr>
			<td>{{$car->id}}</td>
			<td>{{$car->marka}}</td>
		</tr>
		@endforeach
	</table>
@endsection