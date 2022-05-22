
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NU Mineral</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <head class="header">
            <h1 class="title">Form Pembelian NU Mineral</h1>
        </head>

        <section class="content">
            <div class="form">
                <form action="ResultController.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <br>
                        <input type="text" name="nama" placeholder="Isi nama pemesan" id="nama" class="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis">Ukuran</label>
                        <br>

                        <div class="form-group">
                            <label for="ukuran" class="label-ukuran">120ml</label>
                            <input type="number" name="1" id="small" placeholder="Jumlah" class="input-ukuran" min="0">
                            <span>kardus</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="ukuran" class="label-ukuran">220ml</label>
                            <input type="number" name="2" id="220ml" placeholder="Jumlah" class="input-ukuran" min="0">
                            <span>kardus</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="ukuran" class="label-ukuran">330ml</label>
                            <input type="number" name="3" id="330ml" placeholder="Jumlah" class="input-ukuran" min="0">
                            <span>kardus</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="ukuran" class="label-ukuran">600ml</label>
                            <input type="number" name="4" id="600ml" placeholder="Jumlah" class="input-ukuran" min="0">
                            <span>kardus</span>
                        </div>
                    </div>

                    <div class="submit-button">
                        <button type="submit">Pesan</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

</body>
</html>