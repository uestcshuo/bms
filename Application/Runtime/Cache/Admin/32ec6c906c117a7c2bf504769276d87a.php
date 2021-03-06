<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>海淀区清河学区管理中心图书管理系统</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/bms/Public/adminlogin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bms/Public/adminlogin/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bms/Public/adminlogin/css/form-elements.css">
    <link rel="stylesheet" href="/bms/Public/adminlogin/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->

    <script type="text/javascript" src="/bms/Public/adminlogin/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).on('keydown', function(event){
            if(event.keyCode == 13){
                $('#submit').click();
            }
        });
        function login()
        {
            var $formBody = $('#form-body');
            $.post('/bms/index.php/Admin/Login/dologin', $formBody.serialize(),
                    function(rep, status) {
                        if ("登录成功" == rep) {
                            window.location.href = "/bms/index.php/Admin/Frame";
                        }
                        else {
                            alert("登录失败");
                        }
                    }
            );
        };
    </script>

</head>

<body style="background-color:#009fe6">
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container" style="width:1200px;">
            <div class="row">
                <div class="col-sm-6" style="width:600px;">
                    <img src="/bms/Public/adminlogin/img/2.jpg" />
                </div>
                <div class="col-sm-5 mart70" style="width:550px;">
                    <div class="form-top">
                        <div class="">
                            <h3>海淀区清河学区管理中心图书管理系统</h3>
                        </div>
                        <!--<div class="form-top-right">-->
                            <!--<i class="fa fa-key blue"></i>-->
                        <!--</div>-->
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="" method="post" class="login-form"  id="form-body">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">用户名</label>
                                <input type="text" name="emp_account" value="<?php echo ($emp_account); ?>" placeholder="用户名" class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">密码</label>
                                <input type="password" name="emp_password" value="<?php echo ($emp_password); ?>" placeholder="密码" class="form-password form-control" id="form-password">
                            </div>
                            <button id="submit" type="button" class="btn btn-info" onclick="login()">登录</button>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="pull-left">
                                        <input type="checkbox" name="remember" value="1" id="remember" <?php if(('1' == $remember)): ?>checked<?php endif; ?>>&nbsp;&nbsp;记住密码
                                    </label>
                                </div>
                                <div class="col-sm-6">
                                    <label class="pull-right">
                                        <a id="forget" href="#">忘记密码?</a>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#forget').on('click', function(){
        alert('请联系管理员查询密码');
    });
</script>
</body>
</html>