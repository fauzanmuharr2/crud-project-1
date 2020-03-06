@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT PROFIL</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('profil.update', $profil->id)}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Nama Pengguna</label>
                                </div>
                                <div class="col-md-12">
                                <input type="text" value="{{$profil->nama}}" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tanggal Lahir</label>
                                </div>
                                <div class="col-md-12">
                                <input type="date" value="{{$profil->tgl_lahir}}" class="form-control" name="tgl_lahir" required>
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
                                    <input type="number" value="{{$profil->no_tlp}}" class="form-control" name="no_tlp" required>
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
