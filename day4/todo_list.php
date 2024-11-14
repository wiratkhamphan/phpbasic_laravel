<?php
session_start();

class TodoList {
    private $tasks = [];

    public function __construct() {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function addTask($task) {
        $this->tasks[] = $task;
        $this->saveTasks();
    }

    public function removeTask($index) {
        if (isset($this->tasks[$index])) {
            unset($this->tasks[$index]);
            $this->tasks = array_values($this->tasks); // Re-index array
            $this->saveTasks();
        }
    }

    private function saveTasks() {
        $_SESSION['tasks'] = $this->tasks;
    }

    public function getTasks() {
        return $this->tasks;
    }
}

$todo = new TodoList();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add']) && !empty($_POST['task'])) {
        $todo->addTask($_POST['task']);
    } elseif (isset($_POST['delete'])) {
        $todo->removeTask($_POST['index']);
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <style>
        .task-item {
            display: flex;
            align-items: center;
            margin: 5px 0;
        }
        .task-item form {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h1>Todo List</h1>

    <form method="POST">
        <input type="text" name="task" placeholder="Add new task">
        <button type="submit" name="add">Add</button>
    </form>

    <ul>
        <?php foreach ($todo->getTasks() as $index => $task): ?>
            <li class="task-item">
                <div><?php echo htmlspecialchars($task); ?></div>
                <form method="POST">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
