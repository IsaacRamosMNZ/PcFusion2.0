# Migração de HTML Estático para PHP com Banco de Dados

## O que mudou?

### Antes (Versão HTML Estática)
- Arquivos HTML puro
- Dados codificados diretamente no HTML
- Difícil manutenção e atualização
- Não funciona em hosting compartilhado sem modificações

### Agora (Versão PHP + MySQL)
- Arquivos PHP dinâmicos
- Dados armazenados em banco de dados
- Fácil adicionar/editar/remover itens
- Compatível com qualquer hosting PHP/MySQL (como Infinity Free)

## Estrutura de Ficheiros

```
PcFusion2.0/
├── config.php                          # Configuração do banco
├── header.php                          # Header reutilizável
├── footer.php                          # Footer reutilizável
├── index.php                          # Home
├── pecas.php                          # Lista de peças (do banco)
├── videos.php                         # Vídeos (do banco)
├── desenvolvadores.php                # Desenvolvedores (do banco)
├── build.php                          # Montar PC (do banco)
├── teste_conexao.php                  # Teste rápido
├── script_banco.sql                   # SQL para criar banco
├── menu.js                            # Menu hambúrguer
├── menu.css                           # CSS do menu
├── style.css                          # CSS home
├── styles1.css                        # CSS build
├── styles2.css                        # CSS vídeos
├── styles3.css                        # CSS peças
├── styles4.css                        # CSS desenvolvedores
└── [imagens e assets]                 # Logos, fotos, etc
```

## Banco de Dados

### Tabelas

#### `categorias`
Armazena as categorias de peças (CPU, RAM, GPU, etc)

```
id (INT) | nome (VARCHAR) | descricao (TEXT) | ordem (INT)
```

#### `pecas`
Armazena todos os componentes de hardware

```
id (INT) | categoria_id (INT) | nome (VARCHAR) | descricao (TEXT) | especificacoes (TEXT) | data_criacao (TIMESTAMP)
```

#### `videos`
Armazena links dos vídeos do YouTube

```
id (INT) | titulo (VARCHAR) | categoria (VARCHAR) | url_youtube (VARCHAR) | descricao (TEXT) | data_criacao (TIMESTAMP)
```

#### `desenvolvedores`
Armazena dados dos desenvolvedores

```
id (INT) | nome (VARCHAR) | funcao (VARCHAR) | descricao (TEXT) | foto (VARCHAR) | facebook (VARCHAR) | whatsapp (VARCHAR) | github (VARCHAR) | data_criacao (TIMESTAMP)
```

## Fluxo de Funcionamento

### Página de Peças (pecas.php)

1. Usuário acessa `/pecas.php`
2. PHP conecta ao banco de dados (config.php)
3. Query SQL busca categorias
4. Para cada categoria, busca as peças
5. Loop PHP gera o HTML dinamicamente
6. Exibe no navegador

### Página de Vídeos (videos.php)

1. Busca vídeos do banco por categoria
2. Agrupa em "Montagem", "Reviews", "Dicas"
3. Gera tabs com os vídeos

### Página de Montar PC (build.php)

1. Busca todas as categorias de componentes
2. Para cada categoria, popula um `<select>` com as opções
3. JavaScript processa a seleção do usuário
4. Exibe a configuração escolhida

## Como Adicionar Novos Dados

### Via phpMyAdmin (Recomendado)

1. Acesse phpMyAdmin
2. Selecione a tabela
3. Clique em "Inserir"
4. Preencha os campos
5. Clique em "Executar"

### Via SQL Direto

Exemplo - Adicionar uma nova peça:

```sql
INSERT INTO pecas (categoria_id, nome, descricao, especificacoes) 
VALUES (1, 'Intel Core i9 15900K', 'Novo processador', 'Socket: LGA1700');
```

Exemplo - Adicionar um novo vídeo:

```sql
INSERT INTO videos (titulo, categoria, url_youtube, descricao) 
VALUES ('Review do novo PC', 'Reviews', 'XXXXX', 'Análise completa');
```

## Segurança

### Proteções implementadas:

1. **SQL Injection**: Não afeta porque usamos `prepare()` e `bind_param()`
2. **XSS**: Usamos `htmlspecialchars()` em todas as saídas
3. **Senhas**: Guardadas seguras no `config.php` (não no git)

### Melhorias futuras:

- Adicionar autenticação admin
- Criar painel administrativo
- Backup automático do banco
- Logs de alterações

## Troubleshooting

### Dados não aparecem
- Verifique se o `script_banco.sql` foi executado
- Confirme no phpMyAdmin se as tabelas têm dados

### Vídeos em branco
- Copie apenas o ID do YouTube
- Verifique se a URL está correta

### Erros de conexão
- Edite `config.php` com as credenciais corretas
- Use `teste_conexao.php` para diagnosticar

## Performance

A versão PHP é mais leve que a HTML porque:

1. Dados são consultados sob demanda
2. Não precisa carregar toda uma lista gigante
3. Cache pode ser implementado facilmente

## Próximos Passos

1. ✓ Migração completa para PHP
2. ✓ Banco de dados estruturado
3. ⃞ Painel administrativo (futuro)
4. ⃞ API REST (futuro)
5. ⃞ Autenticação de usuários (futuro)

---

**Nota**: Todos os arquivos `.html` podem ser deletados após a migração estar funcionando.
