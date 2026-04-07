# 📺 ProgressoTV
![Autor](https://img.shields.io/badge/Autor-Pietro%20Costa%20Cardoso-blue?style=flat-square&logo=github)
![Licença](https://img.shields.io/badge/Licença-MIT-yellow.svg?style=flat-square)
![Status](https://img.shields.io/badge/Status-Original%20Repo-green?style=flat-square)

> **Aviso:** Este é o repositório original do ProgressoTV. Se você encontrar este código em outro perfil sem os devidos créditos, ele foi plagiado......
 ---
[Português](#br) | [English](#en)

<a id="br"></a>
## 🇧🇷 Sobre o Projeto
O **ProgressoTV** é uma aplicação web leve desenvolvida em **PHP Puro (Vanilla PHP)** para o gerenciamento de chamados ou registros de mídia (séries/TV). O sistema foi construído sem dependências externas ou frameworks, utilizando um sistema de arquivos de texto (.hd) para persistência de dados.

### 🛠️ Arquitetura e Lógica
* **Banco de Dados Flat-File:** Utiliza arquivos `.hd` com delimitadores `#` para armazenar usuários e registros.
* **Segurança:** Implementação de `password_hash` e `password_verify` para proteção de credenciais.
* **Controle de Acesso:** Middleware de autenticação por sessão e níveis de permissão (Admin vs. Usuário).
* **Integridade de Dados:** Sanitização de inputs para evitar conflitos com os delimitadores do arquivo.

### 🚀 Funcionalidades
- [x] Registro e Login de usuários.
- [x] Validação de e-mails duplicados.
- [x] Cadastro de chamados/itens com detalhes (Temporada/Episódio).
- [x] Exclusão inteligente (apenas Admin ou o proprietário do registro).
- [x] IDs auto-incrementais gerenciados via script.

---

<a id="en"></a>
## 🇺🇸 About the Project
**ProgressoTV** is a lightweight web application developed in **Vanilla PHP** for managing tickets or media entries (series/TV). The system was built without external dependencies or frameworks, utilizing a text-based flat-file system (.hd) for data persistence.



### 🛠️ Architecture & Logic
* **Flat-File Database:** Uses `.hd` files with `#` delimiters to store users and records.
* **Security:** Full implementation of `password_hash` and `password_verify` for credential protection.
* **Access Control:** Session-based authentication middleware and permission levels (Admin vs. User).
* **Data Integrity:** Input sanitization to prevent conflicts with file delimiters.

### 🚀 Key Features
- [x] User registration and login.
- [x] Duplicate email validation.
- [x] Ticket/Item registration with details (Season/Episode).
- [x] Smart deletion (only Admin or the record owner can delete).
- [x] Auto-incremental IDs managed via script logic.

## ScreenShot
<div align="center">
<img src="https://github.com/user-attachments/assets/039c6943-f20f-492f-94f4-3e364f303005" width="45%" />
<img src="https://github.com/user-attachments/assets/3466f21d-83fa-4d4c-b5f3-56ddd1ff3f2c" width="45%" />
<img src="https://github.com/user-attachments/assets/59841c94-9558-4bb4-8059-2c9ffee6dcd1" width="45%" />
<img src="https://github.com/user-attachments/assets/eef9b886-4573-45a4-8193-f76381c222c5" width="45%" />
<img src="https://github.com/user-attachments/assets/0ed64bd2-9c13-4e97-af28-f1d767734b0e" width="45%" />

</div>


## 📂 Como rodar o projeto / How to run
1. Clone este repositório / Clone this repository.
2. Certifique-se de ter o PHP instalado / Ensure you have PHP installed.
3. No terminal, execute / In the terminal, run:
   ```bash
   php -S localhost:8000                                                                                                                                               ## 👤 Autor

Desenvolvido com dedicação por **Pietro Costa Cardoso**.  
Se este projeto te ajudou, considere dar uma ⭐ no repositório!
