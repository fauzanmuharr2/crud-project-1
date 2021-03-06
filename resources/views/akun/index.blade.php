@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header"><center><b>Data Siswa/i SMK ASSALAAM</b></center></div>
                <div class="card-body">
                    <a href="{{route('akun.create')}}"class="btn btn-outline-light float-right"><b>Tambah Siswa(+)</b></a>
                    <table class="table">
                        <thead>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($akun as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->tlpn}} </td>
                            <form action="{{route('akun.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary" href="{{route('akun.show', $item->id)}}">Lihat</a>|
                                <a class="btn btn-warning" href="{{route('akun.edit', $item->id)}}">Edit</a>|
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                </tr>
                                </td>
                            </form>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
