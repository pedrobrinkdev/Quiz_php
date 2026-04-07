# 🟢 Quiz PHP — Revisão P1 DevWeb2

> Quiz interativo de revisão para a prova de Desenvolvimento Web 2, com tema visual **Matrix** (dark mode, verde neon, fonte monospace). Desenvolvido com PHP puro, sessões, cookies e consumo de API externa.

---

## 📋 Sobre o Projeto

Este projeto é um quiz de múltipla escolha com **20 questões** cobrindo os principais conteúdos de PHP vistos em aula. O aluno faz login com nome e e-mail, responde as questões e recebe sua pontuação com uma mensagem de desempenho e uma frase motivacional buscada em tempo real via API.

---

## 🗂️ Estrutura de Arquivos

```
quiz-php/
│
├── index.php       # Tela de login (nome + e-mail)
├── quiz.php        # Formulário com as 20 questões
├── resultado.php   # Exibe pontuação, desempenho e frase do dia
├── logout.php      # Destroi a sessão e redireciona ao login
└── style.css       # Estilização completa (tema Matrix)
```

---

## ⚙️ Como Funciona

### Fluxo da aplicação

```
index.php  →  quiz.php  →  resultado.php
                                ↓
                           logout.php  →  index.php
```

### 1. Login (`index.php`)
O usuário informa **nome** e **e-mail**. Os dados são enviados via `POST` para o `quiz.php`.

### 2. Quiz (`quiz.php`)
- Recebe os dados do formulário de login
- Armazena o **nome** na `$_SESSION` e o **e-mail** em um `$_COOKIE` (duração: 30 dias)
- Exibe as 20 questões — radio buttons, checkboxes e selects
- Redireciona para `index.php` caso o usuário tente acessar sem login

### 3. Resultado (`resultado.php`)
- Verifica a sessão ativa (proteção de acesso direto)
- Corrige todas as respostas e incrementa `$pontuacao`
- Questões com múltiplas respostas corretas (q5 e q17) usam `count()` + `in_array()` para validação exata
- Exibe nome (via `$_SESSION`), e-mail (via `$_COOKIE`), pontuação e mensagem de desempenho
- Consome uma **API externa** para exibir uma frase motivacional

### 4. Logout (`logout.php`)
- Executa `session_destroy()` e redireciona para `index.php`

---

## 📝 Conteúdo das Questões

| # | Tema |
|---|------|
| 01 | Função do `echo` |
| 02 | Sintaxe de variáveis |
| 03 | Nomenclatura válida de variável |
| 04 | Métodos GET e POST |
| 05 | Características do método POST *(múltipla escolha)* |
| 06 | Tipos de input HTML |
| 07 | Diferença entre radio e checkbox |
| 08 | Uso correto do checkbox |
| 09 | Tag `<select>` |
| 10 | Estrutura de decisão (`if`) |
| 11 | Estrutura de repetição (`for`) |
| 12 | Conceito de array |
| 13 | Criação de funções |
| 14 | Sessões PHP |
| 15 | Cookies |
| 16 | Consumo de API com `file_get_contents` |
| 17 | Características de URLs *(múltipla escolha)* |
| 18 | Superglobal `$_POST` |
| 19 | Função `isset()` |
| 20 | Inicialização de sessão |

---

## 🌐 API Externa

O projeto consome duas APIs para a frase motivacional do resultado, com fallback automático:

| Prioridade | API | Endpoint |
|---|---|---|
| Principal | Motivational Spark | `https://motivational-spark-api.vercel.app/api/quotes/random` |
| Fallback | Quotable | `https://api.quotable.io/random` |

Se ambas falharem, exibe uma mensagem padrão. O operador `@` suprime erros de conexão na tela.

---

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Uso |
|---|---|
| **PHP 8+** | Backend, lógica, sessões, cookies, API |
| **HTML5** | Estrutura das páginas |
| **CSS3** | Estilização completa (tema Matrix) |
| `$_SESSION` | Armazenar nome do usuário entre páginas |
| `$_COOKIE` | Persistir e-mail por 30 dias |
| `$_POST` | Receber dados de formulários |
| `file_get_contents()` | Consumir APIs externas |
| `json_decode()` | Processar resposta JSON das APIs |
| `isset()` / `in_array()` | Validação de respostas |

---

## 🚀 Como Rodar Localmente

### Pré-requisitos

- [XAMPP](https://www.apachefriends.org/) (ou qualquer servidor com PHP 8+)
- Navegador web

### Passo a passo

**1. Clone o repositório**
```bash
git clone https://github.com/pedrobrinkdev/Quiz_php.git
```

**2. Mova para a pasta do XAMPP**
```bash
# Cole a pasta clonada dentro de:
C:/xampp/htdocs/Quiz_php
```

**3. Inicie o XAMPP**
- Abra o **XAMPP Control Panel**
- Clique em **Start** no módulo **Apache**

**4. Acesse no navegador**
```
http://localhost/Quiz_php/index.php
```

**5. Use o quiz**
- Informe nome e e-mail na tela de login
- Responda as 20 questões
- Veja seu resultado e a frase do dia
- Clique em "Sair do sistema" para encerrar a sessão

> ⚠️ O Apache precisa estar rodando para o PHP funcionar. Sem ele, os arquivos `.php` não são interpretados.

---

## 🎨 Tema Visual

O projeto usa um tema **Matrix** customizado via `style.css`:

- Fundo preto com overlay de scanlines
- Verde neon `#00ff41` com efeito glow
- Fonte `Courier New` (monospace) em toda a interface
- Cards por questão com borda lateral verde e hover animado
- Scrollbar, seleção de texto e inputs estilizados no tema
- Layout responsivo para telas menores

---

## 📚 Referências

- [Documentação oficial do PHP](https://www.php.net/docs.php)
- [Sessões em PHP — php.net](https://www.php.net/manual/pt_BR/book.session.php)
- [Cookies em PHP — php.net](https://www.php.net/manual/pt_BR/function.setcookie.php)
- [file_get_contents — php.net](https://www.php.net/manual/pt_BR/function.file-get-contents.php)
- [MDN Web Docs — HTML Forms](https://developer.mozilla.org/pt-BR/docs/Learn/Forms)
- [MDN Web Docs — CSS](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
- [XAMPP — Apache Friends](https://www.apachefriends.org/)

---

## 👨‍💻 Autor

Feito por **Pedro Brink** — [@pedrobrinkdev](https://github.com/pedrobrinkdev)
