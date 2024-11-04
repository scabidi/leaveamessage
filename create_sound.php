<!-- create_sound.php -->
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $soundFileName = basename($_FILES['soundFile']['name']);
        file_put_contents('sounds.txt', $soundFileName . PHP_EOL, FILE_APPEND);
        header('Location: index.php');
        exit;
    }
?>
