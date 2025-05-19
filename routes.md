# 📘 Documentação de Rotas – Site de Estudos de IA

Este documento descreve todas as rotas utilizadas no sistema, tanto para a interface web quanto para a API REST. Ele serve como guia para desenvolvedores que trabalham no frontend ou backend.

---

## 🌐 Rotas Web (Frontend React)

Essas rotas são controladas pelo React Router. Laravel apenas serve o `index.html` e deixa o React gerenciar a navegação.

| Rota | Descrição |
|------|-----------|
| `/` | Página inicial com introdução ao site e visão geral sobre engenharia de prompt. |
| `/login` | Tela de login para usuários existentes. |
| `/register` | Tela de cadastro de novos usuários. |
| `/categories/:id` | Exibe os exemplos de prompt da categoria selecionada. |
| `/examples/:id` | Detalhes completos de um exemplo de prompt, incluindo explicações. |
| `/articles/:id` | Visualização completa de um artigo sobre técnicas ou boas práticas. |
| `/favorites` | (Autenticado) Lista de conteúdos marcados como favoritos. |
| `/dashboard` | (Autenticado como Admin) Painel para gerenciar conteúdos (CRUD). |

---

## 🛠️ Rotas API (Laravel Backend - `/api`)

---

### 🔐 Autenticação

| Método | Rota | Descrição |
|--------|------|-----------|
| `POST` | `/api/register` | Criação de um novo usuário. |
| `POST` | `/api/login` | Autenticação do usuário e geração de token. |
| `POST` | `/api/logout` | Logout e revogação do token. |
| `GET`  | `/api/user` | Dados do usuário autenticado. |

---

### 📁 Categorias

| Método | Rota | Descrição |
|--------|------|-----------|
| `GET` | `/api/categories` | Lista todas as categorias. |
| `GET` | `/api/categories/{id}` | Detalhes de uma categoria específica. |
| `POST` | `/api/categories` | (Admin) Cria uma nova categoria. |
| `PUT` | `/api/categories/{id}` | (Admin) Atualiza uma categoria. |
| `DELETE` | `/api/categories/{id}` | (Admin) Exclui uma categoria. |

---

### 💬 Exemplos de Prompt

| Método | Rota | Descrição |
|--------|------|-----------|
| `GET` | `/api/examples` | Lista todos os exemplos disponíveis. Pode ser filtrado por categoria. |
| `GET` | `/api/examples/{id}` | Detalhes de um exemplo específico. |
| `POST` | `/api/examples` | (Admin) Criação de um novo exemplo. |
| `PUT` | `/api/examples/{id}` | (Admin) Atualiza um exemplo. |
| `DELETE` | `/api/examples/{id}` | (Admin) Remove um exemplo existente. |

---

### 📄 Artigos

| Método | Rota | Descrição |
|--------|------|-----------|
| `GET` | `/api/articles` | Lista todos os artigos. |
| `GET` | `/api/articles/{id}` | Exibe os detalhes de um artigo. |
| `POST` | `/api/articles` | (Admin) Criação de um novo artigo. |
| `PUT` | `/api/articles/{id}` | (Admin) Atualização de artigo. |
| `DELETE` | `/api/articles/{id}` | (Admin) Exclusão de artigo. |

---

### ⭐ Favoritos

| Método | Rota | Descrição |
|--------|------|-----------|
| `GET` | `/api/favorites` | Lista os exemplos favoritos do usuário autenticado. |
| `POST` | `/api/examples/{id}/favorite` | Marca ou desmarca um exemplo como favorito. |

---

### 🔒 Controle de Acesso

- As rotas protegidas exigem autenticação via token (`auth:sanctum`).
- Ações administrativas exigem verificação de perfil com middleware como `isAdmin`.

---

### 🧪 Possíveis Melhorias Futuras

| Rota | Finalidade |
|------|------------|
| `GET /api/search?q=` | Busca global entre exemplos, artigos, categorias. |
| `GET /api/tags` | Sistema de tags para organização de conteúdo. |
| `GET /api/statistics` | Painel de estatísticas de uso para administradores. |

---
