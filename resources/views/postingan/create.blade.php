@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Profil</div>
                    <form action="{{route('postingan.store')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <label for=""><b>Nama</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="akun_id" class="form-control">
                                        @foreach ($akun as $item)
                                            <option value=" {{$item->id}} "> {{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Deskripsi</b></label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="deskripsi" id="" cols="30" rows="10" required></textarea>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Kategori</b></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="kategori" required>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary float-right" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
