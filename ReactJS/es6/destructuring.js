// Objetos

const aluno = {
    nome: "Matheus",
    idade: 25,
    email: "matheusesuasmaquinas@gmail.com",
};

console.log(aluno.nome)
console.log(aluno['idade'])
console.log(aluno.email)

const { nome, idade, email } = aluno

console.log(nome)
console.log(idade)
console.log(email)

// ---------------------------------------------------------------------------------------------------------------------

// const aluno2 = {...aluno}

// console.log(aluno2)

// ---------------------------------------------------------------------------------------------------------------------

// const { nome, ...restante } = aluno

// console.log(nome)
// console.log(restante)

// ---------------------------------------------------------------------------------------------------------------------

// function salvarDados(usuarioAtivo, idDoUsuario, privilegios) {
//     console.log(usuarioAtivo)
//     console.log(idDoUsuario)
//     console.log(privilegios)
// }

// salvarDados(true, 2, ['view', 'edit'])

// const dados = {
//     usuarioAtivo: true,
//     idDoUsuario: 2,
//     privilegios: ["view", "edit"],
// }

// function salvarDados({ usuarioAtivo, idDoUsuario, privilegios }) {
//     console.log(usuarioAtivo)
//     console.log(idDoUsuario)
//     console.log(privilegios)
// }

// salvarDados(dados)

//-----------------------------------------------------------------------------------------------------------------------

// Array

// const aluno = ["Matheus", 25, "email"]

// const [nome, idade, email] = aluno;

// console.log(nome)
// console.log(idade)
// console.log(email)

// ---------------------------------------------------------------------------------------------------------------------

// const aluno2 = [...aluno]

// console.log(aluno2)

// ---------------------------------------------------------------------------------------------------------------------

// const aluno = ["Matheus", 25, "email"]

// const [nome, ...restante] = aluno;

// console.log(nome)
// console.log(restante)
