@extends('layouts.app')

<link href="{{ asset('css/center.css') }}" rel="stylesheet">

@section('title')Car-{{$car->marka}} @endsection

@section('content')
	<div id="center">
		
		<table class="table table-hover">
			<h1>Dane auta</h1>	
			<tr><h3>{{$car->marka}}</h3></tr>
			<tr><h3>{{$car->model}}</h3></tr>
			<tr><h3>{{$car->rocznik}}</h3></tr>
		</table>

		<table class="table table-hover">
			<h1>Częsci należące do auta</h1>
			@foreach($czesci as $czesc)
				@if ($czesc->idCar == $car->id)
					<tr><h3>{{$czesc->nazwa}}</h3></tr>
				@endif
			@endforeach
		</table>

		<a class="btn btn-primary" href="{{route('main.edit', $car)}}">Edit</a>
	</div>
@endsection