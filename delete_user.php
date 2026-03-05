<?php
    $stmt = $conn->prepare("DELETE FROM user WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->bind_param("i", $id);
    $stmt->execute();
?>