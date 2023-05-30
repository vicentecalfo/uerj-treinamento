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

---

# Refatorando usando API nas opções

```jsx
const [regioes, setRegioes] = useState([]);
const [estadoFiltrado, setEstadoFiltrado] = useState([]);
const [municipioFiltrado, setMunicipioFiltrado] = useState([]);

//---------------

useEffect(() => {
  fetch(
    "https://servicodados.ibge.gov.br/api/v1/localidades/regioes?orderBy=nome"
  )
    .then((response) => response.json())
    .then((data) => {
      setRegioes(data);
    });
}, []);
```

---

# Refatorando usando API nas opções - <code>select</code> - Regiões

```jsx
<select
  name="regiao"
  onChange={escutandoValorDosCampos}
  value={formValores.regiao}
>
  <option value="">Escolha a Região</option>
  {regioes.map((regiao) => (
    <option value={regiao.id} key={regiao.id}>
      {regiao.nome}
    </option>
  ))}
</select>
```

---

# Refatorando usando API nas opções - <code>select</code> - Estados

```jsx
<select
  name="estado"
  onChange={escutandoValorDosCampos}
  value={formValores.estado}
  disabled={estadoFiltrado.length === 0}
>
  <option value="">Escolha o Estado ({estadoFiltrado.length})</option>
  {estadoFiltrado.map((estado) => (
    <option value={estado.id} key={estado.id}>
      {estado.nome} ({estado.sigla})
    </option>
  ))}
</select>
```

---

# Refatorando usando API nas opções - <code>select</code> - Municípios

```jsx
<select
  name="municipio"
  onChange={escutandoValorDosCampos}
  value={formValores.municipio}
  disabled={municipioFiltrado.length === 0}
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

# Refatorando usando API nas opções - Buscando os Estados

```jsx
const bucarEstadosFiltradosPorRegiao = () => {
  return new Promise((resolve, reject) => {
    if (formValores.regiao === "") resolve([]);
    fetch(
      `https://servicodados.ibge.gov.br/api/v1/localidades/regioes/${formValores.regiao}/estados`
    )
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        resolve(data);
      });
  });
};
```

---

# Refatorando usando API nas opções - Buscando os Municípios

```jsx
const buscarMunicipiosFiltradosPorEstado = () => {
  return new Promise((resolve, reject) => {
    if (formValores.regiao === "") resolve([]);
    fetch(
      `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${formValores.estado}/municipios`
    )
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        resolve(data);
      });
  });
};
```

---

# Controlando os efeitos colaterais -> Região/Estado

```jsx
useEffect(() => {
  bucarEstadosFiltradosPorRegiao().then((estados) => {
    setEstadoFiltrado(estados);
    setMunicipioFiltrado([]);
  });
}, [formValores.regiao]);
```

---

# Controlando os efeitos colaterais -> Esatdo/Municípios

```jsx
useEffect(() => {
  buscarMunicipiosFiltradosPorEstado().then((municipios) =>
    setMunicipioFiltrado(municipios)
  );
}, [formValores.estado]);
```

---

# Controlando o botão de envio

```jsx
useEffect(() => setDesabilitaBotao(botaoDesabilitado()), [formValores]);
```

---

# Refatorando para ASYNC/AWAIT

```js
useEffect(() => {
  const fetchData = async () => {
    const response = await fetch(
      "https://servicodados.ibge.gov.br/api/v1/localidades/regioes?orderBy=nome"
    );
    const data = await response.json();
    setRegioes(data);
  };
  fetchData();
}, []);
```

---

# Refatorando para ASYNC/AWAIT -> IIEF

_Immediately-Invoked Function Expression_
Função Auto-Invocável

```js
useEffect(() => {
  (async () => {
    const response = await fetch(
      "https://servicodados.ibge.gov.br/api/v1/localidades/regioes?orderBy=nome"
    );
    const data = await response.json();
    setRegioes(data);
  })();
}, []);
```

---

# Validação de Campos

```jsx
  const verificaValidacao = () => {
    const erroDosCampos = {
      nomeCompleto: {
        min: {
          check: (value) => value.length >= 6,
          message: "O nome está muito curto",
        },
        max: {
          check: (value) => value.length <= 12,
          message: "O nome está muito longo",
        },
      },
      email: {
        valido: {
          check: (value) => value.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i),
          message: "Não parece um e-mail válido",
        },
      },
      regiao: {
        valido: {
          check: (value) => value !== "",
          message: "Campo obrigatório.",
        },
      },
      estado: {
        valido: {
          check: (value) => value !== "",
          message: "Campo obrigatório.",
        },
      },
      municipio: {
        valido: {
          check: (value) => value !== "",
          message: "Campo obrigatório.",
        },
      },
    };
// continua
  };

  ---
```

---

# Validação de Campos

```jsx
const verificaValidacao = () => {
  // codigo anterior
  const out = {};
  const campos = Object.keys(erroDosCampos);
  campos.forEach((campo) => {
    const validacoes = Object.keys(erroDosCampos[campo]);
    for (let i = 0; i < validacoes.length; i++) {
      const naoValido = !erroDosCampos[campo][validacoes[i]].check(
        formValores[campo]
      );
      if (naoValido) {
        out[campo] = erroDosCampos[campo][validacoes[i]].message;
        break;
      }
    }
  });
  out.submitDisabled = Object.keys(out).length > 0;
  return out;
};
```

---

# Validação de Campos

```jsx
useEffect(() => {
  //setDesabilitaBotao(botaoDesabilitado());
  setvalidacaoForm(verificaValidacao());
}, [formValores]);

function CampoErro({ campo }) {
  const hasError = validacaoForm.hasOwnProperty(campo);
  if (!hasError) return "";
  return (
    <span className="has-text-danger is-size-7 p-2">
      {validacaoForm[campo]}
    </span>
  );
}
```

---

# Validação de Campos

```jsx
//...
<input
  className="input"
  name="nomeCompleto"
  type="text"
  placeholder="Nome Completo"
  onChange={escutandoValorDosCampos}
  value={formValores.nomeCompleto}/>


  <CampoErro campo="nomeCompleto"/>
//...
```

---

# Validação de Campos

```jsx
//const [desabilitaBotao, setDesabilitaBotao] = useState(botaoDesabilitado());
const [camposMexidos, setCamposMexidos] = useState({
  nomeCompleto: false,
  email: false,
  regiao: false,
  estado: false,
  municipio: false,
});
```

---

# Validação de Campos

```jsx
function CampoErro({ campo }) {
  const hasError = validacaoForm.hasOwnProperty(campo);
  const naoFoiMexido = !camposMexidos[campo];
  if (!hasError || naoFoiMexido) return "";
  return (
    <span className="has-text-danger is-size-7 p-2">
      {validacaoForm[campo]}
    </span>
  );
}
```

---

# Organizando as coisas

Criar pastas dentro de "src":

- components
- services
- utils

---

# Criando os arquivos

- src -> appConfigFormValidation.js
- src/utils -> validationFormFields.js
- src/services -> ibge.service.js
- src/components/form
  - FieldError.jsx
  - Input.jsx
  - Select.jsx
- src/components/layout
  - Columns.jsx
  - Section.jsx

---

# Criando os componentes de <code>layout</code>

Marcação desejada

```jsx
<Section>
  <Columns>
    <Column>... conteudo</Column>
  </Columns>
</Section>
```

---

# Criando os componentes de <code>layout -> Columns</code>

<code>src/components/layout/Columns.jsx</code>

```jsx
function Columns({ children }) {
  return <div className="columns">{children}</div>;
}
function Column({ children }) {
  return <div className="column">{children}</div>;
}
export { Columns, Column };
```

---

# Criando os componentes de <code>layout -> Section</code>

<code>src/components/layout/Section.jsx</code>

```jsx
function Section({ children }) {
  return (
    <>
      <section className="section">
        <div className="container">{children}</div>
      </section>
    </>
  );
}

export default Section;
```

---

# Recomeçando o App.jsx

```jsx
import "bulma/css/bulma.min.css";
import "./App.css";
import { Columns, Column } from "./components/layout/Columns";
import Section from "./components/layout/Section";

function App() {
  return (
    <>
      <Section>
        <h1 className="title">Formulário de Incrição</h1>
        <p className="subtitle">Treinamento de React</p>
      </Section>
      <Section>
        <form></form>
      </Section>
    </>
  );
}
```

---

# Preparando a "grid" -> <code>App.jsx</code>

```jsx
// dentro da tag form

<Columns>
  <Column> nome</Column>
  <Column> email</Column>
</Columns>
<Columns>
  <Column> região</Column>
  <Column> estados</Column>
  <Column> município</Column>
</Columns>
<Columns>
  <Column> botões</Column>
</Columns>
```

---

# Preparando os "estados" da aplicação -> <code>App.jsx</code>

```jsx
// fora da função App
const valoresIniciaisDoFormulario = {
  nomeCompleto: "",
  email: "",
  regiao: "",
  estado: "",
  municipio: "",
};

// dentro da função App

import { useState, useEffect, useMemo } from "react"; // mais na frente vamos usar o useEffect e o useMemo

const [formValores, setFormValores] = useState(valoresIniciaisDoFormulario);
const [regioes, setRegioes] = useState([]);
const [estadoFiltrado, setEstadoFiltrado] = useState([]);
const [municipioFiltrado, setMunicipioFiltrado] = useState([]);
```

---

# Controlando os campos -> <code>App.jsx</code>

```jsx
// dentro da função App

const enviarFormulario = (event) => {
  event.preventDefault();
  const form = event.target;
  const formData = Object.fromEntries(new FormData(form));
  console.log(formData);
};

const limparFormulario = (event) => {
  event.preventDefault();
  setFormValores({ ...valoresIniciaisDoFormulario });
};

const escutandoValorDosCampos = (event) => {
  const { name, value } = event.target;
  setFormValores({ ...formValores, [name]: value });
};

// Na marcação HTML atualizar o form
<form onSubmit={enviarFormulario}>...as colunas (columns)</form>;
```

---

# Incluindo os botões do formulário -> <code>App.jsx</code>

```jsx

// dentro da função App no HTML na coluna dos botões

<button
  className="button mr-4 is-primary"
  type="submit">
  Enviar
</button>
<button
  className="button"
  type="reset"
  onClick={limparFormulario}>
  Limpar Formulário
</button>

```

---

# Criando o acesso a API -> services/ibge.service.js

```js
class IBGEService {
  #baseURL;
  #orderBy;
  constructor() {
    this.#baseURL = "https://servicodados.ibge.gov.br/api/v1/localidades";
    this.#orderBy = "nome";
  }
  async regioes() {
    const response = await fetch(
      `${this.#baseURL}/regioes?orderBy=${this.#orderBy}`
    );
    const data = await response.json();
    return data;
  }
  async estadosPorRegioes(regiaoId) {
    if (regiaoId === "") return [];
    const response = await fetch(
      `${this.#baseURL}/regioes/${regiaoId}/estados?orderBy=${this.#orderBy}`
    );
    const data = await response.json();
    return data;
  }
  async municipiosPorEstados(estadoId) {
    if (estadoId === "") return [];
    const response = await fetch(
      `${this.#baseURL}/estados/${estadoId}/municipios?orderBy=${this.#orderBy}`
    );
    const data = await response.json();
    return data;
  }
}
export default IBGEService;
```

---

# Usando o IBGE service -> <code>App.jsx</code>

```jsx
// dentro da função App

const ibgeService = useMemo(() => new IBGEService(), []);
```

O useMemo é um hook do React que otimiza o desempenho de componentes funcionais, evitando recálculos desnecessários. Ele memoriza o resultado de uma função e retorna o valor memorizado quando as dependências especificadas permanecem as mesmas. Isso ajuda a evitar a execução repetida de cálculos e a melhorar a eficiência do componente.

---

# Usando o IBGE service -> <code>App.jsx</code>

```jsx
// dentro da função App

useEffect(() => {
  (async () => {
    const data = await ibgeService.regioes();
    setRegioes(data);
  })();
}, [ibgeService]);
```

---

# Usando o IBGE service -> <code>App.jsx</code>

```jsx
// dentro da função App

useEffect(() => {
  (async () => {
    setEstadoFiltrado(await ibgeService.estadosPorRegioes(formValores.regiao));
    setMunicipioFiltrado([]);
  })();
}, [formValores.regiao, ibgeService]);

useEffect(() => {
  (async () => {
    setMunicipioFiltrado(
      await ibgeService.municipiosPorEstados(formValores.estado)
    );
  })();
}, [formValores.estado, ibgeService]);
```

---

# Criando as validações de campo

src/util/validationFormFields.js

```js
function validationFormFields(config, formValues) {
  const out = {};
  Object.keys(config).forEach((field) => {
    const validators = Object.keys(config[field]);
    for (let i = 0; i < validators.length; i++) {
      const notValid = !config[field][validators[i]].check(formValues[field]);
      if (notValid) {
        out[field] = config[field][validators[i]].message;
        break;
      }
    }
  });
  out.submitDisabled = Object.keys(out).length > 0;
  return out;
}

export default validationFormFields;
```

---

# Criando o arquivo de configuração do formulário

src/appConfigFormValidation.js

```js
const config = {
  nomeCompleto: {
    min: {
      check: (value) => value.length >= 6,
      message: "O nome está muito curto",
    },
    max: {
      check: (value) => value.length <= 12,
      message: "O nome está muito longo",
    },
  },
  email: {
    valido: {
      check: (value) => value.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i),
      message: "Não parece um e-mail válido",
    },
  },
  regiao: {
    valido: {
      check: (value) => value !== "",
      message: "Campo obrigatório.",
    },
  },
  estado: {
    valido: {
      check: (value) => value !== "",
      message: "Campo obrigatório.",
    },
  },
  municipio: {
    valido: {
      check: (value) => value !== "",
      message: "Campo obrigatório.",
    },
  },
};
export default config;
```

---

# Atualizando o App.jsx

```jsx
//fora da função App
import config from "./appConfigFormValidation";

//dentro da função App

const [validacaoForm, setvalidacaoForm] = useState(
  validationFormFields(config, formValores)
);

useEffect(
  () => setvalidacaoForm(validationFormFields(config, formValores)),
  [formValores]
);
```

---

# Criando os componentes do formulário -> FieldError.jsx

```jsx
function FieldError({ fieldName, validation, untouched }) {
  const hasError = validation.hasOwnProperty(fieldName);
  if (!hasError || untouched) return "";
  return (
    <span className="has-text-danger is-size-7 p-2">
      {validation[fieldName]}
    </span>
  );
}

export default FieldError;
```

---

# Criando os componentes do formulário -> Input.jsx

```jsx
import { useState } from "react";
import FieldError from "./FieldError";

function Input({
  name,
  type = "text",
  placeholder = "",
  onChange,
  value,
  label,
  validation,
}) {
  const [untouched, setUntouched] = useState(true);
  const handleOnChange = (event) => {
    setUntouched(false);
    onChange(event);
  };
  return (
    <>
      <label>{label}</label>
      <input
        className="input"
        name={name}
        type={type}
        placeholder={placeholder}
        onChange={handleOnChange}
        value={value}
      />
      <FieldError
        fieldName={name}
        validation={validation}
        untouched={untouched}
      />
    </>
  );
}

export default Input;
```

---

# Criando os componentes do formulário -> Select.jsx

```jsx
import { useState } from "react";
import FieldError from "./FieldError";

function Select({
  name,
  onChange,
  value,
  label,
  validation,
  disabled = false,
  options = [],
  optionMap,
  counter = true,
}) {
  const [untouched, setUntouched] = useState(true);
  const handleOnChange = (event) => {
    setUntouched(false);
    onChange(event);
  };
  return (
    <>
      <div className="select is-fullwidth">
        <select
          name={name}
          onChange={handleOnChange}
          value={value}
          disabled={disabled}
        >
          <option value="">
            {label} {counter ? `(${options.length})` : ""}
          </option>
          {options.map((option, index) => (
            <option value={option[optionMap.value]} key={index}>
              {option[optionMap.label]}
            </option>
          ))}
        </select>
        <FieldError
          fieldName={name}
          validation={validation}
          untouched={untouched}
        />
      </div>
    </>
  );
}

export default Select;
```

---

# Usando os componentes de formulário -> App.jsx

```jsx
//fora da função App
import Input from "./components/form/Input";
import Select from "./components/form/Select";
```

---

# Usando os componentes de formulário -> App.jsx -> Input -> nomeCompleto

```jsx
<Input
  name="nomeCompleto"
  label="Nome Completo"
  placeholder="Nome Completo"
  onChange={escutandoValorDosCampos}
  value={formValores.nomeCompleto}
  validation={validacaoForm}
/>
```

---

# Usando os componentes de formulário -> App.jsx -> Input -> email

```jsx
<Input
  name="email"
  label="E-mail"
  placeholder="Informe seu melhor e-mail"
  onChange={escutandoValorDosCampos}
  value={formValores.email}
  validation={validacaoForm}
/>
```

---

# Usando os componentes de formulário -> App.jsx -> Select -> regiao

```jsx
<Select
  name="regiao"
  label="Escolha uma região"
  onChange={escutandoValorDosCampos}
  value={formValores.regiao}
  validation={validacaoForm}
  options={regioes}
  optionMap={{
    value: "id",
    label: "nome",
  }}
/>
```

---

# Usando os componentes de formulário -> App.jsx -> Select -> estado

```jsx
<Select
  name="estado"
  label="Escolha um estado"
  onChange={escutandoValorDosCampos}
  value={formValores.estado}
  validation={validacaoForm}
  options={estadoFiltrado}
  optionMap={{
    value: "id",
    label: "nome",
  }}
  disabled={estadoFiltrado.length === 0}
/>
```

---

# Usando os componentes de formulário -> App.jsx -> Select -> municipio

```jsx
<Select
  name="municipio"
  label="Escolha um município"
  onChange={escutandoValorDosCampos}
  value={formValores.municipio}
  validation={validacaoForm}
  options={municipioFiltrado}
  optionMap={{
    value: "id",
    label: "nome",
  }}
  disabled={municipioFiltrado.length === 0}
/>
```

---

# Controlando o visual do botão submit

```jsx
<button
  className="button mr-4 is-primary"
  type="submit"
  disabled={validacaoForm.submitDisabled} // incluir
>
  Enviar
</button>
```

---

# Fazendo a "limpa"

Remover os arquivos:

* estados.js
* esatdos.json
* municipios.json 