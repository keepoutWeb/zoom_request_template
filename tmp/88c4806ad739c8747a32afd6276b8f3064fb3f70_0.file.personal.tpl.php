<?php
/* Smarty version 3.1.39, created on 2021-06-13 10:36:34
  from 'C:\xampp\htdocs\zoom\views\personal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c5c39203f361_98024561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c4806ad739c8747a32afd6276b8f3064fb3f70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zoom\\views\\personal.tpl',
      1 => 1623573378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5c39203f361_98024561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13108483560c5c392036b84_37457794', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214349644160c5c392038d83_74199004', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15738745060c5c39203a8e2_78847705', 'personal');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162535759460c5c39203c354_22223077', 'progress');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159237892060c5c39203dd19_35291239', 'btnname');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_13108483560c5c392036b84_37457794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13108483560c5c392036b84_37457794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal Details<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_214349644160c5c392038d83_74199004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_214349644160c5c392038d83_74199004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/js/tabler.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://unpkg.com/@tabler/core@1.0.0-beta3/dist/css/tabler.min.css">
<?php
}
}
/* {/block 'head'} */
/* {block 'personal'} */
class Block_15738745060c5c39203a8e2_78847705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'personal' => 
  array (
    0 => 'Block_15738745060c5c39203a8e2_78847705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Full Name <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="fullname" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Office/Department/College <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="office_dept_college" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Position/Designation <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="position_designation" autocomplete="off">
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'personal'} */
/* {block 'progress'} */
class Block_162535759460c5c39203c354_22223077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'progress' => 
  array (
    0 => 'Block_162535759460c5c39203c354_22223077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
50%<?php
}
}
/* {/block 'progress'} */
/* {block 'btnname'} */
class Block_159237892060c5c39203dd19_35291239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'btnname' => 
  array (
    0 => 'Block_159237892060c5c39203dd19_35291239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Next<?php
}
}
/* {/block 'btnname'} */
}
