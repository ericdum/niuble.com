<?php /* Smarty version Smarty-3.1.6, created on 2011-12-19 21:30:31
         compiled from "/Users/ericdum/Sites/work/sixue365/1/templates/contents/register_includes/teacher/step3.php" */ ?>
<?php /*%%SmartyHeaderCode:10694164254eee7e64c49c98-85267441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd33d9bdae3771c252299843aab4f2c16ec2278c' => 
    array (
      0 => '/Users/ericdum/Sites/work/sixue365/1/templates/contents/register_includes/teacher/step3.php',
      1 => 1324255720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10694164254eee7e64c49c98-85267441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4eee7e64c4eec',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eee7e64c4eec')) {function content_4eee7e64c4eec($_smarty_tpl) {?><div class="title clearfix">
    <div class="textPhoneHelp"></div>
    <div class="textNoMoreLess"></div>
</div>
<ul class="generalForm">
    <li>
        <label>简历：</label>
        <input type="text" disabled/>
        <a href="javascript:void(0)" class="browse">选择文件</a>
        <input type="file" class="hiddenFile" name="name"/>
    </li>
    <li>
        <label>资质证明：</label>
        <input type="text" disabled/>
        <a href="javascript:void(0)" class="browse">选择文件</a>
        <input type="file" class="hiddenFile" name="name"/>
    </li>
    <li>
        <label></label>
        <a href="javascript:void(0);" class="grayButton Button40">跳过</a>
        <a href="javascript:void(0);" class="generalButton Button40">上传</a>
    </li>
<ul>
<?php }} ?>