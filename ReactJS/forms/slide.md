---
marp: true
paginate: true
---

# ReactJS

## Formulários

Repositório projeto: https://github.com/vicentecalfo/uerj-react-form

_Vicente Calfo_
<small>vicentecalfo@gmail.com</small>
<small>https://www.linkedin.com/in/vicentecalfo/</small>
<small>https://github.com/vicentecalfo</small>

---

# Objetivo

Aprimorar habilidades em desenvolvimento React através da criação de um formulário interativo e funcional.

1. Coletar e validar dados do usuário de forma eficiente;
2. Criar campos dinâmicos e condicionais;
3. Validar campos com _React Hooks_.

---

# Criar o projeto

```bash

npx create-react-app form

```

---

# Preparando o projeto

1. Entrar na pasta <code>form</code>;
2. Lançar o projeto <code>npm start</code>;
3. Limpar o arquivo <code>App.js</code>;
4. Renomear o arquivo <code>App.js</code> > <code>App.jsx</code>;
5. Limpar o arquivo <code>App.css</code>.

```jsx
//App.jsx
function App() {
  return <h1>Formulários</h1>;
}
export default App;
```

---

# Preparando os estilos

https://bulma.io/

```bash

npm install bulma

```

```jsx
import "bulma/css/bulma.min.css";
function App() {
  return <h1>Formulários</h1>;
}
export default App;
```

---

# Testando se o Bulma está configurado

```jsx
import 'bulma/css/bulma.min.css';

function App() {
  return (
    <h1>Formulários</h1>
    <button className="button is-primary">Primary</button>
  );
}
export default App;

```

---

# React "Fragment"

1. O método <code>render()</code> só pode retornar 1 elemento no nível primário;
2. Para retornar mais de 1 elemento devemos envolvê-los em um outro elemento (comumente uma <code>div</code>);
3. Mas sabemos que é uma má prática "inflar" nosso HTML com marcações desnecessárias, por isso o React disponibiliza o <code>React Fragment</code>;
4. Agora podemos encapsular elementos filhos sem a obrigação de adicionar uma elemento HTML sem nenhum valor semântico;

---

# Aplicando o React Fragment

```jsx
import "bulma/css/bulma.min.css";

function App() {
  return (
    <>
      <h1>Formulários</h1>
      <button className="button is-primary">Primary</button>
    </>
  );
}
export default App;
```

---

# Marcação HTML inicial

```jsx
import "bulma/css/bulma.min.css";
function App() {
  return (
    <>
      <section className="section">
        <div className="container">
          <h1 className="title">Formulário de Incrição</h1>
          <p className="subtitle">Treinamento de React</p>
        </div>
      </section>
      <section className="section">
        <div className="container">
          <form>... aqui nós vamos colocar os campos do formulário</form>
        </div>
      </section>
    </>
  );
}
export default App;
```

---

# Incluindo os primeiros campos de formulário

```jsx
// arquivo App.jsx > dentro da tag <form>

<div className="columns">
  <div className="column">
    <label>Nome Completo</label>
    <input className="input" type="text" placeholder="Nome Completo" name="nomeCompleto"/>
  </div>
  <div className="column">
    <label>E-mail</label>
    <input className="input" type="email" placeholder="Seu melhor e-mail" name="email"/>
  </div>
</div>
<div className="columns">
  <div className="column">
    <button className="button">Enviar</button>
  </div>
</div>
```

---

# Ajustando os labels

<code>App.jsx</code>

```jsx
import "./App.css";
```

<code>App.css</code>

```css
label {
  padding: 10px 0px;
  display: block;
}
```

---

# Enviando Formulário

<code>App.jsx</code>

```jsx
function App() {
  const enviarFormulario = (event) => {
    console.log("Enviar formulário");
  };

  return (
    <>
      ... codigo
      <form onSubmit={enviarFormulario}>...</form>
      ... codigo
    </>
  );
}
```

---

# Testando o Envio

## Problema a página está "recarregando" e nada aparece no console!

1. É preciso determinar o _type_ do elemento _button_;
2. O _type_ para o envio de formulário é o _submit_;
3. Procurar o elemento _button_ e acrescentar o \*type="submit";

```jsx
//App.js
<button className="button" type="submit">
  Enviar
</button>
```

4. Agora temos outro problema: perceba a URL do navegador (método GET).
   <code>http://localhost:3000/?nomeCompleto=&email=</code>

---

# Evitando o comportamento padrão

Como iremos enviar os dados via uma API, precisamos "instruir" o formulário a não se comportar de maneira padrão.
<code>App.jsx</code>

```jsx
function App() {
  const enviarFormulario = (event) => {
    event.preventDefault(); // <- evitará o carregamento da página
    console.log("Enviar formulário");
  };
}
```
