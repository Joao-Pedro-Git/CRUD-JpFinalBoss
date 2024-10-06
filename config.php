<?php

if (!defined('HOST')) {
    define('HOST', 'localhost');
}
if (!defined('USER')) {
    define('USER', 'root');
}
if (!defined('PASS')) {
    define('PASS', '');
}
if (!defined('BASE')) {
    define('BASE', 'cadastro');
}

$conexao = new Mysqli(HOST, USER, PASS, BASE);

// Verificação da conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

?>
