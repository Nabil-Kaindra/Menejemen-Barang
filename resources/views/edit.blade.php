<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT') 
    
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}" required>
        <br>

        <label for="jenis_barang">Jenis barang</label>
            <select name="jenis_barang" id="">
                <option value="">--PILIH--</option>
                <option value="makanan" {{$barang->jenis_barang === 'makanan' ? 'selected' : ''}}>Makanan</option>
                <option value="elektronik"  {{$barang->jenis_barang === 'elektronik' ? 'selected' : ''}}>Elektronik</option>
                <option value="rumahtangga"  {{$barang->jenis_barang === 'rumahtangga' ? 'selected' : ''}}>Rumah Tangga</option>
            </select>
        <br>

        <label for="stock">Stock:</label>
        <input type="text" name="stock" id="stock" value="{{ $barang->stock }}">
        @if ($errors->has('stock'))
            <div class="alert alert-danger">{{ $errors->first('stock') }}</div>
        @endif
        <br>
    
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="tersedia" {{ $barang->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
            <option value="tidak tersedia" {{ $barang->status == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
        </select>
        <br>
    
        <label for="harga_satuan">Harga Satuan:</label>
        <input type="number" name="harga_satuan" id="harga_satuan" value="{{ $barang->harga_satuan }}">
        <br>
    
        <button type="submit">Update</button>
    </form>

</body>
</html>
