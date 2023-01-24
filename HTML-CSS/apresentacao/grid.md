---
marp: true
paginate: true
---

# Treinamento CSS Grid

Vicente Calfo

<small>vicentecalfo@gmail.com</small>

---

# Apresentação

CSS Grid, é um sistema de layout bidimensional baseado em grade (grid).

---

# Propriedades do Pai (grid container)

# display

```css

    .container {
        display: grid; /*inline-grid */
    }

```
---

# Propriedades do Pai (grid container)

## grid-template-columns & grid-template-rows

```css

    .container {
        display: grid; /*inline-grid */
        grid-template-columns: 40px 50px auto 50px 40px;
        grid-template-rows: 100px 1fr;

        /*grid-template-columns: repeat(3, 20px);*/
    }

```

---

# Propriedades do Pai (grid container)

## grid-template-areas

```css

    .container {
        grid-template-areas: 
            "<grid-area-name> | . | none | ..."
            "...";
            }

```
* **< grid-area-name >** - Nome designado no elemento filho com a propriedade *grid-area*
* **.** (ponto) - O ponto significa um célula do grid vazia
* **none** - nenhum grid foi definido 

---

# Exercício - grid-areas - HTML - 1/3

```html

    <div class="container">
        <div class="box box-1">header</div>
        <div class="box box-2">main</div>
        <div class="box box-3">sidebar</div>
        <div class="box box-4">footer</div>
    </div>

```

---

# Exercício - grid-areas - CSS - Elemento Pai  - 2/3

```css

    .container {
        display: grid;
        border: 10px solid #e09f3e;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: 1fr 2fr 1fr;
        grid-template-areas:
            "header header header header"
            "main main main sidebar"
            "footer footer footer footer";
        height: 100vh;
    }

```

---

# Exercício - grid-areas - CSS - Elementos Filhos - 3/3

```css

.box-1 {
    background: #8ecae6;
    grid-area: header;
}

.box-2 {
    background: #219ebc;
    grid-area: main;
}

.box-3 {
    background: #023047;
    grid-area: sidebar;
}

.box-4 {
    background: #ffb703;
    grid-area: footer;
}

```

---


# Propriedades do Pai (grid container)

## justify-items & align-items

```css

    .container {
        justify-items: start;
        align-items: start;
    }

```

---

# Exercício - justify-items/align-items - HTML - 1/2

```html

    <div class="container">
        <div class="box box-1">1</div>
        <div class="box box-2">2</div>
        <div class="box box-3">3</div>
        <div class="box box-4">4</div>
        <div class="box box-5">5</div>
        <div class="box box-6">6</div>
        <div class="box box-7">7</div>
        <div class="box box-8">8</div>
        <div class="box box-9">9</div>
    </div>

```
---

# Exercício - justify-items/align-items - HTML - 2/2

```css

    .container {
        display: grid;
        border: 10px solid #e09f3e;
        grid-template-columns:1fr 50px 1fr;
        grid-template-rows: 1fr 2fr 1fr;
        justify-items: start;
        align-items: start;
    }

```

---


# Propriedades do Pai (grid container)

## justify-content & align-content

```css

    .container {
       justify-content: start; /*start | end | center | stretch
       | space-around | space-between | space-evenly */
       align-content: start; /*start | end | center | stretch
       | space-around | space-between | space-evenly */

       /* Exercicio*/
        display: grid;
        border: 10px solid #e09f3e;
        grid-template-columns: repeat(3, 300px);
        grid-template-rows: repeat(4, 20px);
    }

```

---


# Propriedades do Pai (grid container)

## Masonry

```css

    .container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: masonry;
    }

```