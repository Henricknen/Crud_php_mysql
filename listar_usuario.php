<h1>Listar Usuários</h1>
<?php 
    $sql = "SELECT * FROM usuarios";        // 'consulta', seleçionando tudo da tabela usuarios

    $res = $conn-> query($sql);     // conexão executando a 'query'

    $qtd = $res-> num_rows;     // pegando o numero de linhas da consulta e armazenando na variável '$qtd'

    if($qtd > 0) {
        print "<table class = 'table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de nascimento</th>";
        print "</tr>";
        while($row = $res-> fetch_object()) {       // 'fetch_object' traz os objetos do resultado da consulta e armazena na variável '$row'
            print "<tr>";
            print "<td>". $row-> id. "</td  >";        // imprimindo o objeto 'id'
            print "<td>". $row-> nome. "</td>";
            print "<td>". $row-> email. "</td>";
            $data_nascimento = date('d/m/Y', strtotime($row->data_nasc));
            print "<td>". $data_nascimento . "</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class = 'alert alert-danger'>Não encontrou resultado!</p>";
    }