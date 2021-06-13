<?php
/* Smarty version 3.1.39, created on 2021-06-13 10:56:25
  from 'C:\xampp\htdocs\zoom\views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c5c839cd17a4_38223693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01fa654e0bdd83ffb3a124b73ee5736059320254' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zoom\\views\\layout.tpl',
      1 => 1623574556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5c839cd17a4_38223693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204130667160c5c839cc05c5_62387685', 'title');
?>
</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69268859760c5c839cc3208_94847956', 'head');
?>

        
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <style>
            .gj-datepicker-bootstrap [role=right-icon] button {
                height: 100%;
            }
        </style>
    </head>
    
    <body>
        <div class="page page-center">
            <div class="container-tight py-4">
                <div class="text-center mb-1">
                    <img src="./public/img/cbsua.jpg" width=100%" alt="">
                </div>
                <form method="POST" action="">
                    <div class="card card-md">
                        <div class="card-body py-4">
                            <h1 class="text-center">Zoom Account License Request Form</h1>
                            <p class="text-muted">Your email will be recorded when you submit this form</p>
                            <p class="text-muted">Not email@cbsua.edu.ph? Switch account</p>
                            <p class="text-red">*Required</p>
                        </div>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89236089960c5c839cc4012_94932091', 'personal');
?>
 
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-4">
                            <div class="progress">
                                <div class="progress-bar" style="width: <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141310063860c5c839cc4b23_15384467', 'progress');
?>
" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <span class="visually-hidden">25% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="btn-list justify-content-end">
                                <input type="submit" name="submit" id="btnnext" class="btn btn-primary" value="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164015238060c5c839cc5544_36689443', 'btnname');
?>
"></input>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            function Error(id) {
                $(id).css('border', '1px solid #ff0000');
            }

            function Correct(id) {
                $(id).css('border', '1px solid #ccc');
            }

            $('form #btnnext').on('click', function(e) {
                let page = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"
                let is_check = true

                if (page == 1) {
                    let fullname = $('#fullname').val().trim()
                    let office_dept_college = $('#office_dept_college').val().trim()
                    let position_designation = $('#position_designation').val().trim()

                    if (fullname.length == 0) { Error("#fullname"); is_check = false; } else { Correct("#fullname") }
                    if (office_dept_college.length == 0) { Error("#office_dept_college"); is_check = false; } else { Correct("#office_dept_college") }
                    if (position_designation.length == 0) { Error("#position_designation"); is_check = false; } else { Correct("#position_designation") }
                } else if (page == 2) {
                    let email = $('#email').val().trim()
                    let date_picker = $('#date_picker').val().trim()
                    let timepicker = $('#timepicker').val().trim()
                    let topic = $('#topic').val().trim()
                    let no_participant = $('#no_participant').val().trim()

                    if (email.length == 0) { Error("#email"); is_check = false; } else { Correct("#email") }
                    if (date_picker.length == 0) { Error("#date_picker"); is_check = false; } else { Correct("#date_picker") }
                    if (timepicker.length == 0) { Error("#timepicker"); is_check = false; } else { Correct("#timepicker") }
                    if (topic.length == 0) { Error("#topic"); is_check = false; } else { Correct("#topic") }
                    if (no_participant.length == 0) { Error("#no_participant"); is_check = false; } else { Correct("#no_participant") }
                }
            
                if (is_check == false)
                    e.preventDefault();

            })
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
/* {block 'title'} */
class Block_204130667160c5c839cc05c5_62387685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_204130667160c5c839cc05c5_62387685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_69268859760c5c839cc3208_94847956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_69268859760c5c839cc3208_94847956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'personal'} */
class Block_89236089960c5c839cc4012_94932091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'personal' => 
  array (
    0 => 'Block_89236089960c5c839cc4012_94932091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'personal'} */
/* {block 'progress'} */
class Block_141310063860c5c839cc4b23_15384467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'progress' => 
  array (
    0 => 'Block_141310063860c5c839cc4b23_15384467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'progress'} */
/* {block 'btnname'} */
class Block_164015238060c5c839cc5544_36689443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'btnname' => 
  array (
    0 => 'Block_164015238060c5c839cc5544_36689443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'btnname'} */
}
