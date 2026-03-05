<?php
    require 'config.php';

    $result = $conn->query("SELECT id, username FROM user");

    while ($row = $result->fetch_assoc()) {
        echo $row['id'] . " - " . $row['username'];
        echo "<br>";
    }
        $stmt = $conn->prepare("UPDATE user SET username = ? WHERE id = ?");
        $stmt->bind_param("si", $newUsername, $id);
        $stmt->execute();

        $stmt = $conn->prepare("DELETE FROM user WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
?>