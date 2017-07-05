@extends('layouts.app')
@section('title','Cars')
@section('content')

	<table class="table table-hover">
		<tr>
			<td><h3>Marka</h3></td>
			<td><h3>Model</h3></td>
			<td><h3>Rocznik</h3></td>
		</tr>
		@foreach($cars as $car)
		<tr>
			<td><a href="{{route('main.show', $car)}}">{{$car->marka}}</a></td>
			<td>{{$car->model}}</td>
			<td>{{$car->rocznik}}</td>
			<td><a class="btn btn-danger" href="{{route('main.delete', $car)}}">Delete</a></td>
		</tr>
		@endforeach
	</table>

@endsection