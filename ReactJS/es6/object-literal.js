const pegarNomeDoPapelDoUsuario = (codigoDoPapel) => {

    switch(codigoDoPapel){
        case 1 :
            return `Administrador`
        case 2 :
            return `Visualizador`
        case 3 :
            return `Visitante`
        default:
            return `Visitante`
    }

}

const pegarNomeDoPapelDoUsuario2 = (codigoDoPapel) => {
    const papeis = {
        1: `Administrador`,
        2: `Visualizador`,
        3: `Visitante`
    }
    return papeis[codigoDoPapel] || papeis['3']
}


const papelDoUsuario = pegarNomeDoPapelDoUsuario(7)

const papelDoUsuario2 = pegarNomeDoPapelDoUsuario2(2)

console.log(papelDoUsuario)

console.log(papelDoUsuario2)