# ProgressoTV

AVISO: Foi criado inicialmente como estudo e, posteriormente, foi revisado para melhorar organização e manutenção.
[Português](#br) | [English](#en)

<a id="br"></a>
## Sobre o Projeto
O **ProgressoTV** é uma aplicação web leve desenvolvida em **PHP Puro (Vanilla PHP)** para o gerenciamento de chamados ou registros de mídia (séries/TV). O sistema foi construído sem dependências externas ou frameworks, utilizando um sistema de arquivos de texto (.hd) para persistência de dados.

### Arquitetura e Lógica
* **Banco de Dados Flat-File:** Utiliza arquivos `.hd` com delimitadores `#` para armazenar usuários e registros.
* **Segurança:** Implementação de `password_hash` e `password_verify` para proteção de credenciais.
* **Controle de Acesso:** Middleware de autenticação por sessão e níveis de permissão (Admin vs. Usuário).
* **Integridade de Dados:** Sanitização de inputs para evitar conflitos com os delimitadores do arquivo.

###  Funcionalidades
- [x] Registro e Login de usuários.
- [x] Validação de e-mails duplicados.
- [x] Cadastro de chamados/itens com detalhes (Temporada/Episódio).
- [x] Exclusão inteligente (apenas Admin ou o proprietário do registro).
- [x] IDs auto-incrementais gerenciados via script.

---

<a id="en"></a>
## About the Project
**ProgressoTV** is a lightweight web application developed in **Vanilla PHP** for managing tickets or media entries (series/TV). The system was built without external dependencies or frameworks, utilizing a text-based flat-file system (.hd) for data persistence.



### Architecture & Logic
* **Flat-File Database:** Uses `.hd` files with `#` delimiters to store users and records.
* **Security:** Full implementation of `password_hash` and `password_verify` for credential protection.
* **Access Control:** Session-based authentication middleware and permission levels (Admin vs. User).
* **Data Integrity:** Input sanitization to prevent conflicts with file delimiters.

### Key Features
- [x] User registration and login.
- [x] Duplicate email validation.
- [x] Ticket/Item registration with details (Season/Episode).
- [x] Smart deletion (only Admin or the record owner can delete).
- [x] Auto-incremental IDs managed via script logic.

## ScreenShot
<div align="center">
<img src="https://github.com/user-attachments/assets/e733fb3b-b77f-45a6-b8eb-d993dad0e452" width="45%" />
<img src="https://github.com/user-attachments/assets/7969b610-7c8f-4f3a-8b2b-d8678d2618d2" width="45%" />
<img src="https://github.com/user-attachments/assets/59841c94-9558-4bb4-8059-2c9ffee6dcd1" width="45%" />
<img src="https://github.com/user-attachments/assets/9b734cf8-fcdb-4c65-8630-5a2a79e9d85f" width="45%" />
<img src="https://github.com/user-attachments/assets/0ed64bd2-9c13-4e97-af28-f1d767734b0e" width="45%" />




</div>


## Como rodar o projeto / How to run
1. Clone este repositório / Clone this repository.
2. Certifique-se de ter o PHP instalado / Ensure you have PHP installed.
3. No terminal, execute / In the terminal, run:
   ```bash
   php -S localhost:8000                                                                                                                                               ## 👤 Autor

Desenvolvido com dedicação por **Pietro Costa Cardoso**.  
Se este projeto te ajudou, considere dar uma ⭐ no repositório!!
