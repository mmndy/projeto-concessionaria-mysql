# 🚗 Sistema de Concessionária — CRUD em PHP e MySQL

Sistema web desenvolvido para gerenciar os dados de uma concessionária, incluindo o cadastro de **clientes, funcionários, marcas, modelos e vendas**.  
O projeto foi construído utilizando **PHP**, **MySQL** e **Bootstrap**, rodando em ambiente local com **XAMPP**.

---

## ⚙️ Tecnologias Utilizadas

- **PHP** — Lógica de programação e manipulação de dados  
- **MySQL** — Banco de dados relacional  
- **HTML / CSS / JavaScript**  
- **Bootstrap** — Interface visual responsiva  
- **XAMPP** — Servidor local (Apache + MySQL)

---

## 🚀 Funcionalidades

- ✅ Cadastrar, listar, editar e excluir **clientes**  
- ✅ Cadastrar, listar, editar e excluir **funcionários**  
- ✅ Gerenciar **marcas** e **modelos** de veículos  
- ✅ Registrar e consultar **vendas**  
- ✅ Integração completa com banco de dados MySQL  

---

## 🧠 Conceitos Aplicados

- CRUD (Create, Read, Update, Delete)  
- Conexão PHP → MySQL (`mysqli`)  
- Estrutura de páginas dinâmicas  
- Organização modular de código (páginas de cadastro, edição e listagem)  
- Uso de formulários HTML e métodos `POST` e `GET`  

---

## 💾 Como Rodar o Projeto

1. **Instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html)**  
   (Certifique-se de que o Apache e o MySQL estão ativos no painel de controle)

2. **Copie o projeto** para o diretório do servidor local:
   C:\xampp\htdocs\projeto-concessionaria


3. **Abra o MySQL como administrador no XAMPP** 

4. **Crie o banco de dados** com o mesmo nome definido no arquivo `config.php`:  
```sql
CREATE DATABASE concessionaria2122m;
USE concessionaria2122m;
****
```
5. **Importe o arquivo SQL** do projeto dentro do banco criado.  
   No terminal do XAMPP (clique em **Shell** no painel), digite:

```sql
SOURCE C:/xampp/htdocs/projeto-concessionaria/banco-de-dados-2122m.sql;
```
6. Execute o projeto no navegador:
   http://localhost/projeto-concessionaria/index.php




