<?php
function execQuery ($stmt, $params = []) {
    global $pdo;
    $query = $pdo->prepare($stmt);
    $query->execute($params);
    return $query->fetch();
}