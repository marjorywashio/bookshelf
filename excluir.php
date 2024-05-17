<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // pegando os dados vindos do formulário
        $id_livro = filter_input(INPUT_GET, "id_livro", FILTER_SANITIZE_NUMBER_INT);
        
        try{
            require_once("./_conexao/conexao.php");

            $comandoSQL = $conexao->prepare("

                DELETE FROM `livro` WHERE `id_livro` = :id_livro
            ");

            $comandoSQL->execute(array(
                ":id_livro" => intval($id_livro)
            ));
             
            if ($comandoSQL->rowCount() >= 0){
                header("Location: visualizacao.php");
                exit();
            }
            else{
                echo("Erro ao excluir livro");
            }

        } catch (PDOException $erro){
            echo("Entre em contato com o suporte! SQL");
        }
    }
    else{
        echo ("Entre em contato com o suporte");
    }