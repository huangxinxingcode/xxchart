<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>小新微信公众号管理平台</title>
<link type="text/css" rel="stylesheet"
	href="./Public/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet"
	href="./Public/Css/Home/index.css">
<script type="text/javascript" src="./Public/Js/Plugin/Jquery-2.2.0.min.js"></script></head>
<body  scroll="no">
<!-- 加载进度条 -->
<div id="progress" style="width: 100%;" >
    <span></span>
</div>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Public/Css/Common/head-foot.css">
</head>
<body>
<div class="head">
     <div class="logo">
     	<a href="/" title="小新微信公众管理平台"></a>
     </div>
   	 <div class="nav">
   	 <span class='nav-tip'>
      第一次使用公众号管理平台？<a href="#">立即注册</a>
     </span>	
   	</div>
</div>

</body>
</html>

<div class="container-fluid">
    <div class="row">
	

	</div>
</div>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Public/Css/Common/head-foot.css">
</head>
<body>
<div class="footer">
    <div class="copyright">
      <span>Copyright © 2015-2016 小新科技. All Rights Reserved.</span>
    </div>
</div>

</body>
</html>
	    
</body>
<script type="text/javascript">
      <!--loading条-->
         $({property: 0}).animate({property: 100}, {
                duration: 3000,
                step: function() {
                    var percentage = Math.round(this.property);
                    $('#progress').css('width',  percentage+"%");
                     if(percentage == 100) {
                         $("#progress").addClass("done");//完成，隐藏进度条
                     }
                }
            });
</script>
</html>