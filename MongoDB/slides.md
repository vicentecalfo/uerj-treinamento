---
marp: true
paginate: true
---

# Treinamento MongoDB

Vicente Calfo

<small>vicentecalfo@gmail.com</small>
<small>https://www.linkedin.com/in/vicentecalfo/</small>

---

# Banco de Dados NoSQL

- NoSQL -> **Não SQL** ou não relacional;
- Atualmente o termo NoSQL evoluiu pata **Not Only SQL** ou não somente SQL;
- Banco de dados NoSQL tem sido usado para *Big Data* e *Data Science*;


<small style="font-size:20px">**SQL** -> *Structured Query Language*</small>
<small style="font-size:20px">**Big Data** -> conjunto de dados maior e complexo (dados volumosos de diferente base de dados e processados com velocidade - 3Vs: Volume, Variedade e Velocidade)</small>
<small style="font-size:20px">**Data Science** -> A principal função da ciência de dados é transformar dados, estruturados ou não, em conhecimento para uma empresa ou projeto</small>

---

# Banco de Dados Relacionais

- Bancos mais utilizados desde de 1970;
- Formato de Tabelas (linhas x colunas);
- Uso de chaves primarias (PK) e chaves estrangeiras (FK);
- Limitação de uso:
    - Escala (petabytes);
    - Perda de performance em relacionamento de grande conjunto de dados (*joins*);
    - Dificuldade na modelagem de esquemas complexos.

---

# Bancos NoSQL Linha do Tempo

- Termo surgido em 1998 por Carlo Strozzi para nomear uma estrutura de banco mais leve não exposta ao SQL e de código aberto;
- Em 2006 o Google publica um artigo: BigTable: A Distributed Storage System for Structred Data" - chamando a atenção para o tema NoSQL;
- Nos últimos anos os banco de dados NoSQL tem aumentado significativamente;

---

# Bancos NoSQL

- Não usam **SQL**;
- Formas de organização: **NÃO USAM TABELAS** - usam grafos, documentos e colunas visando melhor performance;
- Clusterização: Executar o banco de dados em várias máquinas ao mesmo tempo;
- Usam esquemas flexíveis (formatos diferentes para o mesmo tipo de registro);
- Escalabilidade Horizontal (amigável);

<small style="font-size:20px">Escalabilidade vertical (scaling up) -> adicionar hardware mais poderosos (ex.: CPU, memórias, disco).</small>
<small style="font-size:20px">Escalabilidade horizontal (scaling out) -> adicionar clones do mesmo servidor lado a lado e distribuir as solicitações.</small>
<small style="font-size:20px">https://db-engines.com/en/ranking/document+store</small>

---

# Ranking NoSQL
<img src="ranking-nosql.png" />

---

# Ranking Geral
<img src="ranking-geral.png" />

---

# MongoDB

- Nome derivado da palavra inglesa "Humongous" (imenso);
- Banco de dados NoSQL de código aberto;
- Gratuito;
- Alta performance;
- Sem esquemas;
- Orientado a documentos;
- Criados em 2009 para atender grandes volumes de dados.

---

# Ecossistema Mongo

- MongoDB Charts (visualização de dados através de dashboards);
- MongoDB Atlas (hospedagem de banco na nuvem);
- MongoDB DataLake (agregação);
- MongoDB Stitch (plataforma servless - autenticação e acesso ao DB);
- MongoDB Compass (ferramenta gráfcia para conexaão e manipulação de dados).

<small style="font-size:18px;">O **data lake** é um repositório centralizado projetado para armazenar, processar e proteger grandes quantidades de dados estruturados, semiestruturados e não estruturados. Ele pode armazenar dados em seu formato nativo e processar qualquer variedade desses dados, ignorando os limites de tamanho.</small>

---

# Formato de documento - BSON

- Documentos em **BSON** (representação binária do padrão **JSON**);
- Tipos de dados padrão:
    - boleanos (true/false);
    - strings;
    - números;
    - null (nulo);
    - arrays (listas);
    - objetos/documentos (objects).

---

# JSON - Tipos

```json

{
	"primeiroNome": "John",
	"segundoNome": "Smith",
	"idade": 32,
	"estrangeiro": false,
	"enderaco": {
		"rua": "Adalberto da Silveira",
		"numero": 25,
		"complemento": "apto 307",
		"cidade": "Rio de Janeiro",
		"estado": "RJ",
		"cep": null
	},
	"telefones": [{
			"tipo": "casa",
			"numero": "212 555-1234"
		},
		{
			"tipo": "celular",
			"numero": "646 555-4567"
		}
	]
}

```
---

# MongoDB - Terminologia

### Relação de nomes usados nos banco de dados relacionais e no MongoDB


| Relacional DB    | MongoDB        |
|------------------|----------------|
| Banco de Dados   | Banco de Dados |
| Tabela           | Coleção        |
| Linha (Registro) | Documento      |
| Coluna | Campo      |

---

# MongoDB - Documento

- Cada documento sempre terá o campo: **_id**.

```js
{
	"_id": ObjectId("536gfst785hfg896jgh90iju8gdtdf5"),
	"primeiroNome": "John",
	"segundoNome": "Smith",
	"idade": 32,
	"estrangeiro": false,
	"enderaco": {
		"rua": "Adalberto da Silveira",
		"numero": 25,
		"complemento": "apto 307",
		"cidade": "Rio de Janeiro",
		"estado": "RJ",
		"cep": null
	},
	"telefones": [{
			"tipo": "casa",
			"numero": "212 555-1234"
		},
		{
			"tipo": "celular",
			"numero": "646 555-4567"
		}
	]
}

```

---

# MongoDB Atlas

- Criar uma conta no MongoDB Atlas para descobrir o MongoDB
    - https://www.mongodb.com/atlas/database;
    - Usar sua conta do Google (para facilitar).

---

# Download MongoDB

- Link: https://www.mongodb.com/try/download/community

---

# MongoDB

- A porta padrão de instalação do MongoDB é a 27017;
<img src="compass.png" style="width:70%; margin-top:30px;"/>


---

# MongoDB Compass Terminal

<img src="2.png" style="margin-top:0px; width:90%;"/>

---

# Comandos Básicos MongoDB

## Para exibir os banco de dados existentes

```bash

show databases

```

---

# Comandos Básicos MongoDB

## Para escolher um banco de dados

```bash

use nome-do-database-desejado

```

---

# Comandos Básicos MongoDB

## Criar um banco de dados

Enquanto você não criar ao menos uma coleção o banco de dados não será criado.
**Obs.:** O mongo considera letras maiúsculas e minusculas (camelcase) no momento de criação das coleções.

```bash

use nome-do-banco

db.createCollection('minha-colecao')

```

---

# Comandos Básicos MongoDB

Quando você apagar todas as coleções de um banco o banco será apagado também.

## Apagar uma coleção

```bash

db.nomedacollection.drop()

```

---

# Comandos Básicos MongoDB


## Apagar um Banco de Dados

```bash

db.dropDatabase()

```

---


# Comandos Básicos MongoDB

Listar todas as coleções de um banco de dados.

## Listar as coleções
```bash

show collections

```

---

# Comandos Básicos MongoDB


## Inserir Documento
```bash

db.colecao-desejada.insertOne({"name":"Vicente"})

```

---

# Comandos Básicos MongoDB


## Inserir Vários Documentos
```bash

db.colecao-desejada.insertMany([{"name":"Felipe"},{"name":"André"}])

```

---

# Comandos Básicos MongoDB


## Buscar todos os Documentos
```bash

db.colecao-desejada.find()

```

---


# Comandos Básicos MongoDB


## Buscar um Documento em específico
```bash

db.colecao-desejada.find({"name":"André"})

```

---

# Comandos Básicos MongoDB


## Limitando a Busca de Documentos
```bash

db.colecao-desejada.find().limit(2)

```

---

# Comandos Básicos MongoDB


## Buscando um Documento por ID

```bash

db.colecao-desejada.find({_id:ObjectId("6421aa850ed20a9bf32cf818")})

```

---

# Comandos Básicos MongoDB


## Retornando apenas os campos desejados

O documento retornado só mostrará o campo "name".
O campo **"_id"** sempre vai ser mostrado a não ser que explicitamento seja informado o contrário.

```bash

db.colecao-desejada.find({name:"Felipe"}, {"_id": 0, "name": 1})

```

---

# Comandos Básicos MongoDB


## Retornando a quantidade de documentos numa coleção


```bash

db.colecao-desejada.find().count()

```

---

# Comandos Básicos MongoDB


## Removendo um documento


```bash

db.colecao-desejada.deleteOne({_id:ObjectId("6421aa850ed20a9bf32cf818")})

```

---

# Comandos Básicos MongoDB


## Atualizando um documento


```bash

db.colecao-desejada.updateOne(
	{_id:ObjectId("6421aa850ed20a9bf32cf818")}
	{$set:{
		'idade':48
	}}
	)

```

---

# Operadores Atômicos

$set

Ele é utilizado para especificar uma chave e atualizar a chave.
Se a chave não exist ela é criada.

```bash

{ $set : { field : value } }

```

---

# Operadores Atômicos

$unset

Para remover uma chave.

```bash

{ $unset : { field : 1} }

```

---

# Operadores Atômicos

$inc

Para incrementar e decrementar valores

```bash

{ $inc : { field : 1 } }

{ $inc : { field : -1 } }

```

---

# Operadores Condicionais

$gt 

Operador de maior (>).

```bash

db.col.find({"idade" : {$gt : 30}})

```

---

# Operadores Condicionais

$gte 

Operador de maior igual (>=).

```bash

db.col.find({"idade" : {$gte : 40}})

```

---

# Operadores Condicionais

$lt 

Operador de menor (<).

```bash

db.col.find({"idade" : {$lt : 45}})

```

---

# Operadores Condicionais

$lte 

Operador de maior igual (<=).

```bash

db.col.find({"idade" : {$lte : 48}})

```

---

# Operadores Condicionais


Valores "entre".

```bash

db.products.find({stock:{$gte:10, $lte:40}}).count()

```

Comparadores para strings

Ex.: Resultado com todos os produtos que tenham o valor "title" começando de A até I.

```bash

db.products.find({title:{$lte:"I"}}).count()

```

---

# $rename

Renomeia os campos.

```js

db.users.updateOne({id:2},{$rename:{"firstName":"firstN", "lastName":"lastN"}})

```


---

# Operador $exists

Retorna os documentos que contenha o atributo especificado.

```bash

db.products.find({stock:{$exists:true}}).count()

```

---

# Operador $type

Retorna os documentos cujo atributo seja do tipo especificado (seguindo a notação BSON).

```bash

db.products.find({price:{$type:"number"}}).count()

```

Tabela com todos os tipos: https://www.mongodb.com/docs/manual/reference/operator/query/type/

---

# Operador $regex

Retorna os documentos que satisfazem a expressão regular.

```js

// nomes que possuam a letra a em qualquer posição
// Em SQL... WHERE (nome like %a%)
db.products.find({"title":{$regex:"H"}});
// nomes que terminem com a
// Em SQL... WHERE (nome like %A)
db.products.find({title:{$regex:"a\$"}});
// nomes que comecem com A
// Em SQL... WHERE (nome like A%)
db.products.find({title:{$regex:"^A"}});

```

---

# Mais conteúdo sobre REGEX

- https://aurelio.net/regex/guia/
- https://regexone.com/

---

# Operador $or

Retorna todos os documentos que atendam a uma duas condições.
.

```js

db.products.find({$or:[{price: {$lte: 50}},{stock: {$gte:20}}]})


```

---

# Operador $and

Retorna todos os documentos que atendam às duas condições.

```js

// explicitamente

db.products.find({$and:[{price: {$lte: 50}},{stock: {$gte:20}}]})

db.products.find({$and:[{price: {$lte: 50}},{price: {$gte:20}}]})

// implicitamente

db.products.find({price: {$lte: 50},stock: {$gte:20}})

db.products.find({price: {$lte: 50, $gte:20}})


```

---

# Combinando operadores $or e $and

Retorna todos os documentos que atendam às duas condições.

```js

db.products.find({ $and : [
		{ $or : [ {price: 40},{preço: 13} ] },
		{ stock: { $gt:50 } }
	]}
)

```

---

# Operadores $in a $all

**$in:** retorna todos os documentos cujo atributo contenha pelo
menos um dos valores especificados no array

**$all:** retorna todos os documentos cujo atributo contenha todos os
valores especificados no array

---

# Operadores $in a $all

```js

// todos os documentos que tenham history como tag
db.posts.find({tags:"history"})


// todos os documentos que contenham history
// OU magical como tag
db.posts.find({tags:{$in:["history","magical"]}})


// todos os documentos que contenham american
// E magical como tag
db.posts.find({tags:{$all:["american","magical"]}})

```

---

# Operadores $nin

```js

// todos os documentos que não contenham history
// OU magical como tag
db.posts.find({tags:{$nin:["history","magical"]}})


```

---

# Operadores $eq e $ne

```js

// seleciona documentos em que o valor do campo é igual ao valor especificado.

db.user.find({gender:{$eq:"male"}})

// seleciona documentos em que o valor é diferente (not equal) do valor especificado

db.user.find({gender:{$ne:"male"}})


```

---

# Operadores $not

```js

// operador NOT, seleciona documentos que não satisfazem a 
// expressão especificada, incluindo documentos que não contenham o atributo especificado
db.products.find({price:{$not:{$gte:499}}}).count()

// a consulta a seguir seleciona todos os documentos na coleção "products" 
// em que o item "title" não começa com a letra h.
db.products.find( { title: { $not: /^h.*/ } } )

db.products.find( { title: { $not: /^[h-H].*/ } } )


```

---

# Operadores $nor

```js

//  seleciona os documentos que não satisfazem a lista de condições

db.products.find( { $nor: [ { price: 549 }, { stock: 94 } ]  } ).count()

db.products.find( { $nor: [ { price: {$lt: 50} }, { stock: { $gt: 20 } } ] } ).count()

```

---

# Ordenação

- ASC: 1
- DESC: -1


```js

db.products.find({price:{$lte:200}}).sort({brand:1})

db.products.find({price:{$lte:200}}).sort({brand:-1})

```


---

# Distinct

Retorna os valores distintos para um atributo. 


```js

db.products.distinct("category")

```


---

# Upsert

Insere um novo documento (com os atributos do update) quando o critério de busca não for satisfeito por nenhum documento da coleção.



```js

db.users.updateOne({firstName:'Vicente'},{$set:{firstName:'Vicente',lastName:'Calfo'}},{upsert:true})

```


---

# Multi - deprecated

Se true, permite que todos os documentos da coleção, que satisfaçam a condição, sejam alterados.




```js

db.cart.update({discountedTotal:{$lte:500}},{$set:{prize:true}},{multi:true})

```


---

# Bulk Write

Atualiza todos os documentos na coleção que correspondem ao filtro.


```js

db.cart.bulkWrite([
	{
		updateMany:{
			filter: {discountedTotal:{$lte:500}},
			update: {$set:{prize:true}}
		}
	}
])

//db.cart.update({discountedTotal:{$lte:500}},{$set:{prize:true}},{multi:true})

```

---

# Bulk Write

Atualiza todos os documentos na coleção que correspondem ao filtro.


```js

db.cart.bulkWrite([
	{
		updateMany:{
			filter: {discountedTotal:{$lte:500}},
			update: {$set:{prize:true}}
		}
	},
	{
		updateMany:{
			filter: {discountedTotal:{$lte:500}},
			update: {$set:{prize:'teste'}}
		}
	},
	{
		updateMany:{
			filter: {discountedTotal:{$lte:500}},
			update: {$set:{prize:false}}
		}
	}
],{
	ordered: true
})

//db.cart.update({discountedTotal:{$lte:500}},{$set:{prize:true}},{multi:true})

```

---

# Data

```js

db.cart.updateOne({id:1}, {$set:{date: new Date()}})

db.cart.updateOne({id:1}, {$set:{date: ISODate('2023-03-29T12:47:51.5207')}})

// buscando

db.cart.find({ date: { $gt: ISODate('2012-01-01') } }).count()

db.cart.find({ date: { $lt: ISODate('2012-01-01') } }).count()


```

---

# $push / $each

```js

db.cart.updateOne({id:1}, {$push:{products: {id:122, title: 'Produto 122'}}})


db.cart.updateOne({id:1}, 
	{$push:{products: {  $each: [ {id:123, title: 'Produto 123'}, {id:9999, title: 'Produto 9999'} ]   } }}
	)

```

---

# $addToSet

```js

// Adiciona item no array como valor único 
// (se o valor já tiver no array o item não é incluído em duplicidade)

db.posts.updateOne({id:1}, {$addToSet:{tags: 'horror' }})


```

---

# $pop

```js
// remove o primeiro item do array
db.cart.updateOne({id:1}, {$pop:{products: -1 }})

// remove o último item do array
db.cart.updateOne({id:1}, {$pop:{products: 1 }})


```

---

# $pull

```js

// Remove do array

db.cart.updateOne({id:1}, {$pull:{products: { id:88 } }})

// db.cart.updateOne({id:1}, {$set:{fruits: [ "apples", "pears", "oranges", "grapes", "bananas" ]}})

db.cart.updateOne({id:1}, {$pull:{products: { $in: [ "apples", "oranges" ] } }})


```

---

# Documentos Aninhados

```js


db.users.updateOne({id:1}, {$set:{'address.city': 'Rio de Janeiro' }})

//Se o campo nãp existir ele adiciona (comportamento padrão)
db.users.updateOne({id:1}, {$set:{'address.cidade': 'São Paulo' }})

//$ é o índice do item a ser editado dentro do array
db.cart.updateOne({id:1, 'products.id':18}, {$set:{'products.$.price': 99 }})



```

---

# Aggregations Pipelines - $SUM

Soma o valor definido a partir de todos os documentos da coleção.

```js


// Lista de quantos itens existem por categoria
db.products.aggregate([{$group:{_id:"$category", total:{$sum:1} }}])

// Lista de quantos itens existem em estoque por categoria
db.products.aggregate([{$group:{_id:"$category", stock:{$sum:"$stock"} }}])



```

---

# Aggregations Pipelines - $avg

Calcula a média de todos os valores dados de todos os documentos da coleção.

```js

// Calcula a média de preço por categoria
db.products.aggregate([{$group:{_id:"$category", media:{$avg:"$price"} }}])

// Calcula a média da nota de avaliação
db.products.aggregate([{$group:{_id:"$category", media:{$avg:"$rating"} }}])



```

---

# Aggregations Pipelines - $min

Obtém o mínimo dos valores correspondentes de todos os documentos da coleção.

```js

// Mostra o menor preço por categoria
db.products.aggregate([{$group:{_id:"$category", min:{$min:"$price"} }}])

// Mostra a menor nota por categoria
db.products.aggregate([{$group:{_id:"$category", min:{$min:"$rating"} }}])



```

---

# Aggregations Pipelines - $max

Obtém o máximo dos valores correspondentes de todos os documentos da coleção.

```js

// Mostra o menor preço por categoria
db.products.aggregate([{$group:{_id:"$category", max:{$max:"$price"} }}])

// Mostra a menor nota por categoria
db.products.aggregate([{$group:{_id:"$category", max:{$max:"$rating"} }}])



```

---

# Aggregations Pipelines - $max

Obtém o máximo dos valores correspondentes de todos os documentos da coleção.

```js

// Mostra o menor preço por categoria
db.products.aggregate([{$group:{_id:"$category", max:{$max:"$price"} }}])

// Mostra a menor nota por categoria
db.products.aggregate([{$group:{_id:"$category", max:{$max:"$rating"} }}])



```

---

# Aggregations Pipelines - $match

Filtra os documentos para passar apenas os documentos que correspondem à(s) condição(ões) especificada(s) para o próximo estágio do pipeline.

```js

// Descobre a média de nota
// Me mostra apenas quem tem média >= 4.5

db.products.aggregate( [
   { $group: { _id: "$category", nota: { $avg: "$rating" } } },
   { $match: { nota: { $gte: 4.5 } } }
] )



```

---

# Aggregations Pipelines - $project

Passa os documentos com os campos solicitados para a próxima etapa do pipeline. 

```js
// primeiro coloca em maiúsculo o nome da marca
// depois agrupa a quantidade de produtos por marca
// depois ordena pelo nome (_id)

db.products.aggregate( [
	{ $project: { brand: {$toUpper:"$brand" }, _id:0 }},
	{ $group: { _id: "$brand", total: { $sum:1 } } },
	{ $sort: { "_id": 1 } }
] )



```

---

# Aggregations Pipelines - $sort

Passa os documentos com os campos solicitados para a próxima etapa do pipeline. 

```js
// ordena de maneira decrescente
// passa para próxima etapa apenas os campos title e brand
// retorna apenas 2 itens

db.products.aggregate( [
	{ $sort: { 'title': -1 } },
	{ $project:{ 'title': 1, 'brand': 1 } },
	{ $limit: 2 }
] )

```

---

# Aggregations Pipelines - $sort

Passa os documentos com os campos solicitados para a próxima etapa do pipeline. 

```js
// ordena de maneira decrescente
// passa para próxima etapa apenas os campos title e brand
// retorna apenas 2 itens

db.products.aggregate( [
	{ $sort: { 'title': -1 } },
	{ $project:{ 'title': 1, 'brand': 1 } },
	{ $limit: 2 }
] )

```

---

# Aggregations Pipelines - $sort

Passa os documentos com os campos solicitados para a próxima etapa do pipeline. 

```js

db.products.aggregate( [
	{ $match: { brand: { $in: [ "Apple","Samsung" ] } } },
	{ $count: "Total"  }
] )

// db.products.find({brand:'Apple'}).count()

// db.products.find({brand:'Samsung'}).count()

```

---

# Validators


```js

db.createCollection("teste", {
  validator: {
    $jsonSchema: {
      bsonType: "object",
      required: [ "title" ],
      properties: {
        title: {
          bsonType: "string",
          description: "Title - Required."
        },
		body:{
			bsonType: "string",
          description: "Body."
		}
	  }
	}
  }
})

```
---

# Validators - Update


```js

db.runCommand({
	collMod:'teste',
  validator: {
    $jsonSchema: {
      bsonType: "object",
      required: [ "title" ],
      properties: {
        title: {
          bsonType: "string",
          description: "Title - Required."
        },
		body:{
			bsonType: "string",
          description: "Body."
		}
	  }
	}
  }
})


```

---

# Instalando MONGOSH

Download MongoDB Shell
1 - https://www.mongodb.com/try/download/shell
2 - Descompactar
3 - Abrir configurações (painel de controle)
4 - Ir em Sobre > Configurações Avançadas do Sistema
4 - Variáveis de Ambiente
5 - Ir em "Path" (criar ou Editar)
6 - Colocar o caminho para binário (/bin)
7 - Abrir o terminal e testar "mongosh --help"

---

# Instalando MONGO Tools

Download MongoDB Tools
1 - https://www.mongodb.com/docs/database-tools/installation/installation-windows/
2 - Descompactar
3 - Abrir configurações (painel de controle)
4 - Ir em Sobre > Configurações Avançadas do Sistema
4 - Variáveis de Ambiente
5 - Ir em "Path" (criar ou Editar)
6 - Colocar o caminho para binário (/bin)

---

# Criar Usuário e Senha (MongoDB Compass)

```js

db.createUser({
	user: "user",
	pwd: "123456",
	roles:[{
		role:"readWrite", bd: "testedb"
	}]
})

// mongodb://user:123456@mongodb0.example.com:27017/testedb

```
https://www.mongodb.com/docs/manual/reference/built-in-roles/

---

# Testando a Conexão

```js

mongosh mongodb://teste:123456@localhost:27017/aula

```

---

# Importanto Documentos

```bash

mongoimport 
	--db aula 
	--collection teste 
	--file C:\Users\vicen\Documents\GitHub\uerj-treinamento\MongoDB\dummy-cart.json 
	--jsonArray 
	--uri mongodb://teste:123456@localhost:27017

```

---

# Exportanto Documentos (DUMP)

```bash

mongodump 
	--db aula 
	-o C:\Users\vicen\Documents\GitHub\uerj-treinamento\MongoDB\Backup 
	--uri mongodb://teste:123456@localhost:27017

```

---

# Exportanto Documentos (JSON)

```bash

--db aula 
	-o C:\Users\vicen\Documents\GitHub\uerj-treinamento\MongoDB\Backup2\out.json 
	--uri mongodb://teste:123456@localhost:27017 
	-c teste

```

---

# Restore

```bash

mongorestore --db aula2 C:\Users\vicen\Documents\GitHub\uerj-treinamento\MongoDB\Backup\aula 
--uri mongodb://localhost:27017

```