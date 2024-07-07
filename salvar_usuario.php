<?php
    switch($_REQUEST["acao"]) {         // switch de ações
        case 'cadastrar':
            $name = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$name}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn-> query($sql);
            break;

        case 'editar':

            break;

        case 'excluir':

            break;
    }