@extends('dashboard.dashboard')
@section('judul_halaman','Voters')
@section('konten')
@php
	$judul = 'Voters'	
@endphp
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">Tambah Akun Voting Pemilih Ketua BEM</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<a href="/admin/voters" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
      <div class="row" style="margin-top:15px;margin-bottom:18px;">
        <div class="col-md-4">
          <form method="post" action="{{ route('admin.voters.store') }}">
            {{ csrf_field() }}
          <div class="input-group">
            <input class="form-control" type="text" name="username" placeholder="Masukkan NIM Mahasiswa">
            <span class="input-group-btn"><button class="btn btn-primary" type="submit">Tambahkan</button></span>
            </form>
          </div>
          </div>
        </div>
		</div>
		</div>
@endsection