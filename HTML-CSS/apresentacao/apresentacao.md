---
marp: true
paginate: true
---

# Treinamento HTML 5

Vicente Calfo

<small>vicentecalfo@gmail.com</small>

---

# Apresentação

## Objetivo
Criar páginas web usando a linguagem de marcação HTML

## Abordagem

<ul>
    <li>Importância do HTML na web</li>
    <li>Formatação de documentos HTML</li>
</ul>

---

# O que é HTML

## HyperText Markup Language

*Linguagem de Marcação de HiperTexto*

É uma linguagem de marcação para desenvolver páginas e documentos eletrônicos para a internet, fornecendo informações para usuários, navegadores e mecanismos de busca.

---

# Como funciona?

O HTML é dividido em *tags*, que são elementos com atributos que indicam "coisas" para o navegador interpretar e mostrar (renderizar) visualmente o site.

## Semântica

As *tags* possuem valores semânticos, o que significa que cada componente da página terá seu significado específico. 

---

# Exemplos

```html

<h1>Eu sou um título<h1>

<a href="#">Eu sou um link</a>

<!-- Isso é uma tabela -->
<table>
    <tr>
        <th>Cabeçalho 1</th>
        <th>Cabeçalho 2</th>
        <th>Cabeçalho 3</th> 
    <tr>
    <tr>
        <td>Coluna 1</td>
        <td>Coluna 2</td>
        <td>Coluna 3</td> 
    <tr>
</table>

```

---

# Vantagens do uso do HTML

<ol>
    <li>Criar e adicionar facilmente documentos na web;</li>
    <li>Assegurar acessibilidade das páginas web por um grande número de plataformas e navegadores.</li>
</ol>


# O Papel do HTML

O HTML fornece a interface básica para interação com a aplicações web.


---

# Criando um documento HTML

```html

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Documento HTML</title>
    </head>
    <body>
        <h1>Títutlo</h1>
        <img src="image.jpg" alt="texto alternativo"/>
    </body>
</html>
```

---

# Anatomia de uma tag
## Tags com fechamento

```html 

<html></html>
<body></body>
<p></p>
<table></table>

```

## Tags sem fechamento

```html 

<br />
<img />

```

---

# Anatomia de uma tag

```html 

<img src="avatar.png" class="avatar" alt="Avatar do usuário João" />

```

---

# Tags de HTML para formatação de texto
## Parágrafo

```html

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis consectetur enim, 
quis sodales ex dignissim eu.</p>

```

---

# Tags de HTML para formatação de texto
## Quebra de linha

```html

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
<br>Nova linha. Nullam iaculis consectetur enim, quis sodales ex dignissim eu.</p>

```

---

# Tags de HTML para formatação de texto
## SPAN - Tag sem valor semântico

```html

<p>Lorem ipsum dolor sit amet, <span>consectetur adipiscing</span> elit.</p>

```

---

# Tags de HTML para formatação de texto
## Títulos

```html

<h1>Título 1</h1>
<h2>Título 2</h2>
<h3>Título 3</h3>
<h4>Título 4</h4>
<h5>Título 5</h5>
<h6>Título 6</h6>

```

---

# Tags de HTML para formatação de texto
## Destaques

```html

<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit.</p>

<p>Lorem ipsum dolor sit amet, <em>consectetur adipiscing</em> elit.</p>

```

---

# Tags de HTML para formatação de texto
## Citação de texto

```html
<blockquote>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Nullam iaculis consectetur enim, quis sodales ex dignissim eu.
    Nunc consequat ligula nunc. Donec nec condimentum tortor. 
    Nam eu nisl fringilla, euismod est eget, tincidunt sem. 
    Nullam et elementum enim, a blandit erat. 
    Vestibulum scelerisque aliquam odio sit amet consectetur.
    Ut scelerisque orci vitae quam aliquam commodo.
</blockquote>

```

---

# Tags de HTML para formatação de texto
## Bloco de código (linguagem de programação)

```html
<p>The HTML <code>button</code> tag defines a clickable button.</p>

```

---

# Tags de HTML para formatação de texto
## Lista Não Ordenada

```html

<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
</ul>

```

---

# Tags de HTML para formatação de texto
## Lista Ordenada

```html

<ol>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
</ol>

```

---

# Tags de HTML para formatação de texto
## Lista Descritiva

```html

<dl>
  <dt>Café</dt>
  <dd>Café preto servido quente</dd>
  <dt>Café com leite</dt>
  <dd>Café preto misturado com leite e servido quente</dd>
</dl>
```

---

# Links

```html

<a href="https://www.w3schools.com">Visite a W3Schools.com para estudar HTML!</a>

```

---

# Containers
## article

```html 

<article>
    <h2>Título de um post</h2>
    <a href="#">Ler mais</a>
</article>
<article>
    <h2>Outro título de um post</h2>
    <a href="#">Ler mais</a>
</article>

```

---

# Containers
## header

```html 

<article>
    <header>
        <h2>Título de um post</h2>
    </header>
    <a href="#">Ler mais</a>
</article>
```

---

# Containers
## footer

```html 

<article>
    <header>
        <h2>Título de um post</h2>
    </header>
    <a href="#">Ler mais</a>
    <footer>
        <p>...</p>
    </footer>
</article>
```

---

# Containers
## section

```html 

<section>
  <h2>Seção de uma página</h2>
  <p>...</p>
</section>

```

---

# Containers
## DIV

```html 

<div>
  <h2>Seção de uma página</h2>
  <p>...</p>
</div>

```

---

# Containers
## Navegação

```html 

<nav>
  <ol>
    <li><a href="/">Página Inicial</a></li>
    <li><a href="/blog">Blog</a></li>
  </ol>
</nav>

```

---

# Containers
## Conteúdo Principal

```html 

<body>
  <main>
    <p>....</p>
  </main>
</body>

```

---

# Containers
## Conteúdo Secundário

```html 

<body>
  <main>
    <p>....</p>
  </main>
  <aside>
    <p>...</p>
  </aside>
</body>

```

---

# Tabelas em HTML - Marcação Simplificada

```html

<table>
  <tr>
    <th>Mês</th>
    <th>Custo</th>
  </tr>
  <tr>
    <td>Janeiro</td>
    <td>R$ 1.000,00</td>
  </tr>
  <tr>
    <td>Fevereiro</td>
    <td>R$ 800,00</td>
  </tr>
</table>

```

---

# Tabelas em HTML - Marcação Completa

```html

<table>
  <thead>
    <tr>
      <th>Mês</th>
      <th>Custo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Janeiro</td>
      <td>R$ 1.000,00</td>
    </tr>
    <tr>
      <td>Fevereiro</td>
      <td>R$ 800,00</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>Total</td>
      <td>R$ 1.800,00</td>
    </tr>
  </tfoot>
</table>

```



---

# Imagens

```html

<img src="avatar.png" alt="Avatar do usuário João" >

```

---

# Formulários
## Finalidade dos formulários

<ul>
  <li>Através dos formulários que os usuários interagem de forma muita mais dinâmica com os sites;</li>
  <li>Os formulários fazem o papel de interface do nosso sistema/site, recebendo os dados do inseridos pelo usuário.</li>
</ul>


---

# Criando um Formulário
Todos os formulários em HTML devem, sem exceção, possuir a tag < FORM >, além disso para o correto funcionamento é necessário dois atributos: *action* e *method*.

<dl>
  <dt>action</dt>
  <dd>Define o endereço que receberá os dados preenchidos no formulário.</dd>
  <dt>method</dt>
  <dd>Especifica a forma (método) de envio dos dados, podendo ser do tipo GET ou POST.</dd>
</dl>

```html
<form action="gravar-dados.php" method="post" >
  // campos do formulário
</form>
```

---

# HTTP
## *Hypertext Transfer Protoco*
O HTTP é um protocolo que define as regras de comunicação entre cliente e servidor na internet.

A troca de dados na web e realizada em um protocolo cliente-servidor. Este é um modelo arquitetural, ou seja, a internet inteira é baseada nesta arquitetura onde há um cliente que solicita e um servidor que responde.

---

# HTTP

<img src="https://developer.mozilla.org/en-US/docs/Web/HTTP/Overview/fetching_a_page.png">

<small style="font-size:15px;">* https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Overview</small>

---

# Métodos GET e POST

<dl>
  <dt>GET</dt>
  <dd>método que envia as variáveis digitadas pelo usuário pela URL, ou seja, podemos ver as variáveis sendo passadas pela URL da página de destino. Não é muito aconselhável o uso do método GET, pois ele expõe os nomes e os valores das variáveis.</dd>
  <dt>POST</dt>
  <dd>método que envia as variáveis digitadas pelo corpo da página, sendo completamente transparente para o usuário. É o método mais aconselhável.</dd>
</dl>

---

# Campos de entrada de dados
## < input >

```html 

<form action="gravar-dados.php" method="post">
  <label for="email-field">Seu e-mail</label>
  <input name="email" id="email-field" type="email">
  <button type="submit">Enviar</button>
</form>

```

---

# Anatomia do < input >

<dl>
  <dt>type</dt>
  <dd>Tipo de entrada de dados ndo campo.</dd>
  <dt>name</dt>
  <dd>Nome da variável que o script receberá os dados inseridos.</dd>
</dl>

---

<table>
<tbody><tr>
<th style="width:25%">Tipo</th>
<th>Função</th>
</tr>
<tr>
<td>button</td>
<td>Define um botão clicável (usado principalmente com um JavaScript para ativar um script)</td>
</tr>
<tr>
<td>checkbox</td>
<td>Define uma caixa de seleção para seleção de várias opções</td>
</tr>
<tr>
<td>color</td>
<td>Define um seletor de cores em hexadecimal</td>
</tr>
<tr>
<td>date</td>
<td>Define um controle para selecionar data (ano, mês, dia (sem hora))</td>
</tr>
<tr>
<td>datetime-local</td>
<td>Define um controle para selecionar data e hora (ano, mês, dia, hora (sem fuso horário)</td>
</tr>
<tr>
<td>email</td>
<td>Define um campo para entrar com endereço de e-mail</td>
</tr>
</tbody></table>

---
<table><tbody>
<tr>
<th style="width:25%">Tipo</th>
<th>Função</th>
</tr>
<tr>
<td>file</td>
<td>Define um campo para selecionar um arquivo e um botão "Procurar" (para uploads de arquivo)</td>
</tr>
<tr>
<td>hidden</td>
<td>Define um campo oculto</td>
</tr>
<tr>
<td>image</td>
<td>Define uma imagem como o botão de envio</td>
</tr>
<tr>
<td>month</td>
<td>Define um controle para selecionar mês e ano (sem fuso horário)</td>
</tr>
<tr>
<td>number</td>
<td>Define um campo para selecionar um número inteiro</td>
</tr>
<tr>
<td>password</td>
<td>Define um campo para senha</td>
</tr>
<tr>
<td>radio</td>
<td>Define um botão de opção para seleção única</td>
</tr>
</tbody></table>

---

<table><tbody>
<tr>
<th style="width:25%">Tipo</th>
<th>Função</th>
</tr>
<tr>
<td>range</td>
<td>Define um controle de intervalo (como um controle deslizante)</td>
</tr>
<tr>
<td>reset</td>
<td>Define um botão para reinicar o preenchimento do formulário</td>
</tr>
<tr>
<td>search</td>
<td>Define um campo de texto para inserir uma string de pesquisa</td>
</tr>
<tr>
<td>submit</td>
<td>Define um botão para enviar os dados do formulário</td>
</tr>
<tr>
<td>tel</td>
<td>Define um campo para inserir um número de telefone</td>
</tr>

</tbody></table>

---

<table><tbody>
<tr>
<th style="width:25%">Tipo</th>
<th>Função</th>
</tr>

<tr>
<td>text</td>
<td>Input padrão. Define um campo de texto de linha única</td>
</tr>
<tr>
<td>time</td>
<td>Define um controle para inserir um horário (sem fuso horário)</td>
</tr>
<tr>
<td>url</td>
<td>Define um campo para inserir uma URL</td>
</tr>
<tr>
<td>week</td>
<td>Define um controle para selecionar semana e ano (sem fuso horário)</td>
</tr>
</tbody></table>

---

# Campos de entrada de dados
## < select >
*combo box*, *menu de salto*, *select*

```html 

<p>Escolaridade:
<select name="escolaridade">
     <option value="em"> Ensino Médio </option>
     <option value="nt" selected> Nível Técnico </option>
     <option value="ns"> Nível Superior </option>
</select>
</p>

```

---

# Campos de entrada de dados
## < textarea >

```html 

<p>Observações:
  <textarea name="obs" cols="20" rows="5"></textarea>
</p>

```

---

# As tags < label >, < fieldset > e < legend >

Elas funcionam como marcações e rótulos para os elementos que criamos em nossos formulários.

---

# < label >

```html 

<label>Escolaridade:
<select name="escolaridade">
     <option value="em"> Ensino Médio </option>
     <option value="nt"> Nível Técnico </option>
</select>
</label>

```
## Vantagens
<ul>
  <li>Usuários de leitores de tela (lerão o rótulo em voz alta, quando o usuário estiver focado no elemento).</li>
  <li>Usuários que têm dificuldade de clicar em regiões muito pequenas (como checkboxes);</li>
</ul>

---

# < fieldset > e < legend >

```html
<fieldset>
     <legend>Dados pessoais</legend>
     <label>Nome:<input type="text" name="nome" /></label><br />
     <label>Idade:<input type="text" name="idade" /></label><br />
</fieldset>
<fieldset>
     <legend>Dados profissionais</legend>
     <label>Escolaridade:
     <select name="escolaridade">
          <option value="em"> Ensino Médio </option>
          <option value="nt"> Nível Técnico </option>
          <option value="ns"> Nível Superior </option>
     </select>
     </label>
     <br />
     <label>Área de atuação
          <input type="radio" name="cargo" value="1" checked> Gerência
          <input type="radio" name="cargo" value="2" > Financeiro
          <input type="radio" name="cargo" value="3" > Recepção
     </label>
</fieldset>
```

---

# < button >

```html

<button type="button">Click Me!</button>

```

<ul>
  <li>button</li>
  <li>reset</li>
  <li>submit</li>
</ul>

---

# Botão como Link

## < button > NÃO TEM ATRIBUTO HREF

```html
<button onclick="window.location.href='https://www.freecodecamp.org/';">freeCodeCamp</button>
```

---

# Formulário Avançado
# Grupo de Opções - < optgroup  >

```html

<select name="cars" id="cars">
    <optgroup label="Carros Suecos">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
    </optgroup>
    <optgroup label="Carros alemães">
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </optgroup>
  </select>

```
---

# Citação Curta
## < q >
```html

<p>A expressão <q>furiosa</q> dessa estátua de que fala Rabelais, 
corresponde também à realidade.</p>

```

---

# Abreviação
## < abbr >
A marcação de abreviações pode fornecer informações úteis para navegadores, sistemas de tradução e mecanismos de pesquisa.
```html

<p>O <abbr title="Hypertext Transfer Protocol">HTTP</abbr> é um 
protocolo de comunicação utilizado para sistemas de informação.</p>

```

---

# Bloco de Endereço
## < address >
O elemento de endereço HTML define as informações de contato (autor/proprietário) de um documento ou artigo.

```html

<address>
  www.aprendendohtml.com.br<br>
  Rua Isisdro de Figueiredo, 30<br>
  CEP: 20271-100<br>
  Rio de Janeiro, RJ, Brasil
</address>

```

---

# Citação (citar)
## < cite >
Define o título de um trabalho criativo (por exemplo, um livro, um poema, uma música, um filme, uma pintura, uma escultura, etc.).

```html

<p><cite>Porto I</cite> por Tarsila do Amaral. Óleo sobre tela, 1953.</p>

```

---

# < dialog > 

```html

<h1>The dialog element</h1>

<p>This is some text.</p>

<p>This is some text.</p>

<dialog open style="padding:120px;">This is an open dialog window</dialog>

<p>This is some text.</p>

<p>This is some text.</p>

```

---

# Favicon

Extensões permitidas (navegadores modernos): ICO, PNG, GIF, JPEG	e SVG.

```html

<link rel="icon" type="image/x-icon" href="/images/favicon.ico">

```
---

# Estilo (CSS)
## < style >

```html

<style>
  body {background-color: powderblue;}
  h1 {color: red;}
  p {color: blue;}
</style>

```

---

# Cores

## https://www.w3schools.com/colors/colors_names.asp

As cores HTML são especificadas com nomes de cores predefinidos ou com valores RGB, HEX, HSL, RGBA ou HSLA.

```html

<h1 style="background-color:Tomato;">Tomato</h1>
<h1 style="background-color:Orange;">Orange</h1>
<h1 style="background-color:DodgerBlue;">DodgerBlue</h1>

```

---

# Javascript
## < script >

```html

<script>
  alert("Hello JavaScript!")
</script>

```

---

# Canvas
O < canvas > é usado para desenhar gráficos, em tempo real, por meio de JavaScript.
```html

<canvas id="myCanvas">O Navegador não suporta canvas.</canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.fillStyle = "#FF0000";
ctx.fillRect(0, 0, 80, 100);
</script>

```

---

# Imagem Avançada
## < picture >

```html

<picture>
  <source media="(min-width: 1000px)" srcset="img_food.jpg">
  <source media="(min-width: 865px)" srcset="img_car.jpg">
  <img src="img_girl.jpg" style="width:auto;">
</picture>

```

---

# Caminhos (URLs)
Também conhecido como: paths, links e urls.

## Caminho absoluto

```html
  <img src="https://seuladogeek.com.br/wp-content/uploads/2022/02/logo-netflix-png-e-vetor.png" alt="Logo Netflix"> 
```

## Caminho relativo
É uma prática recomendada usar caminhos de arquivo relativos (se possível).

```html
  <img src="/images/picture.jpg" alt="Picture"> 
```


---

# Base (URL)
<ul>
  <li>Especifica a URL base e/ou destino para todas as URLs relativas em uma página;</li>
  <li>Só pode haver um único elemento < base > em um documento.</li>
</ul>


```html
<head>
  <base href="https://www.w3schools.com/" target="_blank">
</head>

<body>
  <img src="images/stickman.gif" width="24" height="39" alt="Stickman">
  <a href="tags/tag_base.asp">HTML base Tag</a>
</body>
```

---

# IFRAME

Embute um documento HTML dentro do documento atual.

```html

<iframe src="iframe.htm" height="200" width="300" title="Iframe Example"></iframe>

```

---

# Comentários


```html

<!-- <p>Frase comentada. </p> -->

<!--
<p>Uma imagem:</p>
<img border="0" src="imagem.jpg" alt="Trulli">
-->

```

---

# Tags Importantes para SEO
## Search Engine Optimization (Otimização para motores de busca)
### O que é SEO?

É o conjunto de técnicas usadas, geralmente divididas entre **tecnologia** e **conteúdo**, para alcançar bom posicionamento de páginas de um site no Google e em outros buscadores, gerando **tráfego orgânico**.

---

# O que é Tráfego Orgânico?

Tráfego orgânico é todo o conjunto de visitas geradas para o seu site de maneira espontânea, ou seja, sem usar anúncios. Geralmente esse tipo de tráfego vem de mecanismos de busca, como o Google, Yahoo! e o Bing.


---

# O que é Tráfego Pago?

Tráfego pago na internet é aquele que vem de anúncios feitos em mecanismos de busca, redes sociais e até mesmo em outros sites.

---

# Por quê o HTML é importante para o SEO?

## SEMÂNTICA

O HTML nos permite descrever através dos elementos semânticos (*tags*) a estrutura de uma página na *web*, permitindo que mecanismos de busca "entendam" melhor o conteúdo e melhorem a visibilidade do site na *indexação* dos resultados.

Contêineres com nomes específicos ajudam os buscadores a identificar a formação da página, dessa maneira o "Google" ou o "Bing" sabem rastrear o conteúdo da página, sabendo exatamente o que deve ser priorizado.

---

# Exemplo

<img src="https://danieldigital.com.br/wp-content/uploads/2019/05/html5-semantico-avanc%CC%A7ado-tags-seo-768x672.jpg" style="height:563px; width:700px; display:block; margin: 0 auto;">

---

# < meta >
## Descrição (description)

```html
<meta name="description" content="Lorem ipsum dolor sit amet, 
consectetur adipiscing elit. Vestibulum vel justo ac tortor molestie 
pellentesque. Vestibulum pharetra dolor vel consequat accumsan.">

```

<img src="https://neilpatel.com/wp-content/uploads/2017/10/pasted-image-0-767.png" >

---

# < meta >
## Palavra-chave (keywords)

As palavras-chave são um tipo específico de meta tag que ajuda a informar aos mecanismos de pesquisa quais são os tópicos tratados no conteúdo da página.

```html

<meta name="keywords" content="HTML, CSS, JavaScript">

```

---

# Tags não essenciais mas recomendadas para SEO

<dl>
  <dt>author</dt>
  <dd>Nome do autor da página.</dd>
  <dt>rating</dt>
  <dd>Informa a classificação do conteúdo.</dd>
  <dt>revised</dt>
  <dd>Usada para informar quando uma página foi alterada pela última vez.</dd>
</dl>

```html

<meta name="author" content="Vicente Calfo">

<meta name="rating" content="General">

<meta name="revised" content="Sunday, July 18th, 2010, 5:15 pm" />

```

---

# Símbolos HTML
## https://www.w3schools.com/html/html_symbols.asp

```html

<p>&copy;</p>
<p>&reg;</p>
<p>&euro;</p>

```

---

# Emoji
## https://www.w3schools.com/charsets/ref_emoji.asp (código da coluna DEC)

Adicionar "&#" + código DEC

```html

<p>&#128512;</p>
<p>&#128513;</p>
<p>&#128517;</p>

```

---

# SVG
## O que é SVG?
O *Scalable Vector Graphics* (SVG) é um formato de arquivo vetorial compatível com a Web.

```html

<svg width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>

```

---

# SVG
## < circle >

```html

<svg width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>

```

---

# svg
## < rect >

```html

<svg width="400" height="100">
  <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
</svg>

```

---

# svg
## < rect > - canto arredondado

```html

  <svg width="150" height="150">
    <rect rx="20" ry="20" width="150" height="150"
    style="fill:red;opacity:0.5" />
  </svg>

```
---

# svg

## < polygon >

```html

  <svg width="300" height="200">
    <polygon points="100,10 40,198 190,78 10,78 160,198"
    style="fill:lime;stroke:purple;stroke-width:5;" />
  </svg>

```

---

# svg

## Desenhos Complexos

```html

  <svg height="130" width="500">
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
      <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
    </linearGradient>
  </defs>
  <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
  <text fill="#ffffff" font-size="45" font-family="Verdana" x="50" y="86">SVG</text>
  Sorry, your browser does not support inline SVG.
</svg>

```

---

# < video >

```html

<video width="600" height="340" controls autoplay muted>
  <source src="movie.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

```

---

# Adicionando CSS
## Externo

```html

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  </body>
</html>
```
---

# Adicionando CSS
## Interno

```html

<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
        background-color: cian;
      }
    </style>
  </head>
  <body>
  </body>
</html>
```

---

# Ordem de prioridade dos estilos

* Estilo *inline* (dentro da tag de HTML);
* Externos e internos (dentro da tag < head >);
* Padrão do Navegador.

---

# Sintaxe do CSS

<img src="https://www.w3schools.com/css/img_selector.gif" style="width:70%; display:block; margin: 0 auto;">

```css

h1 {
  color: blue;
  font-size: 12px;
}

```

---

# Seletores
## tag

```css

h1 {
  color: blue;
  font-size: 12px;
}

```

---

# Seletores
## Seletor de ID

```css

#texto {
  color: blue;
  font-size: 12px;
}

```

---

# Seletores
## Seletor de Class

```css

.center {
  text-align: center;
}

p.center{
  text-align: center;
}

```

---

# Seletores
## Seletor Universal

```css

* {
  text-align: center;
}

```

---

# Seletores
## Agrupamento

```css

h1, h2, p {
  text-align: center;
}

```

---

# Comentário

```css
p {
  color: green; /* Comentário de uma única linha */
}

/* Comentário em bloco

p {
  color: green; 
}

*/

```

--- 

# Cores
* **Cor-luz:** é toda cor formada pela emissão direta de luz (sistema aditivo);
* **Cor-pigmento:** é a cor refletida por um objeto (sistema subtrativo);

### RGB e CMKY

* No grupo **cor-luz**, as cores primárias são vermelho, verde e azul (**sistema RGB**);
* No grupo **cor-pigmento**, as cores primárias são: ciano, magenta e amarelo. A elas se junta o preto, que serve para dar contrate (**sistema CMYK**).

---

# RGB

<img src="https://gerenciamentodecor.files.wordpress.com/2016/02/3288e-rgb.jpg" style="display:block; width:600px; margin: 0 auto;">

---

# CMYK

<img src="https://gerenciamentodecor.files.wordpress.com/2016/02/12e79-cmy.jpg" style="display:block; width:600px; margin: 0 auto;">

---

# Características das Cores

**Matiz** é a característica que define e distingue uma cor. Azul, vermelho e amarelo são matizes. A mistura de matizes dá origem a outro matiz.

**Tom** refere-se à maior ou menor quantidade de luz presente na cor. Ao adicionarmos preto a um matiz, ele fica gradualmente mais escuro. Essa graduação é conhecida como escala tonal. Acrescentando branco a um matiz, obtemos escalas tonais mais claras.

**Intensidade** tem a ver com o brilho da cor. Um matiz de intensidade alta é vívida, brilhante, como o amarelo. Um matiz de intensidade baixa é mais apagada, como as cores pastéis.

<small style="font-size:15px;">* http://www.invivo.fiocruz.br/cienciaetecnologia/cor-luz-ou-pigmento/#:~:text=A%20cor%2Dluz%20ou%20cor,que%20o%20olho%20humano%20percebe.</small>



---

# Cores
## RGB 
### rgb(red, green, blue)

* Cada parâmetro (vermelho, verde e azul) define a intensidade da cor entre 0 e 255.

## HEX
### #rrggbb
* Onde rr (vermelho), gg (verde) e bb (azul) são valores hexadecimais entre 00 e ff (o mesmo que decimal 0-255).

---

# Hierarquia de Especificidade

* Estilos *inline* (dentro da tag de HTML);
* ID (#nav-var);
* Classes, pseudo-classes e seletores de atirbutos (.texto, :hover, [href]);
* Elementos e pseudoelementos (p, :after).

---

# Box-Model

Todos os elementos HTML podem ser considerados como caixas, que consiste em: **margens**, **bordas**, **preenchimento** e o **conteúdo real**.

<div style="display: flex; grid-gap:30px">
<div><img src="https://miro.medium.com/max/408/1*sKnLrT1TtqWDZg7GWoBCow.png" style="height:202px; width:408px; display:block; margin: 30px auto;"></div>
<div style="font-size:24px;">

<br>

* **Conteúdo** - O conteúdo da caixa, onde aparecem texto e imagens;
* **Preenchimento** - Limpa uma área ao redor do conteúdo. O enchimento é transparente;
* **Borda** - Uma borda que contorna o preenchimento e o conteúdo;
* **Margin** - Limpa uma área fora da borda. A margem é transparente.
</div>
</div>



---

# Box-Model (Altura e Largura)

```css

div {
  width: 300px;
  padding: 10px;
  border: 2px solid red;
  margin: 0;
}

/*

300px (largura declarada)
+ 20px (preenchimento esquerdo + direito)
+ 4px (borda esquerda + direita)
+ 0px (margem esquerda + direita)
= 324px (largura real)
*/

```
---

# Box-Sizing
A propriedade CSS **box-sizing** nos permite incluir o preenchimento e a borda na largura e altura total de um elemento.

```css

.teste1 {
  width: 300px;
  padding: 50px;
  border: 1px solid green;
}

.teste2 {
  width: 300px;
  padding: 50px;
  border: 1px solid purple;
  /*box-sizing: border-box;*/
}

```

---

# Background
## background-color

Especifica a cor de fundo de um elemento.

```css

.body {
  background-color: #000000;
}

```

---

# Background
## background-image

Especifica uma imagem a ser usada como plano de fundo de um elemento.

```css

.body {
  background-image: url("imagem.png");
}

```

---

# Background
## background-repeat e background-position

Controla a repetição de uma imagem horizontal e vertical.

```css

.body {
  background-image: url("imagem.png");
  background-repeat: repeat-x; /* repeat|repeat-x|repeat-y|no-repeat */
  background-position: center top; /* x% y% | x y (px)*/
}

```

---

# Background
## background-attachment

Trava ou não a imagem de fundo quando houver rolagem de tela.

```css

.body {
  background-image: url("imagem.png");
  background-repeat: no-repeat;
  background-attachment: fixed; /* fixed|scroll */
}

```

---

# Background
## Declaração compacta

```css

.body {
  background: #ffffff url("imagem.png") no-repeat right top;
}

```

---

# Borders
# style, color, width

```css

p {
  border-style: solid; /* border-top-style */ /* dotted solid double dashed */
  border-width: 25px 10px 4px 35px; /* 25px top, 10px right, 4px bottom and 35px left */
  border-color: red; /* red green blue yellow */
  border-radius: 5px;
}

/* Declaração compacta */

p {
  border: 6px solid green;
}

p {
  border-bottom: 6px solid red;
}

```

---

# Margin

```css

p {
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
}

p {
  margin: 25px 50px 75px 100px;
}

```

---

# Padding

```css

div {
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
}

div {
  padding: 25px 50px 75px 100px;
}

```

---

# Width/Height

```css

div {
  height: 200px;
  width: 50%;
}

```

---

# Text

```css

p {
  background-color: lightgrey;
  color: green;
  text-align: justify;
  text-align-last: left;
  text-decoration:underline; /* none|underline|overline|line-through */
  text-decoration-color: red;
  text-decoration-style: solid;
  text-transform: uppercase;  /* none|capitalize|uppercase|lowercase */
  text-indent: 50px; /* Recuo da primeira linha */
  letter-spacing: 5px;
  word-spacing: 10px;
  line-height: 150%;
  text-shadow: 2px 2px 5px red; /* H V Blur Cor*/
}

```

---

# Font
## Famílias

* **Serif fonts** - têm um pequeno traço nas bordas de cada letra. Eles criam uma sensação de formalidade e elegância.
* **Sans-serif** -  têm linhas limpas (sem pequenos traços anexados). Eles criam um visual moderno e minimalista.
* **Monospace fonts** - aqui todas as letras têm a mesma largura fixa. Eles criam uma aparência mecânica. 
* **Cursive** -  imitam a caligrafia humana.
* **Fantasy** -  são fontes decorativas/divertidas.

---

# Diferença entre fontes Serif e Sans-serif

<img src="https://www.w3schools.com/css/serif.gif" style="display:display; width:400px; margin: 40px auto;">

---

# Fonts

```css

p {
  font-family: Arial, Helvetica, sans-serif;
  font-style: normal; /* normal | italic | oblique */
  font-size: 40px;
}

```

---

# Unidades de Medida

# Absoluta
*  **px** - (pixel)

# Relativas
* **vw, vh** - viewport
* **em** - Relativo ao tamanho da fonte na qual a unidade é declarada
* **rem** - Relativo ao tamanho da fonte do elemento raiz
* **%** - unidade percentual

---


