<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

include "connection.php";

$uuid_detay= $_GET['uuid'];
$sorgu_detay= $dbh->prepare("SELECT * FROM books where uuid=:code");
$sorgu_detay -> execute(['code'=> $uuid_detay]);
$Kitap_detayi = $sorgu_detay -> fetch(PDO::FETCH_ASSOC);

#$sorgu_cat_detay= $dbh->prepare("SELECT * FROM categories Where id=:");
#$cat_detay = $sorgu_cat_detay ->fetch(PDO::FETCH_ASSOC);


#echo "<pre>";
#print_r($Kitap_detayi);

#$sorgu = $dbh->query($query);
#$sorgu -> execute(['code'=>$uuid_detay]);
#$Kitap_detayi = $sorgu -> fetch(PDO::FETCH_ASSOC);

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
            <div class="row mt-5 ">
                <div class="col-3">
                    <div class="card" >
                      <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                             <h5 class="card-title">Card title</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>