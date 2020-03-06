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
                                <input type="text" value="{{$group->akun->nama}}" class="form-control" name="nama" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-md-8">
                                <input type="email" value="{{$group->akun->email}}" class="form-control" name="email" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Nama Grup</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea name="nama_grup" id="" cols="30" rows="10" readonly> {{$group->nama_grup}} </textarea>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
x
