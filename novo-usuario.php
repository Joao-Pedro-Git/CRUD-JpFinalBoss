<h1>Novo Usuario</h1>

<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="cadastrar">
    
    <div class="mb-3">

        <label for="">Nome</label>
        <input type="text" name="nome" placeholder="Nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" placeholder="Senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" placeholder="Data de Nacismento" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>