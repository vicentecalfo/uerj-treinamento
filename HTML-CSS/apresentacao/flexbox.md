---
marp: true
paginate: true
---

# Treinamento Flexbox

Vicente Calfo

<small>vicentecalfo@gmail.com</small>

---

# Apresentação

O módulo de layout de caixa flexível torna mais fácil projetar uma estrutura de layout responsiva flexível sem usar flutuação ou posicionamento.

---

# Propriedades do Pai (flex container)

# display

```css

    .container {
        display: flex; /* or inline-flex */
    }

```

---

# Propriedades do Pai (flex container)

# flex-direction

```css

    .container {
        flex-direction: row; /*row | row-reverse | column | column-reverse*/
    }

```

* **row** (padrão - *default*): da esquerda para a direita
* **row-reverse**: da direita para a esquerda
* **column**: da esquerda para a direita, mas do topo para parte inferior
* **column-reverse**: da direita para a esquerda, mas da parte inferior para o topo

---

# Propriedades do Pai (flex container)

# flex-wrap

```css

    .container {
        flex-direction: row; /*row | row-reverse | column | column-reverse*/
    }

```

* **nowrap** (padrão - *default*): todos os itens ficaram em uma linha
* **wrap**: os itens serão quebrados em múltiplas linhas do topo para parte inferior
* **wrap-reverse**: os itens serão quebrados em múltiplas linhas da parte inferior para topo

---

# Propriedades do Pai (flex container)

# flex-flow

Este é a declaração compacta das propriedades flex-direction e flex-wrap.

```css

    .container {
        flex-flow: column wrap;
    }

```

---

# Propriedades do Pai (flex container)

# justify-content

```css

    .container {
        justify-content: flex-start; /*flex-start | flex-end | center |
        space-between | space-around | space-evenly |
        start | end | left | right*/
    }

```

---

<img src="https://css-tricks.com/wp-content/uploads/2018/10/justify-content.svg">

<small style="font-size:16px;">* https://css-tricks.com/snippets/css/a-guide-to-flexbox/</small>

---

# Propriedades do Pai (flex container)
### justify-content

* **flex-start** (padrão - *default*): os itens serão organizados pelo ínicio respeitando a flex-direction
* **flex-end**: os itens serão organizados pelo final respeitando a flex-direction
* **start**: os itens serão organizados pelo ínicio respeitando a writing-mode
* **end**: os itens serão organizados pelo final respeitando a writing-mode
* **left**: os itens serão organizados pelo ínicio em direção a borda esquerda
* **right**: os itens serão organizados pelo ínicio em direção a borda direita
* **center**: itens são centralizados ao longo da linha


---

# Propriedades do Pai (flex container)
### justify-content

* **space-between**: os itens serão distribuídos uniformemente na linha
* **space-around**: os itens são distribuídos uniformemente na linha com espaço igual ao redor deles
* **space-evenly**: os itens serão distribuídos de forma que o espaçamento entre os itens sejam iguais.


---

# Propriedades do Pai (flex container)

# align-items

```css

    .container {
        align-items: stretch ; /*stretch | flex-start | flex-end | center |
        baseline | first baseline | last baseline | start |
        end | self-start | self-end;*/
    }

```

---

<img src="https://css-tricks.com/wp-content/uploads/2018/10/align-items.svg">

<small style="font-size:16px;">* https://css-tricks.com/snippets/css/a-guide-to-flexbox/</small>


---

# Propriedades do Pai (flex container)
### align-items

* **stretch** (padrão - *default*): os itens irão preencher o container
* **flex-start / start / self-start**:os itens serão colocados no início
* **flex-end / end / self-end**: os itens serão colocados no final
* **center**: os itens serão centralizados
* **baseline**: os itens serão alinhados, como suas linhas de base se alinham

---

# Propriedades do Pai (flex container)

# align-content

Esta propriedade só tem efeito em contêineres de multilinha.

```css

    .container {
        align-content: flex-start; /*flex-start | flex-end | center | space-between |
        space-around | space-evenly | stretch | start | end | baseline*/
    }

```

---

<img src="https://css-tricks.com/wp-content/uploads/2018/10/align-content.svg">

<small style="font-size:16px;">* https://css-tricks.com/snippets/css/a-guide-to-flexbox/</small>


---

# Propriedades do Pai (flex container)
### align-content

* **normal** (padrão - *default*): os itens são compactados em sua posição padrão
* **flex-start / start / self-start**: itens embalados no início do contêiner
* **flex-end / end / self-end**: itens embalados no final do contêiner
* **center**: itens centralizados no contêiner
* **space-between**:itens serão distribuídos uniformemente
* **space-around**: itens serão distribuídos uniformemente com espaço igual ao redor de cada linha
* **space-evenly**: itens serão distribuídos uniformemente com espaço igual ao seu redor
* **stretch**: as linhas se estendem para ocupar o espaço restante

---

# Propriedades do Pai (flex container)

# gap, row-gap, column-gap

```css

.container {
  display: flex;
  ...
  gap: 10px;
  /* gap: 10px 20px;  row-gap column gap */
  /* row-gap: 10px;
     column-gap: 20px; */
}

```

---


<img src="https://css-tricks.com/wp-content/uploads/2021/09/gap-1.svg">

<small style="font-size:16px;">* https://css-tricks.com/snippets/css/a-guide-to-flexbox/</small>


---

# Propriedades dos filhos (flex items)

# order

Por padrão, os *flex-items*s são dispostos na ordem de origem. No entanto, a propriedade order controla a ordem em que aparecem no contêiner.

```css

.item {
    order: 5; /*padrão (default) é 0 */
}

```

---

<img src="https://css-tricks.com/wp-content/uploads/2018/10/order.svg">

<small style="font-size:16px;">* https://css-tricks.com/snippets/css/a-guide-to-flexbox/</small>


---

# Propriedades dos filhos (flex items)

# flex-grow

Isso define a capacidade de um item crescer, se necessário.

```css

.item {
   flex-grow: 4; /* default 0 */
}

```

---

<img src="https://css-tricks.com/wp-content/uploads/2018/10/flex-grow.svg">

<small style="font-size:16px;">* https://css-tricks.com/snippets/css/a-guide-to-flexbox/</small>


---

# Propriedades dos filhos (flex items)

# align-self

Isso permite que o alinhamento padrão (ou aquele especificado por align-items) seja substituído por alinhamento de item individual.

```css

.item {
   align-self: auto; /*auto | flex-start | flex-end | center | baseline | stretch*/
}

```

---

<img src="https://css-tricks.com/wp-content/uploads/2018/10/align-self.svg">

<small style="font-size:16px;">* https://css-tricks.com/snippets/css/a-guide-to-flexbox/</small>


---
