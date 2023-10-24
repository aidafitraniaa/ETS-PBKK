<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div>
            <label>Jenis Barang</label>
            <input type="text" name="jenis barang" placeholder="Jenis Barang" />
        </div>
        <div>
            <label>Kondisi Barang</label>
            <input type="text" name="kondisi barang" placeholder="Kondisi Barang" />
        </div>
        <div>
            <label>Keterangan Barang</label>
            <input type="text" name="keterangan barang" placeholder="Keterangan Barang" />
        </div>
        <div>
            <label>Kecacatan Barang</label>
            <input type="text" name="kecacatan barang" placeholder="Kecacatan Barang" />
        </div>
        <div>
            <label>Jumlah Barang</label>
            <input type="text" name="jumlah barang" placeholder="Jumlah Barang" />
        </div>
        <div>
            <label>Foto</label>
            <input type="text" name="foto" placeholder="Foto" />
        </div>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>