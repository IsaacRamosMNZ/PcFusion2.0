# PC Fusion - Versão PHP com Banco de Dados

## Instalação no Infinity Free (ou outro hosting PHP/MySQL)

### Passo 1: Preparação do Hosting

1. Crie uma conta em https://www.infinityfree.net
2. Crie um novo site/aplicação
3. Acesse o **cPanel** do seu hosting
4. Localize **phpMyAdmin** e abra

### Passo 2: Criar o Banco de Dados

1. No phpMyAdmin:
   - Clique em "Novo" (lado esquerdo)
   - Digite o nome: `pcfusion_db`
   - Clique em "Criar"

2. Agora selecione o banco `pcfusion_db`

3. Abra a aba "SQL" e copie todo o conteúdo do arquivo `script_banco.sql`

4. Cole no campo de SQL e clique em "Executar"

⚠️ Isso vai criar todas as tabelas e popular os dados iniciais!

### Passo 3: Configurar o `config.php`

1. Abra o arquivo `config.php` com um editor de texto

2. Modifique as configurações:
```php
define('DB_HOST', 'localhost');      // Deixe localhost
define('DB_USER', 'seu_usuario');    // Nome do usuário MySQL do hosting
define('DB_PASS', 'sua_senha');      // Senha MySQL do hosting
define('DB_NAME', 'pcfusion_db');    // Nome do banco criado
define('SITE_URL', 'seu-dominio.com/'); // Sua URL
```

> No Infinity Free, você encontra essas informações no cPanel > Contas MySQL > Informações de Acesso

### Passo 4: Upload dos Arquivos

1. Use um cliente FTP (ex: FileZilla):
   - Abra o endereço FTP do seu hosting
   - Upload de TODOS os arquivos para a pasta `public_html`

2. Arquivos PHP necessários:
   - `config.php`
   - `header.php`
   - `footer.php`
   - `index.php`
   - `pecas.php`
   - `videos.php`
   - `desenvolvedores.php`
   - `build.php`

3. Arquivos CSS e JS (copie também):
   - `style.css`
   - `styles1.css`, `styles2.css`, `styles3.css`, `styles4.css`
   - `menu.css`
   - `menu.js`
   - `script-pecas.js`

4. Imagens:
   - `LogoPc.jpg`
   - `isaac.jpg`
   - `Jorge.jpg`
   - `10462343.png` (Facebook)
   - `whatsapp_4423697.png` (WhatsApp)
   - `github_733609.png` (GitHub)

### Passo 5: Testar a Aplicação

1. Acesse: `seu-dominio.com/index.php`

2. Verifique cada página:
   - Home (index.php) ✓
   - Peças (pecas.php) ✓
   - Vídeos (videos.php) ✓
   - Montar PC (build.php) ✓
   - Desenvolvedores (desenvolvedores.php) ✓

## Administração do Banco de Dados

### Adicionar Novas Peças

No phpMyAdmin, abra a tabela `pecas`:

1. Clique em "Inserir"
2. Preencha os campos:
   - **categoria_id**: ID da categoria (1=CPU, 2=Placa-mãe, 3=RAM, etc)
   - **nome**: Nome da peça
   - **descricao**: Descrição
   - **especificacoes**: Especificações técnicas

### Adicionar Novos Vídeos

Na tabela `videos`:

1. Clique em "Inserir"
2. Preencha:
   - **titulo**: Título do vídeo
   - **categoria**: Montagem, Reviews ou Dicas
   - **url_youtube**: ID do vídeo (ex: para https://www.youtube.com/watch?v=O9845EjK7o0, use `O9845EjK7o0`)
   - **descricao**: Descrição

### Editar Desenvolvedores

Na tabela `desenvolvedores`:

1. Clique no ícone de edição
2. Modifique nome, função, redes sociais, etc

## Estrutura do Banco de Dados

### Tabelas criadas:

- **categorias**: Categorias de peças (CPU, RAM, etc)
- **pecas**: Componentes de hardware
- **videos**: Vídeos do YouTube
- **desenvolvedores**: Informações dos desenvolvedores

## Troubleshooting

### "Erro na conexão: Unknown database"
- Verifique o nome do banco em `config.php`
- Confirme que o banco foi criado no cPanel

### "Erro na conexão: Access denied for user"
- Verifique o usuário e senha em `config.php`
- Regenere as credenciais no cPanel

### Página em branco
- Ative o erro display no `config.php`:
```php
ini_set('display_errors', 1);
error_reporting(E_ALL);
```

### Vídeos não aparecem
- Copie apenas o ID do YouTube (após `v=` na URL)
- Não copie a URL inteira

## Suporte

Para dúvidas, consulte:
- https://www.infinityfree.net/docs
- https://www.php.net/manual/pt_BR/
- https://www.mysql.com/

---

**PC Fusion v2.0 - PHP Edition**
© 2024 - Todos os direitos reservados
