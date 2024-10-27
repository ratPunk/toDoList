<?php
$file = 'list.txt';
$fileOpen = fopen("list.txt","r");
$fileSize = filesize($file);

if ($fileSize > 0) {
    $data = fread($fileOpen, $fileSize);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <h3>To-Do</h3>
</header>
    <div class="addTask">
        <form action="addTask.php" method="POST">
            <input type="text" name="taskDescription" placeholder="task description" required><br>
            <input type="text" name="task" placeholder="task" required><br>
            <input type="submit">
        </form>
    </div>
    <div class="list">
        <?php 
        if (isset($data)) {
            echo "<div>{$data}</div><br>";
            
        }else{
            echo "<biv class='taskNone'>задач пока нет</div>";
        }
        ?>
    </div>
    <h3>zhaba pidor</h3>
</body>
</html>