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

composer create-project laravel/laravel uerj-bank

```

O projeto será criado em uma pasta <code>uerj-bank</code> ("nome do projeto").

---

# Plugins úteis do VSCode

- Laravel Blade Snippets
- Laravel Exrra Intellisense

---

# Entendendo a estrutura de uma aplicação Laravel

- <code>app</code> -> Arquivos da "nossa" aplicação.
- <code>config</code> -> Arquivos de configuração (app, database, mail).
- <code>database</code> -> Migrations (interface para criar, alterar e editar tabelas do BD), Seeds para popular tabelas do BD e Factories usado para popular as tabelas.
- <code>public</code> -> Fica o index.php (roteadores).
- <code>resources</code> -> Assets, views e arquivos de tradução (i18n).
- <code>tests</code> -> Teste unitários da aplicação.
- <code>vendor</code> -> Pacotes de terceiros que usamos na aplicação.
- <code>.env</code> -> Variáveis de ambiente da aplicação.

---

# Iniciando a aplicação

```bash

php artisan serve

ou

php artisan serve --port=8080

```

- Acessar: http://localhost:8000/

---

# Onde ficam as rotas?

pasta -> "routes" -> arquivo "web.php"

```php
<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
```

---

# Criando Controles (controllers)

|Este comando irá gerar arquivos na pasra **app/Http/Controllers**.

**php artisan make:controller NOMEController**

exemplos:

**php artisan make:controller LoginController**

**php artisan make:controller DashboardController**

OBSERVAÇÃO: Não é obrigatório mas é indicado usar o sufixo _controller_, para os nomes do arquivos.

---

# Criando Controles

- LoginController
- DashboardController
- PixController
- BankStatement

---

# Criando os métodos

No arquivo DashboardController.php

```php
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(){
        $title = "Dashboard";
        echo $title;
    }
}
```

---

# Registrando a rota

Arquivo: routes/web.php

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
```

---

# Lidando com Request

```php
<?php
// arquivo DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $title = "Dashboard";
        echo $title;
    }
}
```

**Request** -> Podemos pegar detalhes da requisição como: query string, inputs de formulários.

---

# Lidando com Response

```php
<?php
// arquivo DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $title = "Dashboard";
        return $title;
    }
}
```

---

# Response

- O Laravel possui um recurso chamado "echo" implícito, que facilita o retorno de objetos ou arrays como resposta, convertendo-os automaticamente para o formato JSON. Isso é especialmente útil ao criar APIs, pois permite uma comunicação eficiente entre o servidor e o cliente.

- Além disso, o Laravel oferece controle total sobre os códigos de status HTTP e os cabeçalhos das respostas. Podemos definir o código de status apropriado para cada situação, como 200 para sucesso ou 404 para recurso não encontrado.

---

# Exemplo de return com objetos

```php
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(){
       $teste =[
        'nome' => 'Vicente',
        'idade' => 40,
        'preferencias' => [
            'js', 'ts', 'php', 'laravel', 'react'
        ]
        ];
        return $teste;
    }
}
```

**OBSERVAÇÃO**: Após o teste voltar o arquivo ao que era.

---

# Trabalhando na camada de visão (view)

- criar um arquivo de visão (html) na pasta: \*resources/views/dashboard/index.blade.php

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    dashboard
</body>
</html>
```

---

# Atualizando o controller

```php
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index(){
        $title = "Dashboard";
        return view('dashboard/index');
    }
}
```

---

# Preparando as páginas

- criar as pastas **images** e **css** dentro de **public**;
- dentro da pasta **css**, criar o arquivo **app.css**;
- copiar as images pra dentro de images (logo, bg e etc...);
- criar em **views** a pasta **layouts** e dentro criar o arquivo **layout-sidebar.blade.php**.

---

# Arquivo App.css

```css
* {
  box-sizing: border-box !important;
}
html {
  overflow: hidden;
}
.app {
  width: 100vw;
  height: 100vh;
  background-color: #fff;
  display: grid;
  grid-template-columns: 240px 1fr;
  gap: 10px;
  overflow: hidden !important;
}
.app aside,
.app main {
  padding: 40px 40px;
}
.app aside .logo {
  display: block;
  margin: 0 auto;
}
.app main {
  background-color: #f2f2f2;
}
.extrato{
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 20px;
    align-items: center;
}
```

---

# Arquivo Layout

1/2

```php
<?php
$menu = [
    array(
        "title" => "Acesso Rápido",
        "items" => array(
            "dashboard" => "Dashboard",
            "extrato" => "Extrato"
        )
    ),
    array(
        "title" => "Área do PIX",
        "items" => array(
            "pix" => "Pagar"
        )
    ),
    array(
        "title" => "Administração",
        "items" => array(
            "sair" => "Sair",

        )
    )
];
?>

```

---

# Arquivo Layout

2/2

```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? "UERJ Bank" }}</title>
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</head>
<body>
    <div class="app">
        <aside>
            <img src="./images/UERJ-Bank-logo.png" class="logo" />
            <nav class="menu mt-6">
                @foreach ($menu as $parentItem)
                <p class="menu-label">{{$parentItem["title"]}}</p>
                <ul class="menu-list is-primary">
                    @foreach ($parentItem["items"] as $path => $label)
                    <li><a href="{{$path}}" class="{{$activePath == $path ? 'is-active' : ''}}">{{$label}}</a></li>
                    @endforeach
                </ul>
                @endforeach
            </nav>
        </aside>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
```

---

# Atualizando o Dashboard Controller

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $title = "Dashboard";
        return view('dashboard/index',[
            'activePath' => $request->path()
        ]);
    }
}
```

---

# Preparando as páginas de PIX e Extrato

Dentro de views criar:

- bankStatement/index.blade.php
- pix/index.blade.php
- login/index.blade.php

Incluir o método **index**, mudando o $title e o caminho para o **template**.

```php

 public function index(Request $request){
        $title = "Entrar";
        return view('login/index',[
            'activePath' => $request->path()
        ]);
    }
```

---

# Registrar as URLs - web.php

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PixController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BankStatementController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pix', [PixController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/extrato', [BankStatementController::class, 'index']);
```

---

# Atualizando os VIEWS

Copiar e colar o código abaixo nos arquivos de views: pix, bankStatement e login.

```php
@component('layouts/layout-sidebar')
    @slot('activePath') {{ $activePath }} @endslot
    Pix
@endcomponent
```

---

# Melhorando o layout-sidebar

- criar 2 arquivos **head.blade.php** e **footer.blade.php**;
- atualizar o arquivo **layout-sidebar**:

```php
<?php // $menu = [ ...] <- o objeto do menu mantém?>
@include('layouts/head')
<div class="app">
    <aside>
        <img src="./images/UERJ-Bank-logo.png" class="logo" />
        <nav class="menu mt-6">
            @foreach ($menu as $parentItem)
                <p class="menu-label">{{ $parentItem['title'] }}</p>
                <ul class="menu-list is-primary">
                    @foreach ($parentItem['items'] as $path => $label)
                        <li><a href="{{ $path }}"
                                class="{{ $activePath == $path ? 'is-active' : '' }}">{{ $label }}</a></li>
                    @endforeach
                </ul>
            @endforeach
        </nav>
    </aside>
    <main>
        {{ $slot }}
    </main>
</div>
@include('layouts/footer')
```

---

# Criando o arquivo head.blade.php

```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? "UERJ Bank" }}</title>
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</head>
<body>
```

---

# Criando o arquivo footer.blade.php

```php
</body>
</html>
```

---

# Criando um layout sem nenhuma marcação
## layout-raw.php

```php
@include('layouts/head')
{{ $slot }}
@include('layouts/footer')
```
---

# Criando o arquivo de login e permitindo CSS customizado

```php
@component('layouts/layout-raw', ['customCss' => 'login'])
<div class="login">
    <div class="card p-4">
        <div class="card-content">
            <div class="content">
                <img src="images/UERJ-Bank-logo.png" class="logo" />
                <h1 class="title is-4 has-text-centered">Acesse sua conta!</h1>
                <form action="entrar" method="post">
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <input class="input" type="text" name="email" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <input class="input" type="password" name="password" placeholder="Senha">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <button class="button is-link is-fullwidth" type="submit">Entrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endcomponent
```
---
# Atualizando os arquivos de layout para permitir CSS customizados

Fazer essa atualização no **layout-raw.blade.php** e no **layout-sidebar.blade.php**.

```php

// mudar o @include('layouts/head') pelo código abaixo:

@if (isset($customCss))
    @include('layouts/head', ['customCss' => $customCss] )    
@else
    @include('layouts/head')
@endif

```

---

# Atualizando o head

```php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? "UERJ Bank" }}</title>
    <link rel="stylesheet" href="./css/app.css">
    @if(isset($customCss)) 
    <link rel="stylesheet" href="./css/{{$customCss}}.css">
    @endif
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  
</head>
<body>
```
---

# Preparando outros templates - Dashboard

```php
@component('layouts/layout-sidebar')
    @slot('activePath') {{ $activePath }} @endslot
    <div class="columns">
        <div class="column">
            <h2 class="title">Painel Inicial</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column">
          <div class="card">
            <div class="card-content">
              <div class="extrato">
                <span>
                  <h3 class="title is-3">8000</h3>
                  <small>Seu limite atual é de 1000.</small>
                </span>
                <span>
                  <a href="extrato" class="button is-link">Ver extrato</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
@endcomponent
```

---

# Teste DB

* Atualizar o .env com os dados de acesso do banco de dados.

```
DB_CONNECTION=mysql
DB_HOST=vicenteblog.mysql.dbaas.com.br
DB_PORT=3306
DB_DATABASE=vicenteblog
DB_USERNAME=vicenteblog
DB_PASSWORD=EeMeV280618@5e

```
---
# Acessando o Banco

```php

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function testDB(Request $request){
        $data = DB::select('select * from user');
        //$data = DB::select('select * from user where id = :id', ['id' => 1]);
        //var_dump($data);
        return $data;
    }
}


```