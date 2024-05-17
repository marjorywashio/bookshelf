<?php
    try {
        require_once("./_conexao/conexao.php");

        $id_livro = filter_input(INPUT_GET, "id_livro", FILTER_SANITIZE_NUMBER_INT);

        $comandoSQL = $conexao->prepare("
        
            SELECT * FROM livro WHERE id_livro = :id_livro
        
        ");

        $comandoSQL->execute(array(
            ":id_livro" => $id_livro
        ));

        $retorno = $comandoSQL->fetch();

        //echo "<pre>";
        //print_r($retorno);  ou var_dump($retorno);
        //echo "</pre>";

    } catch (PDOException $erro) {
        echo("Entre em contato com o suporte");
    }