@extends('master')
@section('title', 'Tambah Data')
@section('judul_halaman', 'Tambah Data Mahasiswa')
@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br><br>
<!-- menampilkan error validasi-->
@if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/mahasiswa/simpan" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="namamhs">Nama</label>
        <input type="text" name="namamhs" class="form-control" value="{{ old('namamhs') }}">
    </div>
    <div class="form-group">
        <label for="nimmhs">NIM</label>
        <input type="number" name="nimmhs" class="form-control" value="{{ old('nimmhs') }}">
    </div>
    <div class="form-group">
        <label for="emailmhs">E-mail</label>
        <input type="text" name="emailmhs" class="form-control" value="{{ old('emailmhs') }}">
    </div>
    <div class="form-group">
        <label for="jurusanmhs">Jurusan</label>
        <input type="text" name="jurusanmhs" class="form-control" value="{{ old('jurusanmhs') }}">
    </div>
    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
</form>
@endsection