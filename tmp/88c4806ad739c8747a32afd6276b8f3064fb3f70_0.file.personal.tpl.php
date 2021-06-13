<?php
/* Smarty version 3.1.39, created on 2021-06-13 16:16:01
  from 'C:\xampp\htdocs\zoom\views\personal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c6132163f592_39012529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c4806ad739c8747a32afd6276b8f3064fb3f70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zoom\\views\\personal.tpl',
      1 => 1623593735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c6132163f592_39012529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198556236460c6132163c170_83418749', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184185988460c6132163d3c6_05135069', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213071650860c6132163e0d9_16688637', 'progress');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79630239660c6132163ec09_58710213', 'btnobject');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_198556236460c6132163c170_83418749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_198556236460c6132163c170_83418749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal Details<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_184185988460c6132163d3c6_05135069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_184185988460c6132163d3c6_05135069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card-body py-4">
        <h1 class="text-center">Zoom Account License Request Form</h1>
        <p class="text-muted">Your email will be recorded when you submit this form</p>
        <p class="text-muted">Not email@cbsua.edu.ph? Switch account</p>
        <p class="text-red">*Required</p>
    </div>
    <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Full Name <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="fullname" name="fullname" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Office/Department/College <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="office_dept_college" name="office_dept_college" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Position/Designation <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="position_designation" name="position_designation" autocomplete="off">
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'progress'} */
class Block_213071650860c6132163e0d9_16688637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'progress' => 
  array (
    0 => 'Block_213071650860c6132163e0d9_16688637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
50%<?php
}
}
/* {/block 'progress'} */
/* {block 'btnobject'} */
class Block_79630239660c6132163ec09_58710213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'btnobject' => 
  array (
    0 => 'Block_79630239660c6132163ec09_58710213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <input type="submit" name="next" id="btnnext" class="btn btn-primary" value="Next"></input>
<?php
}
}
/* {/block 'btnobject'} */
}
