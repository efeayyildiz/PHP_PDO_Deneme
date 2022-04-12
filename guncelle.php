
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitap (Data Base) Denemeleri</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text center">Kitap (Data Base) Denemeleri

                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="btn-group">
                <a href="index.php" class="btn btn-lg btn-outline-primary">Tum kitaplar</a>
                <a href="ekle.php" class="btn btn-lg btn-outline-primary">Kitap ekle</a>
                </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="" method="post"class="row mt-4 g-3">
                <div class="col-5">
                    <label for="Kitapadi"class="form-label">Kitap Adi</label>
                    <input type="text" class="form-control"name="Kitapadi">
                </div>
                <div class="col-5">
                    <label for="kitapkategorisi" class="form-label">Kitap Kategorisi</label>
                    <select name="kitapkategori" class="form-control"name=kitapkategorisi>
                        <option value="bilim-kurgu">Bilim - Kurgu</option>
                        <option value="macera">Macera</option>
                        <option value="siir">Siir</option>
                    </select>
                </div>
                <div class="col-5">
                    <label for="kitapadetsayisi"class="form-label">Kitap adet sayisi</label>
                    <input type="number" class="form-control"name="kitapadetsayisi">
                </div>
                <div class="col-5">
                    <label for="dtarih"class="form-label">Tarih</label>
                    <input type="date" class="form-control"name="dtarih">
                </div>
                <div class="col-5">
                    <label for="kitapfiyati"class="form-label">Kitap fiyati</label>
                    <input type="number" class="form-control"name="kitapfiyati">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Guncelle</button>
            </form>
        </div>
    </main>
    <footer></footer>
</body>
</html>



<?php
error_reporting(E_ALL);
ini_set("display_errors",1);



?>
