@extends('layouts.app')

<link href="{{ asset('css/center.css') }}" rel="stylesheet">

@section('title')Search @endsection

@section('content')
	<table class="table table-hover">
		<h1>Cars</h1>
		<tr>
			<td><h3>Marka</h3></td>
			<td><h3>Model</h3></td>
			<td><h3>Rocznik</h3></td>
		</tr>
		@foreach($cars as $car)
		@if (($car->marka == $request->searchMarka)||($car->model == $request->searchModel)||($car->rocznik == $request->searchRocznik))
		<tr>
			<td>{{$car->marka}}</td>
			<td>{{$car->model}}</td>
			<td>{{$car->rocznik}}</td>
		</tr>
		@endif
		@endforeach
	</table>
	
	<table class="table table-hover">
		<h1>Części</h1>
		<tr>
			<td><h3>Nazwa</h3></td>
			<td><h3>id auta</h3></td>
		</tr>
		@foreach($czesci as $czesc)
		@if (($czesc->nazwa == $request->nazwa)||($czesc->idCar == $request->idCar))
		<tr>
			<td>{{$czesc->nazwa}}</td>
			<td>{{$czesc->idCar}}</td>
		</tr>
		@endif
		@endforeach
	</table>
@endsection