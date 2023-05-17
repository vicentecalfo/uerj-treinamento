<?php


class ToDo
{
    public $tasks;

    function __construct($tasks = [])
    {
        //$this->tasks = $tasks;
        //-----------------------------------
        //  if(gettype($tasks) === 'array'){
        //     $this->tasks = $tasks;
        // }else{
        //     $this->tasks = [];
        // }
        //-----------------------------------
        // if(gettype($tasks) === 'array'){
        //     $this->tasks = $tasks;
        // }else{
        //     exit;
        // }
        //---------------------------------
        // if (gettype($tasks) === 'array') {
        //     $this->tasks = $tasks;
        // } else {
        //     throw new Exception("As tarefas devem ser do tipo ARRAY." . PHP_EOL);
        // }
        //----------------------------------
        // $tasksAreInvalid = gettype($tasks) !== 'array'; 
        // if($tasksAreInvalid) throw new InvalidArgumentException("As tarefas devem ser do tipo ARRAY.".PHP_EOL);
        // $this->tasks = $tasks;
    }

    public function addTask($task)
    {
        array_unshift($this->tasks, $task);
    }

    public function listTasks()
    {
        foreach ($this->tasks as $key => $value) {
            echo "$key : $value ";
            echo PHP_EOL;
        }
        //--------------------------------------
        // if (count($this->tasks) === 0) {
        //     echo "Você não possui tarefas ainda.";
        //     echo PHP_EOL;
        // } else {
        //     foreach ($this->tasks as $key => $value) {
        //         echo "$key : $value ";
        //         echo PHP_EOL;
        //     }
        // }
        //--------------------------------------
        // $hasTasks = count($this->tasks) > 0;
        // if (!$hasTasks) echo "Você não possui tarefas ainda." . PHP_EOL;
        // foreach ($this->tasks as $key => $value) {
        //     echo "$key : $value ";
        //     echo PHP_EOL;
        // }
        //--------------------------------------
        // $noTask = count($this->tasks) === 0;
        // if ($noTask) echo "Você não possui tarefas ainda." . PHP_EOL;
        // foreach ($this->tasks as $key => $value) {
        //     echo "$key : $value ";
        //     echo PHP_EOL;
        // }
        //-------------------------------------
    }

    public function removeTask($index)
    {
        unset($this->tasks[$index]);
    }
}



$todo = new ToDo();

$todo->listTasks();

echo "--------------------------" .  PHP_EOL;

$todo->addTask("Lavar Roupa");

$todo->listTasks();

echo "--------------------------" .  PHP_EOL;

$todo->addTask("Fazer compras");

$todo->listTasks();

echo "--------------------------" .  PHP_EOL;

// $todo->tasks = array();

// unset($todo->tasks[1]);

// $todo->listTasks();

// --------------------------------

// $todo->listTasks();

// $todo->addTask("Ir na farmácia");

// $todo->listTasks();

// echo "--------------------------" .  PHP_EOL;


// $todo->removeTask(1);

// $todo->listTasks();

// echo "--------------------------" .  PHP_EOL;




// function get_user_input($prompt = null)
// {
//     $line = readline($prompt);
//     return $line;
// }

// $line = get_user_input("enter something: ");
// print $line . PHP_EOL;
