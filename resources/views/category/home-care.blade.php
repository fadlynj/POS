<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Home Care</title>
</head>
<body>
    <h2>Produk Home Care</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=1; $i <= 10; $i++) {?>
                <tr>
                    <td>Barang <?= $i ?></td>
                    <td><?= $i * 10000 ?></td>
                    <td><?= $i * 5 ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <br>
    <a href="http://127.0.0.1:8000">Kembali ke Beranda</a>
</body>
</html>