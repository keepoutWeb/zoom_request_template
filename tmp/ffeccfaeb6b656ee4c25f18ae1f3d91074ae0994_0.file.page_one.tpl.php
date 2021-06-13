<?php
/* Smarty version 3.1.39, created on 2021-06-11 08:33:20
  from 'C:\xampp\htdocs\zoom\views\page_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c303b00b9704_28057971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffeccfaeb6b656ee4c25f18ae1f3d91074ae0994' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zoom\\views\\page_one.tpl',
      1 => 1623393198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c303b00b9704_28057971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136880629960c303b00a9d00_74580026', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20470837160c303b00adb82_60496857', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129968009660c303b00b1a03_40864925', 'personal');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18022227260c303b00b5882_66501958', 'progress');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_136880629960c303b00a9d00_74580026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_136880629960c303b00a9d00_74580026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Personal Details<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_20470837160c303b00adb82_60496857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_20470837160c303b00adb82_60496857',
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
class Block_129968009660c303b00b1a03_40864925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'personal' => 
  array (
    0 => 'Block_129968009660c303b00b1a03_40864925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Full Name *</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="fullname" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Office/Department/College *</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="office_dept_college" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Position/Designation *</label>
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
class Block_18022227260c303b00b5882_66501958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'progress' => 
  array (
    0 => 'Block_18022227260c303b00b5882_66501958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
50%<?php
}
}
/* {/block 'progress'} */
}
