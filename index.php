<?php
    require_once('smarty-3.1.39/libs/Smarty.class.php');

    $smarty = new Smarty();
    $smarty->template_dir = 'views';
    $smarty->compile_dir = 'tmp';

    if (isset($_POST['submit'])) {
        $smarty->assign('page', 2);
        $smarty->display('meeting_detail.tpl');
    } else {
        $smarty->assign('page', 1);
        $smarty->display('personal.tpl');
    }
    
    