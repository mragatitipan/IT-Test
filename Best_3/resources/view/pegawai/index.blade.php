@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Data Pegawai</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->umur }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <img src="{{ $p->getFoto() }}" width="100px" />
                                </td>
                                <td>
                                    <a href="{{ route('pegawai.edit', $p->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('pegawai.destroy', $p->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                
