@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lihat Data Siswa</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                           <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{$profil->nama}}" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="date" class="form-control" value="{{$profil->tgl_lahir}}" name="tgl_lahir" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                </div>
                                <div class="col-md-12">
                                <textarea name="alamat" cols="10" rows="5" class="form-control">{{$profil->alamat}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">No Telepon</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" value="{{$profil->no_tlp}}" name="no_tlp" readonly>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
