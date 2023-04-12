<?php
    $inputFileName = 'table.xlsx';
    $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);

    $total_rows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

    $data_db = [];

    for ($i= 2; $i <= $total_rows; $i++)
    {
        $name = $objPHPExcel->getActiveSheet()->getCell('A'.$i )->getValue();
        $phone = $objPHPExcel->getActiveSheet()->getCell('B'.$i )->getValue();
        $price = $objPHPExcel->getActiveSheet()->getCell('C'.$i )->getValue();

        $data_db[] = compact('name', 'phone', 'price');
    }

    try {
        $dbh = new PDO('mysql:dbname=' . DB . ';host=localhost', DB_NAME, DB_PASSWORD);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $sth = $dbh->prepare("TRUNCATE `users`");
    $sth->execute();

    foreach ($data_db as $item) {
        $sth = $dbh->prepare("INSERT INTO `users` SET `name` = :name, `phone` = :phone, `price` = :price");
        $sth->execute($item);
    }

    $data_insert = true;