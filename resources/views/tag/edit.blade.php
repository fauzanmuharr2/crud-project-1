
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Tag
                </div>
                <div class="card-body">
                    <form action="{{route('tag.update',$tag->id)}}" method="post">
                        <input type="hidden" nama="_method" value="PUT">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Tag</label>
                            <input type="text" name="tag" value="{{$tag->tag}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

