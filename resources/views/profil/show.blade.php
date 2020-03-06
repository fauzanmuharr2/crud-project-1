@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>Lihat Data Siswa</center></div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                            <div class="row ">
                                <div class="col-md-5">
                                    <label for=""><b>Nama</b></label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" class="form-control" value="{{$profil->akun->nama}}" name="nama" readonly>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>No Telepon</b></label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" class="form-control" value="{{$profil->akun->tlpn}}" name="kelas" readonly>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Alamat</b></label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="alamat" id="" cols="30" rows="10" readonly> {{$profil->alamat}} </textarea>
                                    <div class="form-group">
                                    <a href="{{route('profil.index')}}"class="btn btn-outline-danger float-right"><b>Kembali(-)</b></a>
                                </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
