<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(!empty($_FILES["foto"]["name"])){
            
            $pasta = "./imagem/";
            
            $nomeOriginal = str_replace(" ","_",$_FILES["foto"]["name"]);

            $foto = $nomeOriginal;
        }
        else{
            $foto = "_perfil.png";
        }

        // pegando os dados vindos do formulário
        $titulo_livro = filter_input(INPUT_POST, "titulo_livro", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $autor_livro = filter_input(INPUT_POST, "autor_livro", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $editora_livro = filter_input(INPUT_POST, "editora_livro", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $genero_livro = filter_input(INPUT_POST, "genero_livro", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        try{
            require_once("./_conexao/conexao.php");

            $comandoSQL = $conexao->prepare("
                INSERT INTO livro(
                    titulo_livro,
                    foto_livro,
                    autor_livro,
                    editora_livro,
                    genero_livro)
                VALUES(
                    :titulo_livro,
                    :foto_livro,
                    :autor_livro,
                    :editora_livro,
                    :genero_livro)
            
            ");

            $comandoSQL->execute(array(
                ":titulo_livro" => $titulo_livro,
                ":foto_livro" => $foto,
                ":autor_livro" => $autor_livro,
                ":editora_livro" => $editora_livro,
                ":genero_livro" => $genero_livro,
            ));

            if ($comandoSQL->rowCount() > 0){
                // echo("Inserido com sucesso");

                if(!empty($_FILES["foto"]["name"])){
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
                }
                
                header("location:./visualizacao.php");
                exit();
            }
            else{
                echo("Erro ao inserir dados");
            }

        } catch (PDOException $erro){
            echo("Entre em contato com o suporte");
        }
    }
    else{ 
        echo ("Entre em contato com o suporte");
    }