@extends('layouts.app')

<h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}">Tambah Data</a>
    <table border="2">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Harga Satuan</th>
                <th>Action</th>
            </tr>     
        </thead>
        <tbody>
            @foreach ($barang as $Barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$Barang->nama_barang}}</td>
                <td>{{$Barang->jenis_barang}}</td>
                <td>{{$Barang->stock}}</td>
                <td>{{$Barang->status}}</td>
                <td>Rp.{{$Barang->harga_satuan}}</td>
                <td>
                    <a href="{{route('barang.edit', $Barang->id)}}">Edit</a>
                        <form action="{{route('barang.destroy', $Barang->id)}}" method="post" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                </form>
            </td>
            </tr>     
            @endforeach
        </tbody>
    </table>


