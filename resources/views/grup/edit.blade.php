@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b><center>EDITING</center></b></div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('group.update', $group->id)}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-5">
                                    <label for=""><b>Nama-Email</b></label>
                                </div>
                                <div class="col-md-12">
                                    <select name="akun_id" class="form-control">
                                        @foreach ($akun as $item)
                                            <option value=" {{$item->id}} "
                                                {{ $item->id == $group->akun_id ? 'selected' : '' }} >
                                                {{$item->nama}} - {{$item->email}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><b>Nama Grup</b> </label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="nama_grup" id="" cols="30" rows="10"> {{$group->nama_grup}} </textarea>
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
