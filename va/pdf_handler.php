<?php
$file = $_GET['file'];

if (file_exists($file)) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));

    readfile($file);
} else {
    echo "The requested file does not exist.";
}
?>
