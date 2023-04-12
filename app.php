<?php
    require_once 'vendor/autoload.php';

    const DB = 'viktor_test';
    const DB_NAME = 'root';
    const DB_PASSWORD = 'root';

$get_file = function () {
        $matrix_data = [];

        $fd = fopen("matrix.txt", 'r') or die("не удалось открыть файл");
        while(!feof($fd))
        {
            $str = trim(fgets($fd));
            $matrix_data[] = $str;
        }

        return $matrix_data;
    };


    if (!empty($_GET['matrix_transport'])) {
        $matrix_data_set = $get_file();
        krsort($matrix_data_set);
        file_put_contents('matrix.txt', implode("\n", $matrix_data_set ));
    }

    if (!empty($_GET['db_write'])) {
        require_once 'excel_to_db.php';
    }

    if (!empty($_GET['db_read'])) {
        require_once 'parse_db.php';
    }

    if (!empty($_GET['read_file'])) {
        $read_file = true;
        $matrix_data = $get_file();
    }


