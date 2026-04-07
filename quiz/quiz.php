<?php
session_start();

if(isset($_POST['email']) && isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $_SESSION['nome'] = $nome;
    setcookie('email_user', $email, time() + (60*60*24*30));
}
elseif(!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Quiz PHP</h1>
        </div>

        <form method="post" action="resultado.php" class="quiz-form">

            <!-- Q1 -->
            <div class="question-card">
                <div class="question-number">Questão 01</div>
                <div class="question-text">O comando <code>echo</code> é utilizado para:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q1" value="opcao1"> Receber dados</label>
                    <label class="option-label"><input type="radio" name="q1" value="opcao2"> Exibir dados</label>
                    <label class="option-label"><input type="radio" name="q1" value="opcao3"> Criar funções</label>
                    <label class="option-label"><input type="radio" name="q1" value="opcao4"> Encerrar o código</label>
                </div>
            </div>

            <!-- Q2 -->
            <div class="question-card">
                <div class="question-number">Questão 02</div>
                <div class="question-text">Em PHP, uma variável começa com:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q2" value="opcao1"> #</label>
                    <label class="option-label"><input type="radio" name="q2" value="opcao2"> $</label>
                    <label class="option-label"><input type="radio" name="q2" value="opcao3"> @</label>
                    <label class="option-label"><input type="radio" name="q2" value="opcao4"> &</label>
                </div>
            </div>

            <!-- Q3 -->
            <div class="question-card">
                <div class="question-number">Questão 03</div>
                <div class="question-text">Qual é uma variável válida?</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q3" value="opcao1"> $1nome</label>
                    <label class="option-label"><input type="radio" name="q3" value="opcao2"> $nome_usuario</label>
                    <label class="option-label"><input type="radio" name="q3" value="opcao3"> nome$</label>
                    <label class="option-label"><input type="radio" name="q3" value="opcao4"> $nome-usuario</label>
                </div>
            </div>

            <!-- Q4 -->
            <div class="question-card">
                <div class="question-number">Questão 04</div>
                <div class="question-text">Qual método envia dados pela URL?</div>
                <select name="q4">
                    <option value="opcao1">POST</option>
                    <option value="opcao2">GET</option>
                </select>
            </div>

            <!-- Q5 -->
            <div class="question-card">
                <div class="question-number">Questão 05</div>
                <div class="question-text">Sobre o método POST (marque as corretas):</div>
                <div class="checkbox-group">
                    <label class="option-label"><input type="checkbox" name="q5[]" value="opcao1"> Dados ficam visíveis na URL</label>
                    <label class="option-label"><input type="checkbox" name="q5[]" value="opcao2"> Mais seguro para envio de dados</label>
                    <label class="option-label"><input type="checkbox" name="q5[]" value="opcao3"> Permite envio de grande volume de dados</label>
                    <label class="option-label"><input type="checkbox" name="q5[]" value="opcao4"> Só funciona com textos</label>
                </div>
            </div>

            <!-- Q6 -->
            <div class="question-card">
                <div class="question-number">Questão 06</div>
                <div class="question-text">Qual input é mais adequado para senha?</div>
                <select name="q6">
                    <option value="opcao1">text</option>
                    <option value="opcao2">email</option>
                    <option value="opcao3">password</option>
                </select>
            </div>

            <!-- Q7 -->
            <div class="question-card">
                <div class="question-number">Questão 07</div>
                <div class="question-text">Qual permite escolher apenas UMA opção?</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q7" value="opcao1"> checkbox</label>
                    <label class="option-label"><input type="radio" name="q7" value="opcao2"> radio</label>
                    <label class="option-label"><input type="radio" name="q7" value="opcao3"> text</label>
                    <label class="option-label"><input type="radio" name="q7" value="opcao4"> textarea</label>
                </div>
            </div>

            <!-- Q8 -->
            <div class="question-card">
                <div class="question-number">Questão 08</div>
                <div class="question-text">Checkbox é usado quando:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q8" value="opcao1"> Apenas uma opção</label>
                    <label class="option-label"><input type="radio" name="q8" value="opcao2"> Múltiplas opções</label>
                </div>
            </div>

            <!-- Q9 -->
            <div class="question-card">
                <div class="question-number">Questão 09</div>
                <div class="question-text">A tag &lt;select&gt; serve para:</div>
                <select name="q9">
                    <option value="opcao1">Campo de texto</option>
                    <option value="opcao2">Lista suspensa</option>
                    <option value="opcao3">Botão</option>
                    <option value="opcao4">Sessão</option>
                </select>
            </div>

            <!-- Q10 -->
            <div class="question-card">
                <div class="question-number">Questão 10</div>
                <div class="question-text">Qual estrutura usamos para decisão?</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q10" value="opcao1"> for</label>
                    <label class="option-label"><input type="radio" name="q10" value="opcao2"> echo</label>
                    <label class="option-label"><input type="radio" name="q10" value="opcao3"> if</label>
                    <label class="option-label"><input type="radio" name="q10" value="opcao4"> array</label>
                </div>
            </div>

            <!-- Q11 -->
            <div class="question-card">
                <div class="question-number">Questão 11</div>
                <div class="question-text">Qual estrutura usamos para repetição?</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q11" value="opcao1"> if</label>
                    <label class="option-label"><input type="radio" name="q11" value="opcao2"> echo</label>
                    <label class="option-label"><input type="radio" name="q11" value="opcao3"> for</label>
                    <label class="option-label"><input type="radio" name="q11" value="opcao4"> isset</label>
                </div>
            </div>

            <!-- Q12 -->
            <div class="question-card">
                <div class="question-number">Questão 12</div>
                <div class="question-text">Um array é:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q12" value="opcao1"> Uma função</label>
                    <label class="option-label"><input type="radio" name="q12" value="opcao2"> Uma variável com múltiplos valores</label>
                    <label class="option-label"><input type="radio" name="q12" value="opcao3"> Um formulário</label>
                    <label class="option-label"><input type="radio" name="q12" value="opcao4"> Um loop</label>
                </div>
            </div>

            <!-- Q13 -->
            <div class="question-card">
                <div class="question-number">Questão 13</div>
                <div class="question-text">Para criar uma função usamos:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q13" value="opcao1"> create</label>
                    <label class="option-label"><input type="radio" name="q13" value="opcao2"> function</label>
                    <label class="option-label"><input type="radio" name="q13" value="opcao3"> def</label>
                    <label class="option-label"><input type="radio" name="q13" value="opcao4"> func</label>
                </div>
            </div>

            <!-- Q14 -->
            <div class="question-card">
                <div class="question-number">Questão 14</div>
                <div class="question-text">Sessões servem para:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q14" value="opcao1"> Armazenar no navegador</label>
                    <label class="option-label"><input type="radio" name="q14" value="opcao2"> Armazenar no servidor</label>
                    <label class="option-label"><input type="radio" name="q14" value="opcao3"> Criar HTML</label>
                    <label class="option-label"><input type="radio" name="q14" value="opcao4"> Fazer requisições</label>
                </div>
            </div>

            <!-- Q15 -->
            <div class="question-card">
                <div class="question-number">Questão 15</div>
                <div class="question-text">Cookies são armazenados:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q15" value="opcao1"> No servidor</label>
                    <label class="option-label"><input type="radio" name="q15" value="opcao2"> No navegador</label>
                </div>
            </div>

            <!-- Q16 -->
            <div class="question-card">
                <div class="question-number">Questão 16</div>
                <div class="question-text">Qual função pode consumir API?</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q16" value="opcao1"> echo</label>
                    <label class="option-label"><input type="radio" name="q16" value="opcao2"> file_get_contents</label>
                    <label class="option-label"><input type="radio" name="q16" value="opcao3"> isset</label>
                    <label class="option-label"><input type="radio" name="q16" value="opcao4"> print_r</label>
                </div>
            </div>

            <!-- Q17 -->
            <div class="question-card">
                <div class="question-number">Questão 17</div>
                <div class="question-text">Sobre cURL (marque as corretas):</div>
                <div class="checkbox-group">
                    <label class="option-label"><input type="checkbox" name="q17[]" value="opcao1"> Faz requisições HTTP</label>
                    <label class="option-label"><input type="checkbox" name="q17[]" value="opcao2"> Consome APIs</label>
                    <label class="option-label"><input type="checkbox" name="q17[]" value="opcao3"> Apenas imprime dados</label>
                    <label class="option-label"><input type="checkbox" name="q17[]" value="opcao4"> Substitui sessão</label>
                </div>
            </div>

            <!-- Q18 -->
            <div class="question-card">
                <div class="question-number">Questão 18</div>
                <div class="question-text">Para acessar dados via POST usamos:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q18" value="opcao1"> $_GET</label>
                    <label class="option-label"><input type="radio" name="q18" value="opcao2"> $_POST</label>
                    <label class="option-label"><input type="radio" name="q18" value="opcao3"> $_SESSION</label>
                    <label class="option-label"><input type="radio" name="q18" value="opcao4"> $_COOKIE</label>
                </div>
            </div>

            <!-- Q19 -->
            <div class="question-card">
                <div class="question-number">Questão 19</div>
                <div class="question-text">Para verificar se variável existe:</div>
                <div class="radio-group">
                    <label class="option-label"><input type="radio" name="q19" value="opcao1"> check()</label>
                    <label class="option-label"><input type="radio" name="q19" value="opcao2"> isset()</label>
                    <label class="option-label"><input type="radio" name="q19" value="opcao3"> exist()</label>
                    <label class="option-label"><input type="radio" name="q19" value="opcao4"> verify()</label>
                </div>
            </div>

            <!-- Q20 -->
            <div class="question-card">
                <div class="question-number">Questão 20</div>
                <div class="question-text">Para iniciar uma sessão usamos:</div>
                <select name="q20">
                    <option value="opcao1">start_session()</option>
                    <option value="opcao2">session_start()</option>
                    <option value="opcao3">init_session()</option>
                    <option value="opcao4">begin_session()</option>
                </select>
            </div>

            <input type="submit" value="> Enviar Respostas">

        </form>
    </div>
</body>
</html>
