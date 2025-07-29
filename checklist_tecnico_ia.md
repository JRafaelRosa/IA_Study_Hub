
# ✅ Checklist Técnico – Site de Estudos de IA

---

## 🧱 Arquitetura

### 🔹 Estrutura Geral
- [x] Separação clara entre **frontend (React)** e **backend (Laravel API)**.
- [x] Backend estruturado com **controllers**, **models**, **repositories** e **services**.
- [ ] Uso de **Eloquent ORM** para manipulação segura de dados.
- [ ] Arquitetura RESTful nas rotas da API.
- [ ] Versionamento de API planejado (ex: `/api/v1/`).
- [X] Middleware organizado para autenticação e permissões.

### 🔹 Organização do Frontend
- [ ] Uso do **React Router** para navegação.
- [ ] Componentes reutilizáveis com **props bem definidas**.
- [ ] Gerenciamento de estado global (ex: Context API ou Zustand).
- [ ] Comunicação com a API via `axios` ou `fetch`, com interceptadores para erros.
- [ ] Lazy loading de páginas ou módulos pesados.

---

## 🔐 Segurança

### 🔹 Autenticação e Autorização
- [ ] Autenticação com **Laravel Sanctum** (token-based).
- [ ] Proteção por **middleware `auth:sanctum`** nas rotas sensíveis.
- [X] Middleware `isAdmin` para rotas restritas.
- [ ] Tokens armazenados de forma segura no frontend (ex: em `httpOnly cookies` ou armazenamento seguro).
- [ ] Logout invalida o token corretamente.

### 🔹 Validação e Sanitização
- [ ] Toda entrada de usuário é validada com `FormRequest` ou `Validator`.
- [ ] Uso de mensagens de erro amigáveis, mas genéricas (sem vazar lógica interna).
- [ ] Dados do frontend são validados antes de serem enviados.

### 🔹 Proteções Essenciais
- [ ] CSRF habilitado nas rotas web.
- [ ] CORS configurado corretamente para o domínio do frontend.
- [ ] Rate limiting nas rotas públicas (login, registro, etc.).
- [ ] Headers de segurança configurados (`X-Content-Type-Options`, `Strict-Transport-Security`, etc.).
- [ ] HTTPS obrigatório (idealmente com HSTS).

---

## 📱 Responsividade e UX

### 🔹 Design Responsivo
- [ ] Layout adaptável a mobile, tablet e desktop.
- [ ] Uso de **media queries** ou sistema de grid (ex: Tailwind, Bootstrap ou CSS Grid).
- [ ] Componentes que se reorganizam para telas pequenas (ex: menus colapsáveis).
- [ ] Tamanhos de fonte e botões adequados para toque.

### 🔹 Acessibilidade e Experiência
- [ ] Contraste de cores adequado (WCAG AA).
- [ ] Teclado navegável (tabIndex, foco).
- [ ] Uso correto de `aria-label` e semântica HTML.
- [ ] Feedbacks visuais (loadings, toasts, erros).

---

## 🔄 Integração e Manutenção

- [ ] Deploy separado para backend (API) e frontend (Vercel, Netlify ou hospedagem própria).
- [ ] Ambiente `.env` bem organizado com variáveis separadas por função (DB, APP, SANCTUM, etc.).
- [ ] Sistema de **logs** ativo com `Log::info()` e `Log::error()`.
- [ ] Banco de dados com migrações versionadas (`php artisan migrate`).
- [ ] Seeders para popular dados iniciais (admin, categorias, etc.).
- [ ] Backup automático do banco (mesmo localmente, para testes).

---

## 🚀 Pronto para produção?

| Item | Status |
|-------|--------|
| Ambiente `.env` de produção separado e configurado corretamente | [ ] |
| Minificação e build do React (`npm run build`) | [ ] |
| Cache otimizado com `php artisan config:cache` e `route:cache` | [ ] |
| Configuração de domínio e certificado SSL | [ ] |
| Logs e monitoramento (ex: Laravel Telescope, Sentry) | [ ] |

---
