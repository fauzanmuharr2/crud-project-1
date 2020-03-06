@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">NEW PROFIL</div>
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
                            <div class="col-md-6">
                                    <label for="">Pilih <b>Tag</b> Siswa</label>
                                </div>
                                <div class="col-md-12">
                                    <select class="form-control" id="js-multiple" multiple name="tag[]">
                                        @foreach ($tag as $item)
                                    <option value="{{$item->id}}"> {{$item->tag}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            <button class="btn btn-outline-primary float-right" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')
<script>
    $(document).ready(function()
    {
        $('#js-multiple').select2();
    });
</script>
@endpush
