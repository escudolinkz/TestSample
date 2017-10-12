@extends('layouts.app')

@section('content')
	<h1>Hubungi Kami</h1>
	{!! Form::open(['url' => 'contact/submit']) !!}
		<div class="form-group">
			{{Form::label('name', 'Nama Penuh')}}
			{{Form::text('name', '', ['class'=> 'form-control', 'placeholder' => 'Enter name'] )}}
		</div>
		<div class="form-group">
			{{Form::label('email', 'Emel')}}
			{{Form::text('email', '', ['class'=> 'form-control', 'placeholder' => 'Enter email'])}}
		</div>
		<div class="form-group">
			{{Form::label('message', 'Mesej')}}
			{{Form::textarea('message', '', ['class'=> 'form-control', 'placeholder' => 'Enter message'])}}
		</div>
		
		<div>
			{{Form::submit('Hantar', ['class'=> 'btn btn-primary'])}}
		</div>
    
	{!! Form::close() !!}
	
@endsection

