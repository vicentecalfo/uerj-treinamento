<?php


class ToDo
{
    public $tasks;
    // private $messages = array(
    //     'taskNotFound' => "Esta tarefa não existe\n"
    // );

    function __construct($tasks = [])
    {
        $this->tasks = $tasks;
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
        // $taskDontExists = !array_key_exists($index, $this->tasks);
        // if ($taskDontExists) echo "Esta tarefa não existe em sua lista." . PHP_EOL;
        // unset($this->tasks[$index]);

        // if($this->checkIfTaskDontExists($index)) exit("Esta tarefa não existe em sua lista". PHP_EOL);

        //    $taskDontExist = $this->checkIfTaskDontExists($index);
        //    if($taskDontExist['status']){
        //     echo $taskDontExist['message'];
        //     return;
        //    }
        if ($this->checkIfTaskDontExists($index)) echo $this->messages['taskNotFound']; return;
        unset($this->tasks[$index]);
    }

    public function editTask($index, $task)
    {
        //  $taskDontExists = !array_key_exists($index, $this->tasks);
        // if ($taskDontExists) echo "Esta tarefa não existe em sua lista." . PHP_EOL;
         //$this->tasks[$index] = $task;

        //if($this->checkIfTaskDontExists($index)) die("Esta tarefa não existe em sua lista". PHP_EOL);

        // $taskDontExist = $this->checkIfTaskDontExists($index);
        // if ($taskDontExist['status']) {
        //     echo $taskDontExist['message'];
        //     return;
        // }

        if ($this->checkIfTaskDontExists($index)) echo $this->messages['taskNotFound']; return;
        $this->tasks[$index] = $task;
    }

    private function checkIfTaskDontExists($index)
    {
        return !array_key_exists($index, $this->tasks);
        // return array(
        //     'status' => !array_key_exists($index, $this->tasks),
        //     'message' => "Esta tarefa não existe em sua lista". PHP_EOL
        // );

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

// $todo->checkIfTaskDontExists($index);

$todo->editTask(
    index: 1,
    task: 'Buscar o Tobias no petshop'
);

$todo->listTasks();

echo "--------------------------" .  PHP_EOL;

$todo->removeTask(null);

echo "--------------------------" .  PHP_EOL;

$todo->listTasks();


echo "--------------------------" .  PHP_EOL;

$todo->removeTask('122');

$todo->listTasks();

echo "--------------------------" .  PHP_EOL;

$todo->editTask(
    index: "456",
    task: 'Buscar o Tobias no petshop'
);

$todo->listTasks();

echo "--------------------------" .  PHP_EOL;
