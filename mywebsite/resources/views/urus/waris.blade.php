@extends('layouts.app')

@section('content')
	<h1>Pendaftaran Maklumat Waris</h1>
	{!! Form::open(['url' => 'waris/submit']) !!}		
		
		
		<div class="form-group">
			{{Form::label('nama', 'Nama')}}
			{{Form::text('nama', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan nama waris'] )}}
		</div>
		<div class="form-group">
			{{Form::label('hubungan', 'Hubungan')}}
			{{Form::select('hubungan', ['suami' => 'Suami', 'isteri' => 'Isteri',  'ibu' => 'Ibu', 'bapa' => 'Bapa', 'adik' => 'Adik', 'abang' => 'Abang', 'kakak' => 'Kakak'], null, ['placeholder' => 'Sila pilih..'])}}
		</div>
		<div class="form-group">
			{{Form::label('pekerjaan', 'Pekerjaan')}}
			{{Form::text('pekerjaan', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan pekerjaan waris'] )}}
		</div>
		<div class="form-group">
			{{Form::label('info_majikan', 'Nama dan Alamat Majikan')}}
			{{Form::textarea('info_majikan', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan maklumat majikan'])}}
		</div>
		<div class="form-group">
			{{Form::label('notel_pej', 'No Telefon Pejabat')}}
			{{Form::text('notel_pej', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no telefon pejabat'])}}
		</div>
		<div class="form-group">
			{{Form::label('notel_bimbit', 'No Telefon Bimbit')}}
			{{Form::text('notel_bimbit', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no telefon bimbit'])}}
		</div>
		<div class="form-group">
			{{Form::label('notel_rumah', 'No Telefon Rumah')}}
			{{Form::text('notel_rumah', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no telefon rumah'])}}
		</div>
		<div class="form-group">
			{{Form::label('no_ic', 'No Kad Pengenalan')}}
			{{Form::text('no_ic', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no kad pengenalan'])}}
		</div>
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

		