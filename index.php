<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Gitar Hariando</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <center>
                <div class="halaman">Produk Toko Gitar</div>
            </center>
            <div class="produk">
                <div class="form">
                    <center>
                        <div class="from-wrap">
                            <h2>Stok Toko Gitar Hariando</h2>
                            <img src="akustik.jpg" alt="Gitar Akustik" class="gambar">
                            <form action="index.php" method="GET">
                                <table>
                                    <tr>
                                        <td>Nama Produk (Gitar)</td>
                                        <td> : </td>
                                        <td><?php echo $_GET["nama"]; ?></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>Jenis Produk (Akustik/Clasic)</td>
                                        <td> : </td>
                                        <td><?php echo $_GET["jenis"]; ?></td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>Banyak Stok Produk</td>
                                        <td> : </td>
                                        <td><?php echo $_GET["banyak"]; ?></td>
                                    </tr>
                                </table>
                            </form>
                            <h3 class="text">Terimakasih</h3>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>