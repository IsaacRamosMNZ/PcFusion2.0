# 🚀 PC Fusion - Versão PHP Pronta!

## ✅ O que foi criado

Seu site foi totalmente convertido de HTML estático para **PHP dinâmico com Banco de Dados MySQL**.

### Arquivos PHP criados:

| Arquivo | Função |
|---------|--------|
| `config.php` | Configuração da conexão com o banco |
| `header.php` | Cabeçalho reutilizável (inclui menu) |
| `footer.php` | Rodapé reutilizável |
| `index.php` | Página Home |
| `pecas.php` | Lista de peças (puxa do banco de dados) |
| `videos.php` | Vídeos organizados em abas (do banco) |
| `desenvolvedores.php` | Informações dos desenvolvedores (do banco) |
| `build.php` | Montador de PC com selects dinâmicos |
| `teste_conexao.php` | Ferramenta para testar conexão |

### Arquivos de dados:

| Arquivo | Função |
|---------|--------|
| `script_banco.sql` | Script para criar o banco de dados |
| `INSTALACAO_INFINITY_FREE.md` | Guia passo-a-passo para instalar no Infinity Free |
| `MIGRACAO_HTML_PARA_PHP.md` | Documentação técnica da migração |

## 📝 Passo Rápido para Infinity Free

### 1. **Preparar o Banco**
   - Crie conta em https://www.infinityfree.net
   - Acesse phpMyAdmin pelo cPanel
   - Crie banco `pcfusion_db`
   - Execute o SQL do arquivo `script_banco.sql`

### 2. **Configurar o PHP**
   - Abra `config.php`
   - Mude `DB_USER`, `DB_PASS` e `SITE_URL`

### 3. **Upload dos Arquivos**
   - Use FTP para enviar TODOS os arquivos para `public_html`
   - Inclua: `.php`, `.css`, `.js`, `.sql`, imagens

### 4. **Testar**
   - Acesse: `seu-dominio.com/teste_conexao.php`
   - Se tudo OK, acesse: `seu-dominio.com/index.php`

## 🎯 Como Usar

### Adicionar novas peças:
1. Acesse phpMyAdmin
2. Vá para tabela `pecas`
3. Clique "Inserir"
4. Preencha: categoria_id, nome, especificacoes

### Adicionar novos vídeos:
1. Tabela `videos` > "Inserir"
2. Preencha: titulo, categoria, url_youtube (só o ID!)

### Editar desenvolvedores:
1. Tabela `desenvolvedores` > clique no ícone de edição
2. Modifique nome, função, redes sociais

## 📊 Estrutura do Banco

```
categorias    → CPU, Placa-mãe, RAM, GPU, SSD, Fonte, Cooler, Gabinete
    ↓
pecas        → Intel Core i9, RTX 4090, etc (195+ peças)
    
videos       → Montagem, Reviews, Dicas (8+ vídeos)

desenvolvedores → Isaac, Jorge (2 devs)
```

## 🔒 Segurança

✓ Proteção contra SQL Injection  
✓ Proteção contra XSS  
✓ Dados sensíveis no `config.php` (não versione!)  

## ❓ Dúvidas Frequentes

**P: Preciso deletar os arquivos `.html` antigos?**  
R: Sim, após confirmar que o PHP funciona corretamente.

**P: Posso adicionar mais categorias?**  
R: Sim! Insira na tabela `categorias` e as peças serão agrupadas automaticamente.

**P: Como faço backup do banco?**  
R: phpMyAdmin > Banco > "Exportar" > Baixar SQL

**P: Posso usar outro hosting que não seja Infinity Free?**  
R: Sim! Qualquer hosting com PHP 5.6+ e MySQL funciona.

## 📞 Suporte

Veja a documentação completa em:
- `INSTALACAO_INFINITY_FREE.md` - Guia de instalação
- `MIGRACAO_HTML_PARA_PHP.md` - Detalhes técnicos
- `teste_conexao.php` - Diagnóstico rápido

## 🎉 Pronto para usar!

Seu site agora é profissional, escalável e fácil de manter.

**Próximas melhorias (opcionais):**
- Painel administrativo
- Autenticação de usuários
- Sistema de comentários
- API REST

---

**PC Fusion v2.0 - PHP Edition**  
Convertido em 2024 ✨
