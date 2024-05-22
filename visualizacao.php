<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>ॱᐧ.˳˳.⋅ପໄଓ  Minha biblioteca</title>
</head> 

<body>
    <div class="menu">
        <?php require_once("./_menu.php"); ?>
    </div>

    <div class="fundo">

        <div class="pesquisa">
            <form action="" method="GET" class="form-pesquisa">
                <input type="text" name="query" placeholder="Digite o título do livro..." class="textopesquisa" required>
                <input type="submit" value="Pesquisar" class="botao-pesquisa">
            </form>
        </div>

        <div class="conteudo">

            <div class="frase">
                <p class="quote">"Palavras são, na minha nada humilde opinião, nossa inesgotável fonte de magia. Capazes de causar grandes sofrimentos e também de remediá-los."</p>
                <p class="autor">Alvo Dumbledore , Harry Potter e as Relíquias da Morte</p>
            </div>

            
            
            <?php 
                 // Inclui o arquivo de visualização padrão ou de pesquisa
                if (isset($_GET['query']) && !empty($_GET['query'])) {
                    $query = $_GET['query'];
                    require_once("./pesquisa.php");
                } else {
                    require_once("./visualizacaobd.php");
                }

                if (isset($totalRegistros) && $totalRegistros > 0) {
                    foreach ($dados as $linha) {
            ?>

            <div class="card">
                <div class="livro">
                    <h3 class="titulo"><?=$linha["titulo_livro"];?></h2>
                    <p><strong>Autor:</strong><br> <?= nl2br($linha["autor_livro"]); ?></p>
                    <p><strong>Editora:</strong><br> <?= nl2br($linha["editora_livro"]); ?></p>
                    <p><strong>Gênero:</strong><br> <?= nl2br($linha["genero_livro"]); ?></p>
                </div>
                
                <div class="fotolivro">
                    <img 
                        src="./imagem/<?=$linha['foto_livro'];?>" 
                        alt="Imagem de Perfil" 
                        width="80">
                </div>

                <div class="botao">
                    <form action="./editar.php?id_livro=<?=$linha['id_livro'];?>" method="post">
                        <button type="submit">
                            <img src="./img/editar.png" alt="Editar">
                            <span class="tooltip">Editar</span>
                            
                        </button>
                    </form>

                    <form action="./excluir.php?id_livro=<?=$linha['id_livro'];?>" method="post" onsubmit="return confirmarExclusao();">
                        <button type="submit">
                            <img src="./img/excluir.png" alt="Editar">
                            <span class="tooltip">Excluir</span>
                            
                        </button>
                    </form>
                </div>

            </div>

            <?php
                    }
                } else {
                    echo "<p>Nenhum livro encontrado</p>";
                }
            ?>

        </div>

            <p style="
                    display:flex; 
                    justify-content:flex-end;
                    color:#332E1D; 
                    position:fixed;
                    left: 0;
                    bottom: 0;
                    width:100%;
                    padding:3px 0;">Marjory - <?=date('Y')?>
            </p>

            <script>
                function confirmarExclusao() {
                    if(confirm("Tem certeza de que deseja excluir este livro?")) {
                        window.location.href = "./visualizacao.php";
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
    </div>
</body>
</html>