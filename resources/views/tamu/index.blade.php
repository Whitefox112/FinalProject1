<!-- resources/views/tamu/index.blade.php -->
@extends('layouts.app')

@section('title', 'Daftar Tamu')

@section('content')
    <h1>Daftar Tamu</h1>

    <a href="{{ route('tamu.create') }}" class="btn-tambah">Tambah Tamu</a>

    <table class="tabel-tamu">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamus as $index => $tamu)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->email }}</td>
                    <td>{{ $tamu->pesan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
