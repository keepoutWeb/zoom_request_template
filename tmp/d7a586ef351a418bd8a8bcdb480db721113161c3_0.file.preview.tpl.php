<?php
/* Smarty version 3.1.39, created on 2021-06-13 15:08:53
  from 'C:\xampp\htdocs\zoom\views\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c603657bc7e3_84648570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7a586ef351a418bd8a8bcdb480db721113161c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zoom\\views\\preview.tpl',
      1 => 1623589732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c603657bc7e3_84648570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95776424060c603657babb7_60234736', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69234426760c603657bbd33_06539871', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_95776424060c603657babb7_60234736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_95776424060c603657babb7_60234736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Preview<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_69234426760c603657bbd33_06539871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_69234426760c603657bbd33_06539871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card-body py-4">
        <h1 class="text-center">Zoom Account License Request Form (PREVIEW)</h1>
    </div>
    <div class="hr-text hr-text-center hr-text-spaceless">Personnel Details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Full Name </label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="fullname" autocomplete="off" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Office/Department/College</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="office_dept_college" autocomplete="off" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Position/Designation</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="position_designation" autocomplete="off" readonly>
            </div>
        </div>
    </div>
    <div class="hr-text hr-text-center hr-text-spaceless">Meeting/Activity details</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Institutional Email Address: (to be used as a host) </label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="email" autocomplete="off" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Date</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="date_picker" autocomplete="off" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Time</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="timepicker" autocomplete="off" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Meeting/Webinar Topic</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="topic" autocomplete="off" readonly>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Number of Participants: (Approx)</label>
            <div class="input-group input-group-flat">
                <input type="text" class="form-control ps-1" id="no_participant" autocomplete="off" readonly>
            </div>
        </div>
<?php
}
}
/* {/block 'content'} */
}
