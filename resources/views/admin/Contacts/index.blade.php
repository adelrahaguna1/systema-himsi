@extends('layouts.admin') {{-- Asumsi Anda menggunakan layout admin dengan nama 'layouts.admin' --}}

@section('content')
    <h1>Daftar Pesan Kontak</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Pesan</th>
                <th>Tanggal Kirim</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $contact->nama }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->no_hp ?? '-' }}</td>
                    <td>{{ $contact->pesan }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada pesan kontak.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection