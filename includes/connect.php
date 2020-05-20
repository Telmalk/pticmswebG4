<?php
try {
    $pdo = new PDO()
} catch (PDOException $e) {
    die($e->getMessage());
}
