<?php
    $stmt = $conn->prepare("UPDATE user SET username = ? WHERE id = ?");
    $stmt->bind_param("si", $newUsername, $id);
    $stmt->execute();
?>