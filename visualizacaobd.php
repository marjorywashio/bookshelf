<?php
    require_once("./_conexao/conexao.php"); // once: carrega somente 1x

    try {
        // variável que contem a instrução SQL a ser executada
        $comandoSQL = "SELECT * FROM livro ORDER BY id_livro DESC ";

        // comando para executar a instrução SQL no banco
        $dadosSelecionados = $conexao->query($comandoSQL);

        // transforma os dados vindos do banco em um array associativo
        $dados = $dadosSelecionados->fetchAll(PDO::FETCH_ASSOC);

        // total de registros afetados
        $totalRegistros = $dadosSelecionados->rowCount();

    } catch (PDOException $erro) {
        //echo $erro->getMessage();
        echo("Entre em contato com o suporte");
    }