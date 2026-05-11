# ✅ CHECKLIST - PC FUSION PHP

Use este checklist para garantir que tudo foi preparado corretamente.

## ANTES DE FAZER UPLOAD

### Arquivo de Configuração
- [ ] Editei `config.php`?
  - [ ] `DB_HOST` = localhost
  - [ ] `DB_USER` = meu usuário MySQL
  - [ ] `DB_PASS` = minha senha MySQL
  - [ ] `DB_NAME` = pcfusion_db
  - [ ] `SITE_URL` = meu domínio
  - [ ] Mude senha admin em `admin.php`

### Banco de Dados
- [ ] Criei banco `pcfusion_db` no hosting?
- [ ] Executei `script_banco.sql` no phpMyAdmin?
- [ ] Verifiquei se as 4 tabelas foram criadas?
  - [ ] categorias
  - [ ] pecas
  - [ ] videos
  - [ ] desenvolvedores

## ARQUIVOS PARA UPLOAD (Crie uma pasta com tudo)

### Arquivos PHP (9 arquivos)
- [ ] config.php
- [ ] header.php
- [ ] footer.php
- [ ] index.php
- [ ] pecas.php
- [ ] videos.php
- [ ] desenvolvedores.php
- [ ] build.php
- [ ] admin.php
- [ ] teste_conexao.php (auxiliar)

### Arquivos CSS (5 arquivos)
- [ ] style.css
- [ ] styles1.css
- [ ] styles2.css
- [ ] styles3.css
- [ ] styles4.css
- [ ] menu.css

### Arquivos JavaScript (2 arquivos)
- [ ] menu.js
- [ ] script-pecas.js

### Imagens (7 arquivos)
- [ ] LogoPc.jpg
- [ ] isaac.jpg
- [ ] Jorge.jpg
- [ ] 10462343.png
- [ ] whatsapp_4423697.png
- [ ] github_733609.png

### SQL & Documentação (opcional, mas recomendado)
- [ ] script_banco.sql
- [ ] GUIA_RAPIDO.md
- [ ] INSTALACAO_INFINITY_FREE.md
- [ ] MIGRACAO_HTML_PARA_PHP.md
- [ ] RESUMO_MIGRACAO.md
- [ ] .htaccess

**Total: 34 arquivos**

## DEPOIS DE FAZER UPLOAD

### Testes Iniciais
1. [ ] Acessei: `seu-dominio.com/teste_conexao.php`
   - [ ] ✓ config.php carregado
   - [ ] ✓ Conectado ao MySQL
   - [ ] ✓ Todas as 4 tabelas encontradas
   - [ ] ✓ Contagem de registros OK

2. [ ] Acessei: `seu-dominio.com/index.php`
   - [ ] [ ] Home carregou normalmente
   - [ ] [ ] Menu hambúrguer funciona
   - [ ] [ ] Botões navegam corretamente

### Testes Funcionais
- [ ] Peças aparecem na página?
  - [ ] CPU, RAM, GPU, SSD, Fonte, Cooler, Gabinete?
  - [ ] Mais de 100 componentes?

- [ ] Vídeos aparecem nas abas?
  - [ ] Aba "Montagem" com 2 vídeos?
  - [ ] Aba "Reviews" com 11 vídeos?
  - [ ] Aba "Dicas" com 2 vídeos?

- [ ] Montar PC funciona?
  - [ ] Selects populados com componentes?
  - [ ] Botão "Verificar Compatibilidade" funciona?

- [ ] Desenvolvedores aparecem?
  - [ ] 2 desenvolvedores com fotos?
  - [ ] Links sociais funcionam?

### Admin
- [ ] Acessei: `seu-dominio.com/admin.php`
  - [ ] Pediu senha?
  - [ ] Entrei com `admin123`?
  - [ ] Formulário aparece?
  - [ ] Estatísticas mostram dados?
  - [ ] Lista de peças aparece?

### Responsividade
- [ ] Testei em celular?
  - [ ] Menu hambúrguer abre?
  - [ ] Abre e fecha corretamente?
  - [ ] Layout adapta?

## PÓS-INSTALAÇÃO

### Configurações de Segurança
- [ ] Mudei senha do admin em `admin.php`?
- [ ] Deletei arquivos `.html` antigos?
- [ ] Testei a página com F12 (sem erros de console)?

### Customizações (Optional)
- [ ] Adicionei novas peças via admin?
- [ ] Testei adicionar/deletar?
- [ ] Editi informações dos desenvolvedores?
- [ ] Atualizei vídeos com novos links?

## Troubleshooting

Se algo não funciona, verifique:

1. **Página em branco**
   - [ ] Execute `teste_conexao.php`
   - [ ] Verifique erro no cPanel > Error Logs

2. **Erro de conexão MySQL**
   - [ ] Config.php tem credenciais certas?
   - [ ] Banco foi criado?
   - [ ] Usuário MySQL existe?

3. **Peças não aparecem**
   - [ ] `script_banco.sql` foi executado?
   - [ ] Tabela `pecas` tem registros?

4. **Admin não abre**
   - [ ] Senha correta? (padrão: admin123)
   - [ ] Arquivo `admin.php` foi upado?

## Checklist Final

- [ ] Tudo funciona
- [ ] Sem erros no console
- [ ] Menu responsivo
- [ ] Banco de dados preenchido
- [ ] Admin acessível
- [ ] Pronto para produção ✅

---

## 🎉 PARABÉNS!

Seu site PC Fusion está ONLINE com banco de dados! 🚀

### Próximos passos sugeridos:

1. **Monitoramento**: Faça backups regularmente
2. **SEO**: Adicione meta tags nas páginas
3. **Segurança**: Use HTTPS
4. **Expansão**: Crie mais páginas conforme necessário

---

**Data de Conclusão:** ___/___/______  
**Responsável:** ____________________  
**Status Final:** ✅ PRONTO

