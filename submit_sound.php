<!-- submit_sound.php -->
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['soundFile']) && isset($_POST['soundTitle'])) {
        $allowedExtensions = array('mp3', 'wav', 'ogg'); // Define allowed file extensions
        $fileExtension = strtolower(pathinfo($_FILES['soundFile']['name'], PATHINFO_EXTENSION));
        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "Error: Only MP3, WAV, and OGG files are allowed.";
            exit;
        }

        $soundFileName = basename($_FILES['soundFile']['name']);
        $soundTitle = $_POST['soundTitle'];
        $soundEntry = $soundFileName . '|' . $soundTitle . PHP_EOL;
        file_put_contents('sounds.txt', $soundEntry, FILE_APPEND);
        move_uploaded_file($_FILES['soundFile']['tmp_name'], $soundFileName);
        header('Location: index.php');
        exit;
    }
?>
