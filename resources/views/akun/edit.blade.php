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
                    <form action="{{route('akun.update', $akun->id)}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama Anda</label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" value="{{$akun->nama}}" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email Anda</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" value="{{$akun->email}}" class="form-control" name="email" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="">No Telepon Anda</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="number" value="{{$akun->tlpn}}" class="form-control" name="tlpn" required>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
x
