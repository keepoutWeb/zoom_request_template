<?php
if (isset($_POST['submit'])) {
    print_r($_POST);
} else if (isset($_POST['next'])) {
    $info = array(
        'fullname' => $_POST['fullname'],
        'office_dept_college' => $_POST['office_dept_college'],
        'position_designation' => $_POST['position_designation'],
        'page' => 2
    );

    $smarty->assign('info', $info);
    $smarty->display('meeting_detail.tpl');
} else {
    $info = array(
        'fullname' => '',
        'office_dept_college' => '',
        'position_designation' => '',
        'page' => 1
    );

    $smarty->assign('info', $info);
    $smarty->display('personal.tpl');
}