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