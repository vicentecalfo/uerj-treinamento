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

---

# Recuperando os valores do campos

<code>App.jsx</code>

```jsx
function App() {
  const enviarFormulario = (event) => {
    event.preventDefault();
    const form = event.target; //<- Pega os elementos do formulário
    const formData = new FormData(form); // <- Pega os dados do formulário
    const formJson = Object.fromEntries(formData); // Transforma em um objeto json os dado
    // const formData = Object.fromEntries(new FormData(form)); <- refatoração
    console.log(formData);
  };
}
```

---

# Fromulário controlado

1. Vamos agora determinar um valor padrão para o campo "nomeCompleto":
   <code>App.jsx</code>

```jsx
<input
  className="input"
  name="nomeCompleto"
  type="text"
  placeholder="Nome Completo"
  value="Vicente Calfo"
/>
```

2. Perceba que não conseguimos mais digitar outro valor;
3. O React trabalha renderizando os componentes e SEMPRE terá o valor que foi inicialmente renderizado, a não ser que controlemos o estado do componente;
4. Para ajustar isso, vamos precisar "escutar" as mudanças de cada campo.

---

# Escutando o campo

Embora o _console_ mostre os dados na interface (HTML) o valor ainda **não** atualiza.
<code>App.jsx</code>

```jsx
const escutandoCampo = (event) => {
  const value = event.target.value;
  console.log(value);
};
//....
<input
  className="input"
  name="nomeCompleto"
  type="text"
  placeholder="Nome Completo"
  value="Vicente Calfo"
  onChange={escutandoCampo}
/>;
```

---

# Controlando o estado dos valores

1. React Hook <code>useState</code>;
   <code>App.jsx</code>

```jsx
import { useState } from "react";
function App() {
  const [valor, setValor] = useState("Vicente Calfo");
  // outros códgios
  const escutandoCampo = (event) => {
    setValor(event.target.value);
  };
  // outros códigos
  <input
    className="input"
    name="nomeCompleto"
    type="text"
    placeholder="Nome Completo"
    value={valor}
    onChange={escutandoCampo}
  />;
}
```

---

# Controlando outros campos

<img src="./cocodigo.png" style="position:absolute; right:0; bottom:0; width:200px;" />

<code>App.jsx</code>

```jsx
const [valorNome, setValorNome] = useState("");
const [valorEmail, setValoEmail] = useState("");

const escutandoCampoDeNome = (event) => {
  setValorNome(event.target.value);
};

const escutandoCampoDeEmail = (event) => {
  setValoEmail(event.target.value);
};
```

---

# Controlando de maneira elegante outros campos

<code>App.jsx</code>

```jsx
const [formValores, setFormValores] = useState({});
const escutandoValorDosCampos = (event) => {
const { name, value } = event.target;
    setFormValores({...formValores, [name]: value})
};
// .....
 <input className="input" name="nomeCompleto" type="text"
    placeholder="Nome Completo" onChange={escutandoValorDosCampos}
    value={formValores.nomeCompleto}/>
<input className="input" name="email" type="email"
    placeholder="Seu melhor e-mail" onChange={escutandoValorDosCampos}
    value={formValores.email}/>

```

---

# Valores padrão

<code>App.jsx</code>

```jsx
const [formValores, setFormValores] = useState({
  nomeCompleto: "Vicente Calfo",
  email: "vicentecalfo@uerj.br",
});
```

---

# Valores padrão - Estado Inicial

<code>App.jsx</code>

```jsx
const [formValores, setFormValores] = useState({
  nomeCompleto: "",
  email: "",
});

// ou

const [formValores, setFormValores] = useState({});
<input
  className="input"
  name="nomeCompleto"
  type="text"
  placeholder="Nome Completo"
  onChange={escutandoValorDosCampos}
  value={formValores.nomeCompleto || ""}
/>;
```

---

# Incluindo o campo <code>select</code>

<code>App.jsx</code>

```jsx
import { estadosBrasileiroSigla } from "./estados";

<div className="columns">
  <div className="column">
    <div className="select">
      <select>
        <option>Escolha o Estado</option>
        {estadosBrasileiroSigla.map((estado, estadoIndex) => (
          <option value={estado.nome} key={estadoIndex}>
            {estado.nome}
          </option>
        ))}
      </select>
    </div>
  </div>
</div>;
```

---

# Ordenado as opções do <code>select</code>

<code>App.jsx</code>

1. <code>npm install underscore</code>
2. <code>import sortBy from 'underscore/modules/sortBy.js'</code>
3.

```jsx
const estadosBrasileiroOpcoes = sortBy(estadosBrasileiroSigla, "nome");
```

4.

```jsx
 {estadosBrasileiroOpcoes.map((estado, estadoIndex) => ( // ....
```

---

# Capturando valores de <code>select</code>

<code>App.jsx</code>

```jsx
<select
  name="estado"
  onChange={escutandoValorDosCampos}
  value={formValores.estado}
>
  <option value="">Escolha o Estado</option>
  {estadosBrasileiroOpcoes.map((estado, estadoIndex) => (
    <option value={estado.nome} key={estadoIndex}>
      {estado.nome}
    </option>
  ))}
</select>
```

---

# Determinando um valor padrão para o <code>select</code>

<code>App.jsx</code>

```jsx
const valoresIniciaisDoFormulario = {
  nomeCompleto: "",
  email: "",
  estado: "RJ",
};
```

---

# Limpando dados do formulário (reset)

<code>App.jsx</code>

```jsx

<div className="column">
    <button className="button" type="submit">
       Enviar
    </button>
</div>
<div className="column">
    <button className="button" type="reset">
      Limpar Formulário
    </button>
</div>

```

---

# Limpando dados do formulário (reset)

```jsx
const limparFormulario = (event) => {
  event.preventDefault();
  setFormValores({ ...valoresIniciaisDoFormulario });
};

// ----
<div className="column">
  <button className="button" type="reset" onClick={limparFormulario}>
    Limpar Formulário
  </button>
</div>;
```

---

# Campos Condicionais -> <code>select</code> "Estado"

```jsx
import estados from "./estados.json";

//-----------------

<select
  name="estado"
  onChange={escutandoValorDosCampos}
  value={formValores.estado}
>
  <option value="">Escolha o Estado</option>
  {estados.map((estado) => (
    <option value={estado.id} key={estado.id}>
      {estado.nome} ({estado.sigla})
    </option>
  ))}
</select>;
```

---

# Campos Condicionais -> <code>select</code> "Municipio"

```jsx
import municipios from "./municipios.json";

const valoresIniciaisDoFormulario = {
  nomeCompleto: "",
  email: "",
  estado: "",
  municipio: "", // <-- acrescentar
};

const buscarMunicipiosFiltradosPorEstado = () => {
  const filtrados = municipios.filter(
    (item) => item.microrregiao.mesorregiao.UF.id === Number(formValores.estado)
  );
  return filtrados;
};

const [municipioFiltrado, setMunicipioFiltrado] = useState(
  buscarMunicipiosFiltradosPorEstado()
);
```

---

# Campos Condicionais -> <code>select</code> "Municipio"

- Será executada quando o estado do componente for atualizado;
- Podemos controlar quando a função dentro do <code>useEffect()</code> será execuutada;
- O segundo parâmetro controla, qual condição de mudança de variável dá gatilho ára execução (se for um array vazio, ela só carregará um vez, quando o componente for inserido em tela);

```jsx
import { useState, useEffect } from "react";
//-----
useEffect(() => {
  setMunicipioFiltrado(buscarMunicipiosFiltradosPorEstado());
}, [formValores.estado]);
```

---

# Campos Condicionais -> <code>select</code> "Municipio"

Desabilitando o campo quando não tiver **estado** selecionado.

```jsx
<select
  name="municipio"
  onChange={escutandoValorDosCampos}
  value={formValores.municipio}
  disabled={!formValores?.estado}
>
  <option value="">Escolha o Município ({municipioFiltrado.length})</option>
  {municipioFiltrado.map((municipio) => (
    <option value={municipio.id} key={municipio.id}>
      {municipio.nome}
    </option>
  ))}
</select>
```

---

# Controlando o estado do botão de envio

```jsx
const botaoDesabilitado = () => {
  const campos = Object.keys(formValores);
  const camposPreenchidos = campos.filter((campo) => formValores[campo] !== "");
  return campos.length > camposPreenchidos.length;
};

const [desabilitaBotao, setDesabilitaBotao] = useState(botaoDesabilitado());

//

useEffect(() => {
  setMunicipioFiltrado(buscarMunicipiosFiltradosPorEstado());
  setDesabilitaBotao(botaoDesabilitado());
}, [formValores]);
```

---

# Controlando o estado do botão de envio

```jsx
<button className="button" type="submit" disabled={desabilitaBotao}>
  Enviar
</button>
```
