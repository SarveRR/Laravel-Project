@extends('layouts.app')

<link href="{{ asset('css/center.css') }}" rel="stylesheet">

@section('title')Edit @endsection

@section('content')
	<form action="{{route('main.editRecord', $car)}}" method="post">
		<h1>Edytuj auto</h1>

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<input type="text" name="marka" placeholder="Podaj marke" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="model" placeholder="Podaj model" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="rocznik" placeholder="Podaj rocznik" class="form-control">
		</div>

		<div class="form-group">
			<button class="btn btn-primary">Edit</button>
		</div>
	</form>
@endsection