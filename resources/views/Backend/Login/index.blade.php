
<!DOCTYPE html>
<html>
<head>
    <title>后台登陆入口</title>
    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('assets/styles.css')}}" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="{{asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>
<body id="login">
<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading" style="display: none">登陆嘟嘟宠物医院</h2>
        <input type="text" class="input-block-level" placeholder="用户名">
        <input type="password" class="input-block-level" placeholder="密码">
        <button class="btn btn-large btn-primary" type="submit">登陆</button>
    </form>

</div> <!-- /container -->
<script src="{{asset('vendors/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>