<?php
    include 'common/header.php';
?>
<link rel="stylesheet" href="css/personal.min.css">
<style>
    .login-wrap a{color:#333;}
    .login-wrap a:hover{color:#FF5864;}
</style>
<section>
    <div class="right login text-center">
        <h4 class="text-left">账号登录</h4>
        <div class="login-wrap text-align">
            <div class="login-public"><span class="user">账号</span><input type="text"></div>
            <div class="login-public"><span class="password">密码</span><input type="password"></div>
            <button>登录</button>
            <a href="#">免费注册</a>
        </div>
        <div class="login-wrap text-align hide">
            <div class="login-public"><span class="user">账号</span><input type="text"></div>
            <div class="login-public"><span class="password">密码</span><input type="password"></div>
            <div class="login-public"><span class="password">确认</span><input type="password"></div>
            <button>免费注册</button>
            <a href="#">已有账号,立即登录</a>
        </div>
    </div>
</section>
<script>
    $('a').click(function () {
        $(this).parent().siblings('.login-wrap').removeClass('hide');
        $(this).parent().addClass('hide');
    })
</script>


<?php
    include 'common/footer.php';
?>
