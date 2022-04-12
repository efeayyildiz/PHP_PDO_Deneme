<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

include 'connection.php';

$query_select ="SELECT * FROM categories ";
$sorgu2 = $dbh -> query($query_select);
$select_c = $sorgu2-> fetchAll(PDO::FETCH_ASSOC);

$query_select_2 ="SELECT * FROM writers ";
$sorgu3 = $dbh -> query($query_select_2);
$select_w = $sorgu3 -> fetchAll(PDO::FETCH_ASSOC);



 if(isset($_POST["kaydet_btn"])){

       $kitapadi        = $_POST['kitapadi'];
       $kitapkategori   = $_POST['kitapkategori'];
       $kitapyazari     = $_POST['kitapyazari'];
       $kitapfiyati     = $_POST['kitapfiyati'];

        $pdoResult = $dbh->prepare('INSERT INTO books (name,uuid,category,writer,price) VALUES (:kitapadi,:uuid,:kitapkategori,:kitapyazari,:kitapfiyati)');
        $pdoResult->execute([
            'kitapadi'    => $kitapadi,
            'kitapkategori'=> $kitapkategori,
            'kitapyazari' => $kitapyazari,
            'kitapfiyati' => $kitapfiyati,
            'uuid'  => gen_uuid()
        ]);

        header("Location:index.php");
        }



?>
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
                    <label for="kitapadi"class="form-label">Kitap Adi</label>
                    <input type="text" class="form-control"name="kitapadi">
                </div>
                <div class="col-5">
                    <label for="kitapkategorisi" class="form-label">Kitap Kategorisi</label>
                    <select name="kitapkategori" class="form-control" >
                        <?php foreach ($select_c as $satir_indis => $category){ ?>
                        <option value=<?=$category['id'];?>
                        ><?=$category['category']?></option>
                        <?php } ?> 
                    </select>
                </div>
                <div class="col-5">
                    <label for="kitapyazari"class="form-label">Kitap yazari</label>
                    <select name="kitapyazari" class="form-control" >
                        <?php foreach ($select_w as $writer_indis => $writers){ ?>
                        <option value=<?=$writers['id'];?>
                        ><?=$writers['name']; echo " ".$writers['surname']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-5">
                    <label for="dtarih"class="form-label">Tarih</label>
                    <input type="date" class="form-control"name="dtarih">
                </div>
                <div class="col-5">
                    <label for="kitapfiyati"class="form-label">Kitap fiyati</label>
                    <input type="number" class="form-control"name="kitapfiyati">
                </div>
                <button type="submit" name="kaydet_btn" class="btn btn-primary btn-lg">Ekle</button>
            </form>
        </div>
    </main>
    <footer></footer>
</body>
</html>

