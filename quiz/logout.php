<?php
// Inicia a sessão
session_start();

// Destroi todos os dados da sessão
session_destroy();

// Redireciona para o início (login)
header('Location: index.php');

// Encerra o código
exit();