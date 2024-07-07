<?php
    switch($_REQUEST["acao"]) {         // switch de ações
        case 'cadastrar':
            $name = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);      // 'md5' criptografa a senha
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$name}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn-> query($sql);

            if($res == true) {
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href = '?page = listar';</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href = '?page = listar';</script>";                
            }
            break;

        case 'editar':

            break;

        case 'excluir':

            break;
    }