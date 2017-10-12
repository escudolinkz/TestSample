
<html>
	<head>
		<meta charset="utf-8">
		
		<title>HRMS | Daftar Masuk</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		
		
		<div class="container">
		@include('inc.messages')
		<div class="jumbotron text-center">
			<div class="container">
				<h1>HRMS KUTMB</h1>
				
			</div>	
		</div>
				{!! Form::open(['url' => 'login/submit']) !!}		
		
		<div class="form-group">
			{{Form::label('no_ic', 'MyID')}}
			{{Form::text('no_ic', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan No KP'] )}}
		</div>
		<div class="form-group">
			{{Form::label('ckata_laluan', 'Kata Laluan')}}
			{{Form::password('ckata_laluan', ['class' => 'form-control', 'placeholder' => 'Masukkan kata laluan'])}}
		</div>
		
		<div>
			{{Form::submit('Daftar Masuk', ['class'=> 'btn btn-primary'])}}
		</div>
    
				{!! Form::close() !!}
				
		<div class="text-center">
			<a href="/daftar">Daftar akaun</a>	
		</div>
				
			

		
		
		</div>
		<footer id="footer" class="text-center">
			<p>Copyright 2017 &copy;iT-KUTMB</p>
		</footer>
	</body>
