<?php /* Smarty version Smarty-3.1.6, created on 2012-01-03 16:49:49
         compiled from "/Users/ericdum/Sites/work/sixue365/1/templates/contents/register_includes/search-teacher.php" */ ?>
<?php /*%%SmartyHeaderCode:19082183634eee7d5abab409-98850470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2c7e1a48b9f753a954ca1492f7eb2b9a1b95ad7' => 
    array (
      0 => '/Users/ericdum/Sites/work/sixue365/1/templates/contents/register_includes/search-teacher.php',
      1 => 1325524156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19082183634eee7d5abab409-98850470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4eee7d5ac48b6',
  'variables' => 
  array (
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4eee7d5ac48b6')) {function content_4eee7d5ac48b6($_smarty_tpl) {?><div id="registerForm2" class="clearfix marginTop10">
    <ul class="teacherSearchForm popupInputs clearfix">
        <li class="clearfix">
            <span class="bold">课程要求：</span>
            <div class="floatRight relative">
                <input disabled type="text" class="inputer"/>
                <?php echo $_smarty_tpl->getSubTemplate ("./popups/class.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </li>
        <li class="clearfix">
            <span class="bold">课时费用：</span>
            <div class="inputer selector">
                <span>100以下</span> <span>100-200</span> <span>200-300</span> <span class="clickToInput">自定义</span>
            </div>
        </li> 
        <li class="clearfix">
            <span class="bold">所辅导课程成绩情况：</span>
            <div class="inputer sorter selector">
                <span>优秀</span> <span>良好</span> <span>中等</span> <span>较差</span>
            </div>
        </li>
        <li class="clearfix">
            <span class="bold">老师要求：</span>
            <div class="floatRight relative">
                <input disabled type="text" class="inputer"/>
                <?php echo $_smarty_tpl->getSubTemplate ("./popups/teacher.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </li>
        <li class="clearfix">
            <span class="bold">授课时间：</span>
            <div class="floatRight relative">
                <input disabled type="text" class="inputer"/>
                <?php echo $_smarty_tpl->getSubTemplate ("./popups/schedule.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </li>
    </ul>
    <div class="jumpToSignup">
        不想填了？点 <a href="javascript:void(0)">这里</a> 直接注册，<br />
        让你的专属客户经理为你提供<br />
        最专业的服务。
    </div>
</div>
<ul class="teachList clearfix">
    <li teacherID="1"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li teacherID="2"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li teacherID="3"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li teacherID="4"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li class="last" teacherID="5"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li teacherID="6"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li teacherID="7"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li teacherID="8"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li teacherID="9"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
    <li class="last" teacherID="10"><img width="164px" height="164px" src="./images/teacher.png" /><div class="teachBlackInfo">
            <div class="title"><span class="name">罗老师</span><span class="age">56岁</span></div>
            <div class="technical">工业设计</div>
            <div class="basic">多次获得业界大奖,辅导学生无数退休外籍人士撒谎啊赛我....</div>
                    </div></li>
</ul>
<div class="textCenter marginTop10">
    <?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

</div>
<div class="textRight marginTop15 marginBottom20">
    <a href="javascript:$('.registerPrimaryNav .tabAction li:eq(1)').click();" class="nextStep generalButton Button40" >选完了，下一步</a>
</div>
<?php }} ?>