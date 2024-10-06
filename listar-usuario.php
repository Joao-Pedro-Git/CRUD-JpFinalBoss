<?php

// Verifica se o usuário está logado
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php'); // Redireciona para a página de login
    exit;
}

// O restante do seu código para listar os usuários aqui


// Conexão com o banco de dados
include("config.php");

// Código para listar usuários
$sql = "SELECT * FROM usuários"; // Altere o nome da tabela se necessário
$res = $conexao->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . htmlspecialchars($row->id) . "</td>";
        print "<td>" . htmlspecialchars($row->nome) . "</td>";
        print "<td>" . htmlspecialchars($row->email) . "</td>";
        print "<td>" . htmlspecialchars($row->data_nasc) . "</td>";
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar&acao=excluir&id=" . $row->id . "'; } else { false; }\" class='btn btn-danger'>Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>