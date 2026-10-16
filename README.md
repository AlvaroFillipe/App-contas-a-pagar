# 💳 App Contas a Pagar

Aplicação web para organizar compras parceladas: registra a loja, o cartão usado, o valor de cada parcela, quantas já foram pagas e quanto ainda falta pagar.

## ✨ Funcionalidades

- Listagem de todas as contas em uma tabela
- Cadastro, visualização, edição e exclusão de contas (CRUD completo)
- Mensagens de retorno após cada operação

## 🛠️ Tecnologias

- PHP 7+ com PDO
- MySQL
- HTML, CSS e Bootstrap
- Font Awesome

## ▶️ Como rodar

1. Instale um ambiente PHP + MySQL (ex.: [XAMPP](https://www.apachefriends.org/)).
2. Clone o repositório dentro da pasta `htdocs`:
   ```bash
   git clone https://github.com/AlvaroFillipe/App-contas-a-pagar.git
   ```
3. Crie o banco `contas_a_pagar` no MySQL com a tabela de contas (`id`, `loja_compra`, `cartao`, `valor_parcela`, `parcelas_pagas`, `total_a_pagar`).
4. Ajuste usuário e senha em `includes/config/connection.php`, se necessário.
5. Acesse `http://localhost/App-contas-a-pagar`.

## 📁 Estrutura

```
├── index.php          # listagem das contas
├── create.php         # cadastro
├── edit.php           # edição
├── show.php           # detalhes
└── includes/
    ├── config/        # conexão, URL base e processamento das ações
    ├── templates/     # header e footer
    ├── css/
    └── img/
```
