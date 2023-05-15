<?php
# Orientação a Objetos
# Exemplo de uma simples classe


class SimpleClass
{
    // declaração de propriedade
    public $var = 'um valor padrão';

    // declaração de método
    public function displayVar() {
      // $this acessa uma propriedade da classe
        echo $this->var;
    }
}

//declarando o objeto
$classe = new SimpleClass();

# Orientação a Objetos
#Exemplo de uma classe com construtor


class Pessoa
{
    // declaração de propriedade
    public $nome;
    public $idade;

    //construtor da classe
    function __construct($nome, $idade) {
       $this->nome = $nome;
       $this->idade = $idade;
    }

    // declaração de método
    public function show() {
      // $this acessa uma propriedade da classe
        echo "<br>Nome: ".$this->nome;
        echo "<br>Idade: ".$this->idade;
    }
}

//declarando o objeto passando valores
$classe = new Pessoa('Joao',23);
// executando um método
$classe->show();

# Orientação a Objetos
#Visibilidade das propriedades

class Pessoas
{
    // declaração de propriedade
    private $nome; //privada, só pode ser acessada pela classe
    public $idade; // publica, pode ser acessa externamente
    protected $salario; // protegida, pode ser acessada pela classe e suas classes "herdadas"

    function __construct($nome, $idade, $salario) {
       $this->nome = $nome;
       $this->idade = $idade;
       $this->salario = $salario;
    }
}

//declarando o objeto passando valores
$classe = new Pessoa('Joao',23, 1500);
echo $classe->nome; //erro
echo $classe->idade; //23
echo $classe->salario;//erro

#Herança
class Pessoas2
{
    // declaração de propriedade
    protected  $nome, $idade, $salario; 
    protected  function getNome() {
      echo " Nome:".$this->nome;
    }
}

//Aluno herda métodos de Pessoas
class Aluno extends Pessoas2 {
  private $matricula, $nota;
  function __construct($nome, $idade, $nota) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->nota = $nota;
  }
  public function show() {
    echo "Nome:".$this->nome. " - Idade: ".$this->idade." - Nota:".$this->nota;
  }
}

$aluno = new Aluno("Andre", 48, 8.7);
$aluno->show();

#Sobrescrevendo métodos

class Pessoas3
{ 
  public function fala() {
    echo "Oi pessoas";
  }
}
class Aluno3 extends Pessoas3 { //Aluno herda métodos de Pessoas
  
  public function fala() {
    echo "Oi Alunos";
    echo parent::fala(); //executa fala de Pessoas
  }
}
$pessoas = new Pessoas3();
$pessoas->fala();//exibe oi pessoas
$aluno = new Aluno3();
$aluno->fala();//exibe oi alunos e oi pessoas

#Abstração

abstract class Pessoas4
{ 
  public function fala() {
    echo "Oi pessoas";
  }
}
class Aluno4 extends Pessoas4 { //Aluno herda métodos de Pessoas
  
  public function fala() {
    echo "Oi Alunos";
    echo parent::fala(); //executa fala de Pessoas
  }
}

$aluno = new Aluno4();
$aluno->fala();//exibe oi alunos e oi pessoas

$pessoas = new Pessoas4(); // ERRO
