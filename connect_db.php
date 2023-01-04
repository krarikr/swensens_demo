<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "swensens_demo";

    try {
        $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connect";
    } catch(PDOEXCEPTION $e) {
        echo "<script>alert('Faild to Connect')<script/>" . $e->getMessage();
    }

?>