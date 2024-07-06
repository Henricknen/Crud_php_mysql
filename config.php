<?php
    define('HOST', 'localhost');       // definindo o servidor da conexão 'localhost' servidor local
    define('USER', 'root');     // usuário
    define('PASS', '');     // senha
    define('BASE', 'cadastro');     // nome do banco de dados

    $conn = new MySQLi(HOST, USER, PASS, BASE);     // criando uma conexão MySQLi usando as constantes definidas acima e armazenando na variável '$conn'