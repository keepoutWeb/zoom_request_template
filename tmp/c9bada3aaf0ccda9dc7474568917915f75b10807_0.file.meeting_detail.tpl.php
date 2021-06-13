<?php
/* Smarty version 3.1.39, created on 2021-06-13 10:46:39
  from 'C:\xampp\htdocs\zoom\views\meeting_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c5c5ef8ed8a9_32228957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9bada3aaf0ccda9dc7474568917915f75b10807' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zoom\\views\\meeting_detail.tpl',
      1 => 1623573961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5c5ef8ed8a9_32228957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146926699460c5c5ef8e8e16_42459226', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64055236060c5c5ef8ea146_30359346', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81021044160c5c5ef8eae48_25550420', 'personal');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55572997360c5c5ef8ebdc0_33201845', 'progress');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94897048960c5c5ef8ecc48_75842882', 'btnname');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_146926699460c5c5ef8e8e16_42459226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_146926699460c5c5ef8e8e16_42459226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Meeting Details<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_64055236060c5c5ef8ea146_30359346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_64055236060c5c5ef8ea146_30359346',
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
class Block_81021044160c5c5ef8eae48_25550420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'personal' => 
  array (
    0 => 'Block_81021044160c5c5ef8eae48_25550420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="hr-text hr-text-center hr-text-spaceless">Meeting/Activity details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Institutional Email Address: (to be used as a host) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="email" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Date <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input id="date_picker" name="date_picker" readonly/>
                <?php echo '<script'; ?>
>
                    let do_today, do_datepicker;
                    do_today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                    do_datepicker = $('#date_picker').datepicker({
                        uiLibrary: 'bootstrap4',
                        format: 'yyyy-mm-dd'
                    });
                <?php echo '</script'; ?>
>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Time <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input id="timepicker" name="timepicker" width="100%" readonly/>
                <?php echo '<script'; ?>
>
                    $('#timepicker').timepicker({ uiLibrary: 'materialdesign', format: 'hh:MM tt' });
                <?php echo '</script'; ?>
>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Meeting/Webinar Topic <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="topic" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Number of Participants: (Approx) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="number" class="form-control ps-1" id="no_participant" autocomplete="off">
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'personal'} */
/* {block 'progress'} */
class Block_55572997360c5c5ef8ebdc0_33201845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'progress' => 
  array (
    0 => 'Block_55572997360c5c5ef8ebdc0_33201845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
100%<?php
}
}
/* {/block 'progress'} */
/* {block 'btnname'} */
class Block_94897048960c5c5ef8ecc48_75842882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'btnname' => 
  array (
    0 => 'Block_94897048960c5c5ef8ecc48_75842882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Submit<?php
}
}
/* {/block 'btnname'} */
}
