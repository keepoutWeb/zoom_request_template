<?php
/* Smarty version 3.1.39, created on 2021-06-13 16:06:34
  from 'C:\xampp\htdocs\zoom\views\meeting_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c610ea696bd9_65921910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9bada3aaf0ccda9dc7474568917915f75b10807' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zoom\\views\\meeting_detail.tpl',
      1 => 1623593190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c610ea696bd9_65921910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22415341960c610ea687065_49029654', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33793277560c610ea688358_94041406', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44427317960c610ea693256_81716937', 'progress');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100797292860c610ea6948b5_98576278', 'btnobject');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_22415341960c610ea687065_49029654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_22415341960c610ea687065_49029654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Meeting Details<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_33793277560c610ea688358_94041406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33793277560c610ea688358_94041406',
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
    <div class="hr-text hr-text-center hr-text-spaceless">Meeting/Activity details</div>
    <div class="card-body">
        <div class="mb-3">
            <input type="hidden" class="form-control ps-1" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['fullname'];?>
" readonly>
            <input type="hidden" class="form-control ps-1" id="office_dept_college" name="office_dept_college" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['office_dept_college'];?>
" readonly>
            <input type="hidden" class="form-control ps-1" id="position_designation" name="position_designation" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['position_designation'];?>
" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Institutional Email Address: (to be used as a host) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="email" name="email" autocomplete="off">
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
                <input type="text" class="form-control ps-1" id="topic" name="topic" autocomplete="off">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Number of Participants: (Approx) <span class="text-red">*</span></label>
            <div class="input-group input-group-flat">
                <input type="number" class="form-control ps-1" id="no_participant" name="no_participant" autocomplete="off">
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'progress'} */
class Block_44427317960c610ea693256_81716937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'progress' => 
  array (
    0 => 'Block_44427317960c610ea693256_81716937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
100%<?php
}
}
/* {/block 'progress'} */
/* {block 'btnobject'} */
class Block_100797292860c610ea6948b5_98576278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'btnobject' => 
  array (
    0 => 'Block_100797292860c610ea6948b5_98576278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="javascript:void(0)" class="btn btn-success" title="Preview" data-bs-toggle="modal" data-bs-target="#modal-preview">Preview</a>
    <input type="submit" name="submit" id="btnnext" class="btn btn-primary" value="Submit"></input>
<?php
}
}
/* {/block 'btnobject'} */
}
