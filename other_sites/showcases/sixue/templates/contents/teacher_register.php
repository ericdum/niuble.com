<div class="registerPrimaryNav clearfix">
    <img src="./images/banner_tengfei.png" alt="私学堂，给你一个腾飞的平台" />
    <ul class="controller clearfix tabAction" tabAction="#registerStep">
        <li class="active">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul>
</div>
<div class="glassBodyTop"></div>
<div class="registerContainer glassBody clearfix"><div class="registerLayout">
<form>
    <div id="registerStep1" class="clearfix" style="">
        {#include file="./register_includes/teacher/step1.php"#}
    </div>
    <div id="registerStep2" class="clearfix" style="display:none;">
        {#include file="./register_includes/teacher/step2.php"#}
    </div>
    <div id="registerStep3" class="clearfix" style="display:none;">
        {#include file="./register_includes/teacher/step3.php"#}
    </div>
    <div id="registerStep4" class="clearfix teacherSuccess" style="display:none;">
        {#include file="./register_includes/teacher/step4.php"#}
    </div>
</form>
</div></div>
<div class="glassBodyBottom"></div>
