<?php

    include_once 'config.php';

    $query = $connect->query("SELECT * from tb_user");

    while ($data = $query->fetch_assoc()){

        $id_user = $data ['id_user'];
        $name = $data ['name'];
        $address = $data ['address'];
        $phone = $data ['phone'];

    
    }
?>