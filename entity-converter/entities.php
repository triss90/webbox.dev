<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['text'])) {
            echo htmlentities($_POST['text']);
        } else {
            echo "No data!";
        }
    }
?>