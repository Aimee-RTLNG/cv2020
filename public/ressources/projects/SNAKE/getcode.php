<?php 

    header('Content-Type: application/download');
    header('Content-Disposition: attachment; filename="snake.zip"');
    header("Content-Length: " . filesize("snake.zip"));

    $fp = fopen("snake.zip", "r");
    fpassthru($fp);
    fclose($fp);

?>
