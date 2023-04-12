<?php
    try {
        $dbh = new PDO('mysql:dbname=' . DB . ';host=localhost', DB_NAME, DB_PASSWORD);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $sth = $dbh->prepare("SELECT * FROM `users`");
    $sth->execute();
    $data_get_db = $sth->fetchAll();
