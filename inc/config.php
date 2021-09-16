<?php
session_start();
error_reporting(1); // should disable in production

require_once 'vendor/autoload.php';

// APPLICATION DEFINITION
define ('URI', 'http://localhost/zoom_request_template/');
define ('APP_NAME', 'CBSUA Zoom Account Request');

// SMARTY OBJECT
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';

$req = array_merge($_GET, $_POST); // requests

if (isset ($_SESSION['user_profile'])) {
    $user_profile = $_SESSION['user_profile'];
    $smarty->assign ('user_profile', $user_profile);
}

// DB CONFIG
$host = 'localhost';
$db   = 'db_cb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}