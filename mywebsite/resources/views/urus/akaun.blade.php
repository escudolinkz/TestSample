@extends('layouts.app')

@section('content')
	<h1>Pendaftaran Maklumat Akaun</h1>
	{!! Form::open(['url' => 'akaun/submit']) !!}		
		
		<div class="form-group">
			{{Form::label('no_kwsp', 'No KWSP')}}
			{{Form::text('no_kwsp', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan No KWSP'])}}
		</div>
		<div class="form-group">
			{{Form::label('no_perkeso', 'No Perkeso')}}
			{{Form::text('no_perkeso', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no Perkeso'] )}}
		</div>
		<div class="form-group">
			{{Form::label('no_akaun_muamalat', 'No Akaun Muamalat')}}
			{{Form::text('no_akaun_muamalat', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no akaun Muamalat'])}}
		</div>
		<div class="form-group">
			{{Form::label('no_cukai', 'No Cukai Pendapatan')}}
			{{Form::text('no_cukai', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no cukai'])}}
		</div>
		<div class="form-group">
			{{Form::label('no_lesen', 'No Lesen Memandu')}}
			{{Form::text('no_lesen', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no lesen'])}}
		</div>
		<div class="form-group">
			{{Form::label('kelas_memandu', 'Kelas Memandu')}}
			{{Form::text('kelas_memandu', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan no kelas memandu'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('tarikh_mula_kerja', 'Tarikh Mula Bekerja')}}
			{{Form::date('tarikh_mula_kerja', \Carbon\Carbon::now())}}
		</div>
		<div class="form-group">
			{{Form::label('jawatan_permulaan', 'Jawatan Permulaan')}}
			{{Form::text('jawatan_permulaan', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan jawatan permulaan'])}}
		</div>
		<div class="form-group">
			{{Form::label('jawatan_sekarang', 'Jawatan Sekarang')}}
			{{Form::text('jawatan_sekarang', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan jawatan sekarang'])}}
		</div>
		<div class="form-group">
			{{Form::label('tarikh_lantikan_baru', 'Tarikh Lantikan Baru')}}
			{{Form::date('tarikh_lantikan_baru', \Carbon\Carbon::now())}}
		</div>
		<div class="form-group">
			{{Form::label('rekod_jenayah', 'Mempunyai Rekod Jenayah')}}
			{{Form::select('rekod_jenayah', ['y' => 'Ya', 'n' => 'Tidak'], null, ['placeholder' => 'Sila pilih...'])}}
		</div>
		<div class="form-group">
			{{Form::label('nyata_jenayah', 'Nyatakan')}}
			{{Form::textarea('nyata_jenayah', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan kenyataan rekod jenayah'])}}
		</div>
		<div class="form-group">
			{{Form::label('rekod_penyakit', 'Mempunyai Penyakit')}}
			{{Form::select('rekod_penyakit', ['y' => 'Ya', 'n' => 'Tidak'], null, ['placeholder' => 'Sila pilih...'])}}
		</div>
		<div class="form-group">
			{{Form::label('nyata_penyakit', 'Nyatakan')}}
			{{Form::textarea('nyata_penyakit', '', ['class'=> 'form-control', 'placeholder' => 'Masukkan kenyataan penyakit'])}}
		</div>
		
		<div>
			{{Form::submit('Simpan', ['class'=> 'btn btn-primary'])}}
		</div>
    
	{!! Form::close() !!}
	
@endsection

		
		
		
				
				
				
				
		