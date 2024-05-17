<?php
    $dns = "mysql:host=localhost;dbname=biblioteca;charset=utf8";
    $user = "root";
    $pass = "";

    try {
        $conexao = new PDO($dns,$user, $pass);

    } catch (PDOException $erro) {
        echo $erro->getMessage();
        //throw $th;
    }
