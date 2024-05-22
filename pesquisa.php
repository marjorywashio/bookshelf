<?php
if (isset($query)) {
    // Inclui o arquivo de conexão
    require_once("./_conexao/conexao.php");

    // Escapar a string de consulta para evitar SQL Injection
    // Converte caracteres especiais em entidades HTML, tornando-os seguros para inclusão em consultas SQL
    $query = htmlspecialchars($query, ENT_QUOTES, 'UTF-8');

    // Consultar o banco de dados
    // titulo_livro é semelhante a query
    $sql = "SELECT * FROM livro WHERE titulo_livro LIKE :query ORDER BY id_livro DESC";
    $stmt = $conexao->prepare($sql);
    // % busca qualquer título que contenha o texto fornecido
    $stmt->execute([':query' => "%$query%"]);

    // PDO::FETCH_ASSOC garante que cada linha seja um array associativo onde as chaves são os nomes das colunas no banco de dados
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $totalRegistros = $stmt->rowCount();
}
?>
