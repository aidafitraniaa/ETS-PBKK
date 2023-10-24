<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div>
        <label>Jenis Barang</label>
            <input type="text" name="jenisbarang" placeholder="Jenis Barang" value="{{$product->jenisbarang}}" />
        </div>
        <div>
        <label>Kondisi Barang</label>
            <input type="text" name="kondisibarang" placeholder="Kondisi Barang" value="{{$product->kondisibarang}}" />
        </div>
        <div>
        <label>Keterangan Barang</label>
            <input type="text" name="keteranganbarang" placeholder="Keterangan Barang" value="{{$product->keteranganbarang}}" />
        </div>
        <div>
        <label>Kecacatan Barang</label>
            <input type="text" name="kecacatanbarang" placeholder="Kecacatan Barang" value="{{$product->kecacatanbarang}}" />
        </div>
        <div>
        <label>Jumlah Barang</label>
            <input type="text" name="jumlahbarang" placeholder="Jumlah Barang" value="{{$product->jumlahbarang}}" />
        </div>
        <div>
        <label>Foto</label>
            <input type="text" name="foto" placeholder="Foto" value="{{$product->foto}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>