@extends('layouts.master')
@section('title', 'Data Alternatif')

@section('content')
<div class="container pt-5 mt-4">
    <div class="row justify-content-between mb-3 mb-md-0">
        <h1>Data Alternatif</h1>
        @auth
        <a href="{{ route('alternatives.create') }}" class="btn btn-sm btn-danger align-self-center">Tambah
            Alternatif</a>
        @endauth
    </div>
    <div class="row table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Bimbel</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @forelse ($alternatives as $alternative)
                <tr>
                    <td>{{ $alternatives->firstItem() + $loop->iteration - 1 }}</td>
                    <td>{{ $alternative->nama }}</td>
                    <td>{{ $alternative->alamat }}</td>
                    <td>
                        <a href="{{ route('alternatives.show', ['alternative' => $alternative->id]) }}"
                            class="btn btn-sm btn-info text-light">Detail</a>
                        <form action="{{ route('alternatives.destroy', ['alternative' => $alternative->id]) }}"
                            method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-warning btn-hapus"
                                data-name="{{ $alternative->nama }}">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="bg-info" colspan="4">Tidak ada data...</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="mx-auto">
            {{ $alternatives->links() }}
        </div>
    </div>
</div>
@endsection
