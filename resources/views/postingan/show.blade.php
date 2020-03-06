@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDITING</div>

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
                                <div class="col-md-8">
                                <input type="text" value="{{$postingan->akun->nama}}" class="form-control" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Deskripsi</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea name="deskripsi" id="" cols="30" rows="10" readonly> {{$postingan->deskripsi}} </textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kategori</label>
                                </div>
                                <div class="col-md-8">
                                <input type="text" value="{{$postingan->kategori}}" class="form-control" name="kategori" readonly>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
x
