@extends('layouts.app')

<link href="{{ asset('css/center.css') }}" rel="stylesheet">

@section('title')Car-{{$car->marka}} @endsection

@section('content')
	<div id="center">
		<h1>{{$car->marka}}</h1>
		<h3>{{$car->model}}</h3>
		<h3>{{$car->rocznik}}</h3>
		<a class="btn btn-primary" href="{{route('main.edit', $car)}}">Edit</a>
	</div>
@endsection