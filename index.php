<?php
require_once 'inc/config.php';

if (!$user_profile) $req['a'] = 'auth';
if (!file_exists ("inc/$req[a].php")) $req['a'] = 'dashboard';

include "inc/$req[a].php";
exit();