const data = {
  valor: 20,
  prime: true,
};

/**
 * Se for prime não cobra frete nunca
 * Se for uma compra de 90 reais ou mais não cobra frete
 */

const naoCobraFrete = () => console.log('Frete grátis')
const cobraFrete = () => console.log('Cobra frete')

const verificaFrete = ({ valor, prime }) => {
  const valorInvalido = !(typeof valor === "number");

  if (valorInvalido) {
    console.log("Valor inválido.");
    return;
  }

  if (prime || valor >= 90) {
    naoCobraFrete();
    return;
  }

  cobraFrete()
};

verificaFrete(data);
