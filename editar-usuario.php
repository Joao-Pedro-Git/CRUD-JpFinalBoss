<h1>Editar Usuario</h1>

<?php
$sql = "SELECT * FROM usuários WHERE id=" . $_REQUEST["id"];
$res = $conexao->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar"> <!-- Campo oculto -->
    <input type="hidden" name="id" value="<?php print htmlspecialchars($row->id); ?>">
    
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Nome" class="form-control" value="<?php print htmlspecialchars($row->nome); ?>">
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Email" class="form-control" required value="<?php print htmlspecialchars($row->email); ?>">
    </div>

    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" placeholder="Senha" class="form-control" required> <!-- Campo obrigatório -->
    </div>

    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" placeholder="Data de Nascimento" class="form-control" value="<?php print htmlspecialchars($row->data_nasc); ?>">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
