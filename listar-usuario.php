<h1 class="mb-4">Listar Usuário</h1>

<?php

$sql = "SELECT * FROM usuários";
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
        print "<td>" . htmlspecialchars($row->data_nasc) . "</td>"; // Usando a coluna 'data_nasc'
        print "<td>
                    <button onclick=\"location.href='?page=editar&id=" . $row->id . "'\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar&acao=excluir&id=" . $row->id . "'; } else { false; }\" class='btn btn-danger'>Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>"; // Fecha a tabela aqui
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>"; // Corrigido
}

?>