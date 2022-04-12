<?php

include 'connection.php';

$uuid_kitap = $_GET['uuid'];

$sorgu_delete = $dbh -> prepare("DELETE FROM books WHERE uuid=:code ");

$sorgu_delete -> execute(['code'=> $uuid_kitap]);

header('location:index.php');