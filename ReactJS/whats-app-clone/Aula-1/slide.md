---
marp: true
paginate: true
---

# ReactJS

## Projeto WhatsApp Clone

### Aula 1

Repositório projeto: https://github.com/vicentecalfo/react-fire-chat

Vicente Calfo

<small>vicentecalfo@gmail.com</small>
<small>https://www.linkedin.com/in/vicentecalfo/</small>

---

# Objetivo do Projeto

Criar um chat em tempo real usando o React para o _front-end_ e os serviços do Firebase para _back-end_.

Link de demonstração: https://firechat-two.vercel.app

---

# O que é o React

- Biblioteca JavaScript de código aberto, mantida pelo Facebook, que é usada para criar interfaces de usuário (UI);
- Permite criar componentes reutilizáveis.

---

# O que é o Firebase

- O Firebase é uma plataforma de desenvolvimento de aplicativos móveis e web do Google que oferece uma ampla variedade de serviços em nuvem;
- Serviços inclusos: armazenamento em nuvem, banco de dados em tempo real, autenticação de usuário, hospedagem, mensagens e análise de acessos.

---

# Criação do projeto

```bash

npx create-react-app react-fire-chat-app

```

---

# NPM x NPX

- NPM é usado para gerenciar pacotes e dependências em um projeto Node.js;
- NPX é usado para executar pacotes sem instalá-los globalmente no sistema;
- NPX é um utilitário que vem com o NPM a partir da versão 5.2.0.

---

# Estrutura Inicial - App.js

```js
import "./App.css";

function App() {
  return (
    <div className="App">
      <header>
        <div className="logo">
          <div>
            <img src="/logo.png" />
          </div>
          <div>
            <h1>Firechat</h1>
            <h2>React Firebase Chat</h2>
          </div>
        </div>
        <div className="user"></div>
      </header>
    </div>
  );
}

export default App;
```

---

# className

A razão pela qual se usa **className** em vez de **class** é que a palavra "class" é uma palavra-chave reservada em JavaScript, o que significa que já possui um significado definido na linguagem e, portanto, não pode ser usada como nome de um atributo em uma tag HTML.

---

# CSS Modules - App.css

```css
.App {
  display: grid;
  grid-template-rows: 60px 1fr;
  height: 100vh;
  width: 100vw;
}

.App header {
  background-color: #f0f2f5;
  display: grid;
  grid-template-columns: auto 1fr;
  align-items: center;
  height: 60px;
}

.App header .logo {
  display: grid;
  align-items: center;
  justify-content: center;
  grid-template-columns: 60px 1fr;
}

.App header .logo img {
  height: 50px;
}

.App header .logo h1 {
  font-size: 15px;
  margin: 0;
}

.App header .logo h2 {
  font-size: 12px;
  margin: 0;
  font-weight: 400;
}

.App header .user {
  display: flex;
  flex-direction: row-reverse;
}
```

---

# Criando o Primeiro Componente - SignIn.jsx

```jsx
import "./SignIn.css";

function SignIn({ auth }) {
  const signInWithGoogle = () => {
    console.log(auth);
  };
  return (
    <div className="sign-in">
      <button onClick={signInWithGoogle}>
        <div>
          <img src="/google.png" alt="Google Login" />
        </div>
        <div>Sign in with Google</div>
      </button>
    </div>
  );
}

export default SignIn;
```

---

# CSS - SignIn.css

```css
.sign-in {
  display: grid;
  height: calc(100vh - 60px);
  background-color: #fff;
  align-items: center;
  justify-content: center;
}

.sign-in button {
  display: grid;
  grid-template-columns: 60px 1fr;
  outline: none;
  align-items: center;
  border: none;
  padding: 10px 10px 10px 5px;
  border-radius: 5px;
  background-color: #306ccf;
  cursor: pointer;
  color: #fff;
}

.sign-in button img {
  width: 40px;
}
```

---

# Atenção

Em ReactJS, os componentes são essencialmente funções JavaScript regulares, no entanto, é necessário que eles sejam escritos com a primeira letra maiúscula para que possam ser reconhecidos pelo compilador e, assim, renderizados corretamente na aplicação.

---

# Props

```jsx
// Usando o componente
<SignIn auth={auth} />
```

```js
// Código do Componente
function SignIn({ auth }) {
  const signInWithGoogle = () => {
    console.log(auth);
  };
  return (
    <div className="sign-in">
      <button onClick={signInWithGoogle}>Sign in with Google</button>
    </div>
  );
}
```

---

# Componente - Sala de chat - ChatRoom

```jsx
function ChatRoom() {
	return (
		<>
			<div className='chat-room'>
				<main>
                    <!-- mensagens -->
				</main>
				<div className='form'>
					<form>
						<input
							placeholder='Vamos conversar'
							type='text'
						/>

						<button type='submit'>
							<img src='./sent.png' alt="Botão de enviar"/>
						</button>
					</form>
				</div>
			</div>
		</>
	)
}

export default ChatRoom

```

---

# CSS - ChatRoom.css - 1/4

```css
.chat-room {
  display: grid;
  height: calc(100vh - 60px);
  align-items: center;
  justify-content: center;
  grid-template-rows: 1fr 60px;
  position: relative;
}

.chat-room::before {
  content: " ";
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0.6;
  background-image: url("https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png");
}
```

---

# CSS - ChatRoom.css - 2/4

```css
main {
  height: calc(100vh - 120px);
  display: block;
  overflow: auto;
  width: 100vw;
  padding: 30px;
  position: relative;
}

main::-webkit-scrollbar {
  width: 0.55rem;
}

main::-webkit-scrollbar-track {
  background: #3333;
}

main::-webkit-scrollbar-thumb {
  background: #ffca27;
}
```

---

# CSS - ChatRoom.css - 3/4

```css
.form {
  background-color: #f0f2f5;
  display: grid;
  height: 60px;
  align-items: center;
  position: relative;
  padding: 0 30px;
}

form {
  display: grid;
  grid-template-columns: 1fr 60px;
  grid-gap: 20px;
}

form input[type="text"] {
  display: flex;
  border: 1px solid #ccc;
  border-radius: 5px;
  height: 40px;
  padding: 0 20px;
  outline: none;
}
```

---

# CSS - ChatRoom.css - 4/4

```css
form button[type="submit"] {
  display: grid;
  width: 40px;
  height: 40px;
  background: #ffca27;
  border-radius: 50%;
  border: none;
  outline: none;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

form button[type="submit"] img {
  display: block;
  width: 25px;
}
```

---

# Mensagens - ChatMessage.jsx

```jsx
import "./ChatMessage.css";

function ChatMessage(props) {
  const messageClass = "sent"; //received

  return (
    <>
      <div className={`message ${messageClass}`}>
        <div className="bubble">
          <img
            className="avatar"
            src="https://api.dicebear.com/6.x/bottts/png"
            alt="Avatar"
          />
          <div className="display-message">
            <strong>Vicente Calfo</strong>
            <p>Esta é nossa mensagem de placeholder</p>
            <small>28/04/2003</small>
          </div>
        </div>
      </div>
    </>
  );
}

export default ChatMessage;
```

---

# CSS - ChatMessage.css - 1/3

```css
.message {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}
.message .display-message {
  display: grid;
  grid-template-rows: auto 1fr auto;
}
.message .display-message strong {
  display: block;
  font-size: 12px;
  color: rgba(0, 0, 0, 0.5);
}

.message .display-message p {
  padding: 0;
  margin: 0;
  font-size: 14px;
}
```

---

# CSS - ChatMessage.css - 2/3

```css
.message .display-message small {
  font-size: 10px;
  text-align: right;
  margin-top: 5px;
  color: rgba(0, 0, 0, 0.5);
}

.bubble {
  display: flex;
  border-radius: 10px;
  align-items: flex-start;
  padding: 20px;
  max-width: 450px;
}

.avatar {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  margin: 2px 15px 2px 5px;
  padding: 5px;
  background-color: rgba(255, 255, 255, 0.7);
}
```

---

# CSS - ChatMessage.css - 3/3

```css
.sent {
  flex-direction: row-reverse;
}
.sent .bubble {
  flex-direction: row-reverse;
  background-color: rgba(0, 0, 0, 0.05);
  border-bottom-right-radius: 0px;
}
.sent p {
  align-self: flex-end;
}

.received .bubble {
  background-color: rgba(255, 211, 50, 0.5);
  border-bottom-left-radius: 0px;
}
```

---

# Incluíndo na sala de chat

```jsx
import ChatMessage from "./ChatMessage";
// ....
return (
  <>
    <div className="chat-room">
      <main>
        <ChatMessage />
      </main>
      <div className="form">// form</div>
    </div>
  </>
);
```

---

# Configuração do Firebase - Criar Projeto

<img src="fb-1.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-2.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-3.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-4.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-5.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-6.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-7.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-8.png" />

---

# Configuração do Firebase - Criar Projeto

<img src="fb-9.png" />

---

# Configuração do Firebase - Autenticação

<img src="fb-10.png" />

---

# Configuração do Firebase - Autenticação

<img src="fb-11.png" />

---

# Configuração do Firebase - Autenticação

<img src="fb-12.png" />

---

# Configuração do Firebase - Autenticação

<img src="fb-13.png" />

---

# Instalando o SDK do Firebase

```bash

npm install firebase

```

---

# Inserindo as configurações no React - .env

**Criar um arquivo <code>.env</code>**

```yaml
REACT_APP_API_KEY = ""
REACT_APP_AUTH_DOMAIN = ""
REACT_APP_PROJECT_ID = ""
REACT_APP_STORAGE_BUCKET = ""
REACT_APP_MESSAGING_SENDER_ID = ""
REACT_APP_APP_ID = ""
REACT_APP_MEASUREMENT_ID = ""
```

---

# Inserindo as configurações no React - .App.js

```jsx
import { initializeApp } from "firebase/app";
import { getAuth } from "firebase/auth";
import { getFirestore } from "firebase/firestore";

const firebaseConfig = {
  apiKey: process.env.REACT_APP_API_KEY,
  authDomain: process.env.REACT_APP_AUTH_DOMAIN,
  projectId: process.env.REACT_APP_PROJECT_ID,
  storageBucket: process.env.REACT_APP_STORAGE_BUCKET,
  messagingSenderId: process.env.REACT_APP_MESSAGING_SENDER_ID,
  appId: process.env.REACT_APP_APP_ID,
  measurementId: process.env.REACT_APP_MEASUREMENT_ID,
};

const firebaseApp = initializeApp(firebaseConfig);
const auth = getAuth(firebaseApp);
const firestore = getFirestore(firebaseApp);

function App() {}

```
