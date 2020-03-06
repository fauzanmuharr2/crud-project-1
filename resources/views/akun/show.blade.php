@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Siswa</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama Anda</label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" value="{{$akun->nama}}" class="form-control" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email Anda</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" value="{{$akun->email}}" class="form-control" name="email" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label for="">No Telepon Anda</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" value="{{$akun->tlpn}}" class="form-control" name="tlpn" readonly>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
