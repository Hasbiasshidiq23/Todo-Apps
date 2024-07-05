@extends('layouts.admin.app')

@section('title', 'User')

@section('content')
<div class="m-3">
    <a href="/user/create" class="btn btn-success">Tambah User</a>
</div>

@foreach ($users as $value)
        <div class="card">
            <div class="card-body">
              <p>{{ $value->id }}</p>
              <p>{{ $value->name }}</p>
              <p>{{ $value->email }}</p>
              <a href="/user/edit/{{ $value->id }}" class="btn btn-warning">Ubah</a>
              <a href="/user/delete/{{ $value->id }}" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        @endforeach
@endsection
