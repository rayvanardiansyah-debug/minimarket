<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table border="1">
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
        <!-- Looping data produk dari controller -->
        @foreach($products as $product)
        <tr>
            <td>{{ $product->nama }}</td>
            <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
