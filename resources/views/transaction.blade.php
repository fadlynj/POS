<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Transaksi</title>
</head>
<body>
    <h2>Daftar Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Konsumen</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=1; $i <= 10; $i++) {?>
                <tr>
                    <td>Tanggal <?= $i ?> Bulan <?= $i+1 ?></td>
                    <td>Konsumen <?= $i ?></td>
                    <td>Barang <?= $i ?></td>
                    <td><?= $i * 5 ?></td>
                    <td><?= $i * 150000 ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <br>
    <a href="http://127.0.0.1:8000">Kembali ke Beranda</a>
</body>
</html>