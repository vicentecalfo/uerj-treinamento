---
marp: true
paginate: true
---

# Laravel

Repositório projeto: https://github.com/vicentecalfo/uerj-laravel

_Vicente Calfo_
<small>vicentecalfo@gmail.com</small>
<small>https://www.linkedin.com/in/vicentecalfo/</small>
<small>https://github.com/vicentecalfo</small>

---

# O que é o Laravel?

O **Laravel** é um framework de desenvolvimento web em PHP, conhecido por sua elegância, simplicidade e facilidade de uso. Ele segue a arquitetura MVC (Model-View-Controller) e oferece uma ampla gama de recursos e funcionalidades pré-construídas que agilizam o processo de desenvolvimento.

---

# Principais características do Laravel:

- Sintaxe expressiva e intuitiva.
- Arquitetura MVC.
- Recursos pré-construídos para facilitar o desenvolvimento.
- Rotas amigáveis.
- Sistema de gerenciamento de banco de dados.
- Mecanismo de templates.
- Autenticação de usuários.
- Segurança.
- Cache.

---

# Outros detalhes

- O Laravel possui uma comunidade ativa e suporte contínuo;
- Oferece documentação detalhada;
- Variedade de pacotes adicionais (conhecidos como "Laravel Packages") e uma comunidade engajada;
- Amplamente utilizado;
- Usado para o desenvolvimento de aplicações de todos os portes.

---

# Instalando o Composer no Windows

- https://getcomposer.org/Composer-Setup.exe

Após a instalação, reiniciar todos os terminais abertos e digitar <code> composer -V </code>

## O que é o Composer

- Uma ferramenta de gerenciamento de dependências para projetos em PHP.
- Permite que você defina as dependências do seu projeto em um arquivo composer.json, onde você pode listar as bibliotecas que seu projeto precisa para funcionar corretamente. 

---

# Instalação do Laravel

- Ir no <code>php.ini</code> da instalção do PHP, na <code>linha 965</code> e mudar para <code>extension=php_zip.dll</code>

- Incluir também no <code>php.ini</code> na <code>linha 966</code>: <code>extension=php_fileinfo.dll</code>

```bash

composer create-project laravel/laravel uerj-aula

```

O projeto será criado em uma pasta <code>uerj-aula</code> ("nome do projeto").

---

# Entendendo a estrutura de uma aplicação Laravel

* <code>app</code> -> Arquivos da "nossa" aplicação.
* <code>config</code> -> Arquivos de configuração (app, database, mail).
* <code>database</code> -> Migrations (interface para criar, alterar e editar tabelas do BD), Seeds para popular tabelas do BD e Factories usado para popular as tabelas.
* <code>public</code> -> Fica o index.php (roteadores).
* <code>resources</code> -> Assets, views e arquivos de tradução (i18n).
* <code>tests</code> -> Teste unitários da aplicação.
* <code>vendor</code> -> Pacotes de terceiros que usamos na aplicação.
* <code>.env</code> -> Variáveis de ambiente da aplicação.

---

# Iniciando a aplicação

```bash

php artisan serve

ou

php artisan serve --port=8080 

```

- Acessar: http://localhost:8000/



