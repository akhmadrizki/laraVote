@extends('layouts.client')

@section('additional-style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')

<section class="intro">
    <div class="inner">
        <div class="content">
            <div class="box">
            <div class="row">
                <div class="col">
                <h2 style="color:#566374">Silahkan Masukan NIM Untuk Memvoting</h2>
                <br>    
                </div>
            </div>
            @if($message = Session::get('Gagal'))
                 <div class="row">
                 <div class="col">
                 <div class="alert alert-warning alert-dismissible fade show mx-auto" role="alert" style="width:90%;">
                   <strong>Gagal!</strong> {{ $message }}.
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  </div>
                 </div>
                @endif
            <div class="row">
                <div class="col">
                <form action="{{ route('cektoken') }}" method="post">
                      {{ csrf_field() }}
                      <input type="text" name="usertoken" class="form-control" style="width:90%;margin:0 auto;" autofocus required>
                      <button type="submit" class="btn btn-primary mt-2 mb-5" style="width:90%;">Masuk</button>
                  </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection