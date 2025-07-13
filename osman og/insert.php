<?php
include 'deep.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = trim($_POST["id"]);
    $name = trim($_POST["name"]);
    $batch = trim($_POST["batch"]);

    if ($id && $name && $batch) {
        $stmt = $conn->prepare("INSERT INTO students (id, name, batch) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $id, $name, $batch);
        $stmt->execute();
        $stmt->close();
    }

    header("Location: index.php");
    exit();
}
?>


