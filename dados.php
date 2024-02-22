<?php
    $nome = $_POST ['nome'];
    $idade= $_POST['idade'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['tele'];
    $endereco = $_POST['ende'];
    $jogo = $_POST['jogo'];
    $livro = $_POST['livro'];
    $anime = $_POST['anime'];

    echo "Dados enviados com sucesso <br><br>";
    echo "Seja Ben-vindo sr(a) $nome <br> ";
    echo "Sua Idade é: $idade  anos <br>";
    echo "Seu CPF é : $cpf <br>";
    echo "Seu Numero De Telefone é : $telefone <br>";
    echo "Seu Jogo Favorito é: $jogo<br>";
    echo "Seu Livro Favorito é: $livro<br>";
    echo "Seu Anime Favorito é: $anime<br>";
    ?>