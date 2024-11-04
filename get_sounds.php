<!-- get_sounds.php -->
<?php
    $sounds = file('sounds.txt', FILE_IGNORE_NEW_LINES);
    $sounds = array_reverse($sounds);
    foreach ($sounds as $sound) {
        list($fileName, $title) = explode('|', $sound);
        echo "<div class=\"sound-item\">";
        echo "<h3>$title</h3>";
        echo "<audio controls><source src=\"$fileName\" type=\"audio/mpeg\">Your browser does not support the audio element.</audio>";
        echo "</div>";
    }
?>
