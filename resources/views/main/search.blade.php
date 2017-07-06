@extends('layouts.app')

<link href="{{ asset('css/center.css') }}" rel="stylesheet">

@section('title')Search @endsection

@section('content')
	<form action="{{route('main.searchSuccess')}}" method="post">
	<h1>Cars</h1>
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<input type="text" name="searchMarka" placeholder="Znajdź marke" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="searchModel" placeholder="Znajdź model" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="searchRocznik" placeholder="Znajdź rocznik" class="form-control">
		</div>

		<h1>Części</h1>

		<div class="form-group">
			<input type="text" name="nazwa" placeholder="Znajdź część" class="form-control">
		</div>

		<div class="form-group">
			<input type="text" name="idCar" placeholder="Części do danego id" class="form-control">
		</div>

		<div class="form-group">
			<button class="btn btn-primary">Search</button>
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