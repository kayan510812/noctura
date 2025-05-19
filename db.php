<?php
// Database connection settings
$host = 'localhost';
$db   = 'noctura';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Maak een PDO-verbinding
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die('Databaseverbinding mislukt: ' . $e->getMessage());
}

// SELECT-query uitvoeren
$stmt = $pdo->query('SELECT * FROM jouw_tabel_naam');

// Resultaten ophalen
$records = $stmt->fetchAll();

// Meerdere records tonen met foreach
foreach ($records as $record) {
    echo 'ID: ' . $record['id'] . '<br>';
    echo 'Naam: ' . $record['naam'] . '<br>';
    echo '<hr>';
}
?>
