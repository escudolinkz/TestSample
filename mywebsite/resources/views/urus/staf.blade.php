@extends('layouts.app')

@section('content')
	<h1>Pendaftaran Maklumat Staf</h1>
	{!! Form::open(['url' => 'staf/submit']) !!}		
		
		<div class="form-group">
			{{Form::label('gelaran', 'Gelaran')}}
			{{Form::select('gelaran', ['encik' => 'Encik', 'puan' => 'Puan', 'cik' => 'Cik', 'dato' => 'Dato', 'dr' => 'Dr'], null, ['placeholder' => 'Sila pilih..'])}}
		</div>
		<div class="form-group">
			{{Form::label('nama', 'Nama Penuh')}}
			{{Form::text('nama', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan nama penuh'] )}}
		</div>
		<!-- <div class="form-group">
			{{Form::label('no_ic', 'No Kad Pengenalan')}}
			{{Form::text('no_ic', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no kad pengenalan'])}}
		</div> -->
		<div class="form-group">
			{{Form::label('tarikh_lahir', 'Tarikh Lahir')}}
			{{Form::date('tarikh_lahir', \Carbon\Carbon::now())}}
		</div>
		<div class="form-group">
			{{Form::label('jantina', 'Jantina')}}
			{{Form::select('jantina', ['L' => 'Lelaki', 'P' => 'Perempuan'], null, ['placeholder' => 'Sila pilih..'])}}
		</div>
		<div class="form-group">
			{{Form::label('bangsa', 'Keturunan')}}
			{{Form::select('bangsa', ['melayu' => 'Melayu', 'cina' => 'Cina', 'India' => 'India'], null, ['placeholder' => 'Sila pilih..'])}}
		</div>
		<div class="form-group">
			{{Form::label('agama', 'Agama')}}
			{{Form::select('agama', ['islam' => 'Islam', 'buddha' => 'Buddha', 'hindu' => 'Hindu'], null, ['placeholder' => 'Sila pilih..'])}}
		</div>
		<div class="form-group">
			{{Form::label('status', 'Status')}}
			{{Form::select('status', ['kahwin' => 'Berkahwin', 'bujang' => 'Bujang', 'duda' => 'Duda', 'janda' => 'Janda'], null, ['placeholder' => 'Sila pilih..'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('no_staf', 'No Staf')}}
			{{Form::text('no_staf', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no staf'])}}
		</div>
		<div class="form-group">
			{{Form::label('notel_rumah', 'No Telefon Rumah')}}
			{{Form::text('notel_rumah', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no telefon rumah'])}}
		</div>
		<div class="form-group">
			{{Form::label('notel_bimbit', 'No Telefon Bimbit')}}
			{{Form::text('notel_bimbit', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no telefon bimbit'])}}
		</div>
		<div class="form-group">
			{{Form::label('emel', 'Alamat Emel')}}
			{{Form::text('emel', '', ['example@gmail.com', 'class'=> 'form-control', 'placeholder' => 'Masukkan alamat emel koperasi'])}}
		</div>
		<div class="form-group">
			{{Form::label('alamat_kediaman', 'Alamat Kediaman')}}
			{{Form::textarea('alamat_kediaman', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan alamat kediaman'])}}
		</div>
		<div class="form-group">
			{{Form::label('alamat_tetap', 'Alamat Tetap')}}
			{{Form::textarea('alamat_tetap', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan alamat tetap'])}}
		</div>
		
		
		
		
		<div>
			{{Form::submit('Simpan', ['class'=> 'btn btn-primary'])}}
		</div>
    
	{!! Form::close() !!}
	
@endsection

		
		
		
				
				
				
				
		