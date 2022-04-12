<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

include "connection.php";

$query= "SELECT b.id,b.uuid,b.name,c.category, concat(w.name,' ',w.surname) as writer,b.status,b.price
FROM books b
LEFT JOIN writers w on b.writer=w.id
LEFT JOIN categories c on b.category=c.id";

$sorgu = $dbh->query($query);
$Kitaplar = $sorgu -> fetchAll(PDO::FETCH_ASSOC);



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
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-hover table -striped">
                        <thead>
                            <tr>
                                <th>Kitap No</th>
                                <th>Kitap isim</th>
                                <th>Kitap Kategorisi</th>
                                <th>Yazari</th>
                                <th>Kitap Durumu</th>
                                <th>Fiyati</th>
                                <th>Islem</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($Kitaplar as $satirno => $kitap){ ?>
                            <tr>
                                <td> <?=$kitap['id'];?> </td>
                                <td> <?=$kitap['name'];?> </td>
                                <td> <?=$kitap['category'];?> </td>
                                <td> <?=$kitap['writer'];?> </td>
                                <td> <?=$kitap['status'];?> </td>
                                <td> <?=$kitap['price'];?> </td>
                                <td><div class="btn-group">
                                <a href="detay.php?uuid=<?=$kitap['uuid'];?>" class="btn btn-success">Detay</a>
                                <a href="#" class="btn btn-secondary">Guncelle</a>
                                <a href="urunsil.php?uuid=<?=$kitap['uuid'];?>" onclick="return confirm('Silinsin mi')" class="btn btn-danger">Kaldir</a>
                                </div></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>
