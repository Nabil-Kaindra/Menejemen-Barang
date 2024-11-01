<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="post">
        @csrf

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" id="nama_barang" required>
        <br> 

        <tr>
            <td>
                <label for="jenis_barang">Jenis barang</label>
            </td>
            <td>
                <select name="jenis_barang" id="">
                    <option value="">--PILIH--</option>
                    <option value="makanan">Makanan</option>
                    <option value="elektronik">Elektronik</option>
                    <option value="rumahtangga">Rumah Tangga</option>
                </select>
            </td>
        </tr>
        <br>

        <label for="stock">Stock:</label>
        <input type="text" name="stock" id="stock" required>
        @if ($errors->has('stock'))
            <div class="alert alert-danger">{{ $errors->first('stock') }}</div>
        @endif
        <br>

        <label for="status">Status:</label>
        <select name="status" id="" >
            <option value="tersedia">Tersedia</option>
            <option value="tidak_tersedia">Tidak Tersedia</option>
        </select>
        <br>

        <label for="harga_satuan">Harga Satuan:</label>
        <input type="text" name="harga_satuan" id="harga_satuan" required>
        <br>

        <button type="submit">Create</button>
    </form>
</body>
</html>
