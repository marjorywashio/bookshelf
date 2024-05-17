<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ॱᐧ.˳˳.⋅ପໄଓ  Cadastre um livro</title>
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>

    <div class="menu">
        <?php require_once("./_menu.php"); ?>
    </div>

    <div class="conteudo">
        <div class="frase">
            <p class="quote">"Só se vê bem com o coração, o essencial é invisível aos olhos."</p>
            <p class="autor">O Pequeno Príncipe, Antoine de Saint-Exupéry</p>
        </div>

        <div class="form">

            <form action="cadastrobd.php" method="post" enctype="multipart/form-data">

                <div class="cadastro">
                    <p>Cadastre um livro</p>
                </div>

                <div class="formulario">
                    <label for="titulo_livro">Título do livro</label> 
                    <input 
                        type="text" 
                        name="titulo_livro" 
                        id="titulo_livro" 
                        placeholder="Título do livro">
                </div>

                <div class="formulario">
                    <label for="autor_livro">Autor</label> 
                    <input 
                        type="text" 
                        name="autor_livro" 
                        id="autor_livro" 
                        placeholder="Autor">
                </div>

                <div class="formulario">
                    <label for="editora_livro">Editora</label> 
                    <input 
                        type="text" 
                        name="editora_livro" 
                        id="editora_livro" 
                        placeholder="Editora">
                </div>

                <div class="formulario">
                    <label for="genero_livro">Gênero</label> 
                    <input 
                        type="text" 
                        name="genero_livro" 
                        id="genero_livro" 
                        placeholder="Gênero">
                </div>

                <div class="formulario">
                    <input type="file" name="foto" id="foto">
                </div>
                
                <div class="botao">
                    <input 
                        type="reset" 
                        value="Voltar"
                        onclick="javascript:history.go(-1)">
                    <input 
                        type="submit" 
                        value="Salvar">
                </div>

            </form>
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
    </div>
</body>    
</html>