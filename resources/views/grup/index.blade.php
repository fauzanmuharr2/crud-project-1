@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-13">
                @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                <div class="card">
                    <div class="card-header">
                        <center><b>PROFIL</b></center>
                    </div>
                    <div class="card-body">
                    <a href="{{route('group.create')}}"class="btn btn-outline-light float-right"><b>Tambah Tabungan Siswa(+)</b></a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nama Grup</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($group as $data)
                                        <tr>
                                            <td>{{$data->akun->nama}}</td>
                                            <td>{{$data->akun->email}}</td>
                                            <td>{{$data->nama_grup}}</td>
                                            <form action="{{route('group.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <td>
                                            <a class="btn btn-primary" href="{{route('group.show', $data->id)}}">Lihat</a>|
                                            <a class="btn btn-warning" href="{{route('group.edit', $data->id)}}">Edit</a>|
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                            </form>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
