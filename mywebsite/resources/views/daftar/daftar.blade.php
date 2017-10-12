
<html>
	<head>
		<meta charset="utf-8">
		
		<title>HRMS | Daftar Akaun</title>
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
			
					
			{!! Form::open(['url' => 'daftar/submit']) !!}		
			
			<div class="form-group">
				{{Form::label('no_ic', 'No Kad Pengenalan')}}
				{{Form::text('no_ic', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan No KP'] )}}
			</div>
			<div class="form-group">
				{{Form::label('kata_laluan', 'Masukkan Kata Laluan')}}
				{{Form::password('kata_laluan', ['class' => 'form-control', 'placeholder' => 'Masukkan kata laluan'])}}
				 <span class="help-block">
                 	<strong>The password confirmation does not match.</strong>
                 </span>
			</div>
			<div class="form-group">
				{{Form::label('ckata_laluan', 'Sahkan Kata Laluan')}}
				{{Form::password('ckata_laluan', ['class' => 'form-control', 'placeholder' => 'Masukkan kata laluan'])}}
			</div>
			<div>
				{{Form::submit('Daftar Akaun', ['class'=> 'btn btn-primary'])}}
			</div>
	    
				{!! Form::close() !!}
				
		</div>
		<footer id="footer" class="text-center">
			<p>Copyright 2017 &copy;iT-KUTMB</p>
		</footer>
	</body>
