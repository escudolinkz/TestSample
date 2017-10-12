@extends('layouts.app')

@section('content')
	<h1>Senarai Staf</h1>
	@if(count($list) > 0)
		@foreach($list as $lists)
			<ul class="list-group">
				<li class="list-group-item">Nama : {{$lists->nama}}</li>
				<li class="list-group-item">No KP : {{$lists->no_ic}}</li>
				<li class="list-group-item">No Staf : {{$lists->no_staf}}</li>
			</ul>
		@endforeach
	@endif 
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection

