<?php

// Verificar se a chave 'acao' existe em $_REQUEST
if (isset($_REQUEST['acao'])) {
    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']); // MD5 para não deixar senha exposta
            $data_nasc = $_POST['data_nasc'];

            // Inserindo os dados na tabela
            $sql = "INSERT INTO usuários (nome, email, senha, data_nasc) VALUES ('$nome', '$email', '$senha', '$data_nasc')";
            $res = $conexao->query($sql);

            if ($res) {
                print '<script>alert("Cadastrado com Sucesso");</script>';
                print '<script>location.href = "?page=listar";</script>';
            } else {
                print '<script>alert("Não foi possível Cadastrar");</script>';
                print '<script>location.href = "?page=listar";</script>';
            }
            break;

        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']); // MD5 para não deixar senha exposta
            $data_nasc = $_POST['data_nasc'];

            $sql = "UPDATE usuários SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=" . $_REQUEST["id"];
            $res = $conexao->query($sql);

            if ($res) {
                print '<script>alert("Editado com Sucesso");</script>';
                print '<script>location.href = "?page=listar";</script>';
            } else {
                print '<script>alert("Não foi possível Editar");</script>';
                print '<script>location.href = "?page=listar";</script>';
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM usuários WHERE id=" . $_REQUEST["id"];
            $res = $conexao->query($sql);

            if ($res) {
                print '<script>alert("Excluído com Sucesso");</script>';
                print '<script>location.href = "?page=listar";</script>';
            } else {
                print '<script>alert("Não foi possível Excluir");</script>';
                print '<script>location.href = "?page=listar";</script>';
            }
            break;

        default:
            print '<script>alert("Ação inválida!");</script>';
            break;
    }
} else {
    print '<script>alert("Ação não especificada!");</script>';
    print '<script>location.href = "?page=listar";</script>';
}
?>