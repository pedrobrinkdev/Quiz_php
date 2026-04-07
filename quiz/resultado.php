<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit();
}

$pontuacao = 0;

if (isset($_POST['q1']) && $_POST['q1'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q2']) && $_POST['q2'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q3']) && $_POST['q3'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q4']) && $_POST['q4'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q6']) && $_POST['q6'] == 'opcao3') { $pontuacao++; }
if (isset($_POST['q7']) && $_POST['q7'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q8']) && $_POST['q8'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q9']) && $_POST['q9'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q10']) && $_POST['q10'] == 'opcao3') { $pontuacao++; }
if (isset($_POST['q11']) && $_POST['q11'] == 'opcao3') { $pontuacao++; }
if (isset($_POST['q12']) && $_POST['q12'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q13']) && $_POST['q13'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q14']) && $_POST['q14'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q15']) && $_POST['q15'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q16']) && $_POST['q16'] == 'opcao2') { $pontuacao++; }

if (
    isset($_POST['q5']) &&
    count($_POST['q5']) == 2 &&
    in_array('opcao2', $_POST['q5']) &&
    in_array('opcao3', $_POST['q5'])) {
    $pontuacao++;
}
if (
    isset($_POST['q17']) &&
    count($_POST['q17']) == 2 &&
    in_array('opcao1', $_POST['q17']) &&
    in_array('opcao2', $_POST['q17'])) {
    $pontuacao++;
}

if (isset($_POST['q18']) && $_POST['q18'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q19']) && $_POST['q19'] == 'opcao2') { $pontuacao++; }
if (isset($_POST['q20']) && $_POST['q20'] == 'opcao2') { $pontuacao++; }

if ($pontuacao <= 10) {
    $desempenho = "Precisa revisar meu mano";
} elseif ($pontuacao <= 17) {
    $desempenho = "Quase lá, já da pra passar pelo menos";
} else {
    $desempenho = "Aí tu deitou fi, mandou bem demais";
}

$api = @file_get_contents("https://motivational-spark-api.vercel.app/api/quotes/random");
$dados = json_decode($api, true);

function fallbackQuotable() {
    $json = @file_get_contents("https://api.quotable.io/random");
    $data = json_decode($json, true);
    if ($data && isset($data['content'])) {
        return $data['content'] . " — " . ($data['author'] ?? "Desconhecido");
    }
    return false;
}

if ($dados && isset($dados['quote'])) {
    $frase_dia = $dados['quote'] . " — " . ($dados['author'] ?? "Desconhecido");
} else {
    $fallback = fallbackQuotable();
    $frase_dia = $fallback ? $fallback : "Continue estudando e evoluindo no PHP.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Resultado</h1>
        </div>

        <div class="resultado-box">
            <?php if (isset($_SESSION['nome'])): ?>
                <p class="user-info">> Usuário: <strong><?= htmlspecialchars($_SESSION['nome']) ?></strong></p>
            <?php endif; ?>

            <?php if (isset($_COOKIE['email_user'])): ?>
                <p class="user-info">> Email: <?= htmlspecialchars($_COOKIE['email_user']) ?></p>
            <?php endif; ?>

            <div class="score"><?= $pontuacao ?> / 20</div>

            <p class="desempenho"><?= htmlspecialchars($desempenho) ?></p>

            <div class="frase-dia">
                <?= htmlspecialchars($frase_dia) ?>
            </div>

            <form action="logout.php" method="post">
                <button type="submit" class="btn btn-logout">> Sair do sistema</button>
            </form>
        </div>
    </div>
</body>
</html>
