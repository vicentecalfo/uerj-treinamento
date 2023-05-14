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
4. Renomear o arquivo<code> App.js</code> > <code>App.jsx</code>;

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
