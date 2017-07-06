@extends('layouts.app')
@section('title','Czesci')
@section('content')

	<table class="table table-hover">
		<h1>Tabela czesci_cars</h1>
		<tr>
			<td><h3>nazwa</h3></td>
			<td><h3>id auta</h3></td>
		</tr>
		@foreach($czesci as $czesc)
		<tr>
			<td><a href="{{route('main.editCzesc', $czesc)}}">{{$czesc->nazwa}}</a></td>
			<td>{{$czesc->idCar}}</td>
			<td><a class="btn btn-danger" href="{{route('main.deleteCzesc', $czesc)}}">Delete</a></td>
		</tr>
		@endforeach
	</table>

@endsection