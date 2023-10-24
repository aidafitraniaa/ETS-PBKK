<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Jenis Barang</th>
                <th>Kondisi Barang</th>
                <th>Keterangan Barang</th>
                <th>Kecacatan Barang</th>
                <th>Jumlah Barang</th>
                <th>Foto</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->jenisbarang}}</td>
                    <td>{{$product->kondisibarang}}</td>
                    <td>{{$product->keteranganbarang}}</td>
                    <td>{{$product->kecacatanbarang}}</td>
                    <td>{{$product->jumlahbarang}}</td>
                    <td>{{$product->foto}}</td>
                </tr>
                <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                </td>
            @endforeach
        </table>
    </div>
</body>
</html>