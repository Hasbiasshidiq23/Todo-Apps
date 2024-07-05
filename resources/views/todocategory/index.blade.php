@extends('layouts.admin.app')

@section('title', 'Kategori Catatan')

@section('content')
<div class="m-3">
    <a href="/todocategory/create" class="btn btn-success">Tambah Todo</a>
</div>

@foreach ($categories as $value)
        <div class="card">
            <div class="card-body">
              <p>{{ $value->category }}</p>
              <a href="/todocategory/edit/{{ $value->id }}" class="btn btn-warning">Ubah</a>
              <a href="/todocategory/delete/{{ $value->id }}" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        @endforeach
@endsection
