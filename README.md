# 🐘  Exercício Prático em PHP - Perfil de Usuário com Banco de Dados

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)]()
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)]()
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)]()
[![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge)]()

Este repositório contém a solução desenvolvida para o **Desafio 3**, focado no desenvolvimento de um sistema completo de autenticação de usuários integrado ao banco de dados MySQL, controle de sessão (`$_SESSION`), personalização de ambiente dinâmico e encerramento de sessão.

---

## 🚀 Tecnologias Utilizadas

- **PHP** (Linguagem backend e gerenciamento de sessões)
- **MySQL / MariaDB** (Banco de dados relacional para validação de credenciais)
- **HTML5** (Formulário de acesso e estrutura das páginas)

---

## 📋 Atividade Desenvolvida

### 🔐 1. Tela de Autenticação (`15d_login.php`)
- **Descrição:** Formulário de acesso onde o usuário informa suas credenciais (usuário e senha) e seleciona a cor de fundo preferida para a interface através de um `input` do tipo `color`.
- **Lógica aplicada:**
  - Captura dos dados enviados via requisição `POST`.
  - Conexão com o banco de dados `exercicio` via `mysqli`.
  - Consulta `SQL` na tabela `usuarios` para validar a existência do usuário e senha informados.
  - Se a autenticação for bem-sucedida, armazena o nome do usuário e a cor escolhida na superglobal `$_SESSION` e redireciona o usuário para a página restrita (`15d_perfil.php`).
  - Se as credenciais forem inválidas, exibe alerta visual de erro em vermelho.

### 👤 2. Área Restrita do Perfil (`15d_perfil.php`)
- **Descrição:** Página de acesso protegido que exibe as informações personalizadas do usuário autenticado.
- **Lógica aplicada:**
  - Verificação de segurança: valida se a variável de sessão `$_SESSION['usuario']` existe (`isset`). Caso contrário, redireciona automaticamente para o login.
  - Aplicação dinâmica da cor de fundo escolhida no formulário através da estilização inline no `<body>` com a variável `$_SESSION['fundo']`.
  - Exibição de mensagem personalizada de boas-vindas e link para encerramento de sessão.

### 🚪 3. Encerramento de Sessão (`15d_logout.php`)
- **Descrição:** Script responsável por finalizar a sessão com segurança.
- **Lógica aplicada:**
  - Inicialização da sessão via `session_start()`.
  - Destruição de todas as variáveis ativas com `session_destroy()`.
  - Redirecionamento automático do usuário de volta para a tela de login (`15d_login.php`).

---

## 👤 Repositório desenvolvido por:

**Nome:** Vitor Rodrigues Santos  
**Turma:** 1ID-DS
