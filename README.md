# IA Study Hub

**IA Study Hub** é uma plataforma de aprendizado interativo sobre Inteligência Artificial (IA), com foco especial em engenharia de prompt. O objetivo é reunir conteúdo didático, exemplos práticos, glossário e recursos úteis para quem quer dominar o uso de ferramentas baseadas em IA.

---

## 🧠 Funcionalidades do Sistema

### 👥 Público Geral (Visitante)

- 🔍 Buscar prompts por nome, tipo, categoria ou tag  
- 📂 Navegar por categorias  
- 🧪 Ver prompt + exemplo de uso + explicação  
- 📚 Consultar glossário de termos  
- 🔗 Acessar ferramentas e recursos externos  

### 🔒 Admin / Editor (Restrito)

- ✏️ Criar, editar e excluir:
  - Prompts
  - Categorias
  - Tipos de prompt
  - Glossário
  - Ferramentas
- 🗃️ Organizar ordem de exibição e destaque a funções do sistema

---

## 🛠️ Tecnologias Utilizadas

- **Backend:** Laravel  
- **Frontend:** React  
- **Banco de Dados:** MySQL  
- **ORM:** Eloquent  
- **Outros:** TailwindCSS, Axios, Vite

---
## 🧭 Fluxograma do Sistema Usuario

<img src="https://i.postimg.cc/nrrXPJmv/Fluxo-User.png" alt="Fluxograma do Sistema" width="600"/>

> 🗺️ Este fluxograma mostra a navegação entre as páginas e funcionalidades do sistema de estudo de IA.

---
## 🧭 Fluxograma do Sistema ADM

<img src="https://i.postimg.cc/BZ7L1jWN/FluxoAdm.png" alt="Fluxograma do Sistema" width="600"/>

> 🗺️ Este fluxograma mostra a navegação entre as páginas e funcionalidades do sistema para os adms.
 
---

## 🗃️ Diagrama do Banco de Dados

![Diagrama do Banco de Dados](https://i.postimg.cc/KzDL54LX/Untitled.png)

> 📊 [Visualizar diagrama em sql](https://dbdiagram.io/d/IA-Study-Hub-6818f7371ca52373f58a8db6)


## 🚀 Instalação

### Requisitos

- PHP : 8.2  
- Composer
- Laravel 12
- Node.js e npm  
- MySQL


### 🚀 Passos para Instalação

1. **Clone o repositório e acesse a pasta:**

```bash

git clone https://github.com/JRafaelRosa/IA_Study_Hub.git
cd ia-study-hub
```

2. **Instale as dependências do Laravel (backend):**

```bash
composer install
```

3. **Copie e configure o arquivo `.env`:**

```bash
cp .env.example .env
```

> Edite o `.env` com as configurações do banco:
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ia_study
DB_USERNAME=root
DB_PASSWORD=sua_senha
```

4. **Gere a chave da aplicação:**

```bash
php artisan key:generate
```

5. **Execute as migrations:**

```bash
php artisan migrate
```

6. **Instale as dependências do frontend (React + Vite):**

```bash
npm install
```

7. **Inicie o servidor do frontend:**

```bash
npm run dev
```

8. **Em outro terminal, inicie o servidor do Laravel:**

```bash
php artisan serve
```
