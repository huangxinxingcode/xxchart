angular.module('home', [])
.config(['$httpProvider',function ($httpProvider) {
	// http请求
	$httpProvider.defaults.transformResponse = $httpProvider.defaults.transformResponse.concat(function(res){
		// 页面重定向
		if (res.code == 302 || res.code == 301) {
			window.location.href = res.redirect;
		}
		// 用户未登录
		else if (res.code == 601) {
			login ({
				success: function() {}
			});
		}

		return res;
	});
}])
.controller('UserController',
['$scope', '$http', 
function($scope, $http) {
	$scope.username = '';
	$scope.vcode    = '';
	$scope.password = '';
	$scope.register = function(){
    	if(verifyAccount($scope.username) && verifyVCode($scope.vcode) && verifyPassword($scope.password)){
    		/*var url = '/User/adminPayOrder/getPayOrderListByPage';
    		var scope = $scope;
    		var rows = $.trim(15);
    		jQueryAjaxPost(host + url,
    			{  
    			    mchId:scope.mchId,
    			    startTime:scope.startTime,
    			    endTime:scope.endTime,
    				page:$.trim(page),
    				rows:rows,
    			},function(res){
    				if(res.code == 0) {					
    				
    					
    				}else{
    					util.showTopModalError(res.description);
    				}
    			}, 'json');*/
    		
    	}
    }     
   
	$scope.errorHide = function(){
		 //$('.error-tip').css('display','none');
	}
    // 校验帐号
    function verifyAccount(username){
        var r = true;
        if (username == '') {
        	 $('.error-tip').html('帐号不能为空！');
            r = false;
        }
        else if (!/^\d*$/.test(username) && !/^.*@.*$/.test(username)) {
            $('.error-tip').html('帐号格式错误！');
            r = false;
        }
        return r;
    }
    

    // 校验密码
    function verifyPassword(password){
        var r = true;
        if (password == '') {
        	 $('.error-tip').html('密码不能为空！');
            r = false;
        }
        else if (password.length < 6) {
        	 $('.error-tip').html('密码长度不能小于6位！');
            r = false;
        }
        else if (password.length > 20) {
             $('.error-tip').html('密码长度不能大于20位！');
            r = false;
        }
        return r;
    }
    
    // 校验验证码
    function verifyVCode(vcode){
        var r = true;
        if (vcode == '') {
             $('.error-tip').html('验证码不能为空！');
            r = false;
        }
        return r;
    }
    
    // ====================================
    // 验证码
    // ====================================

    // 手机或邮箱验证码
    var vcodeBtn = $('#vcode-btn');

    var total = 60,
        vcodeCounter = total,
        step = 1000;

    var interval;

    // 点击“获取验证码”时给用户发送验证码
    vcodeBtn.on('click', function(){

        var url = '/Home/user/sendIdentifyingCode?username='+$.trim(jqAccount.val())+'&token='+token;

        $.get(url, function(res){
            if (res.code != 0) {
                 $('.error-tip').html(res.description);
            }
            else {
                vcodeCounter = total;
                vcodeBtn.text('重获验证码 '+vcodeCounter).attr('disabled', true).css('background-color', '#eee');

                interval = setInterval(function(){
                    if (vcodeCounter <= 1) {
                        clearInterval(interval);
                        vcodeBtn.text('获取验证码').attr('disabled', false).css('background-color', 'inherit');
                        return;
                    }

                    vcodeBtn.text('重获验证码 '+ (--vcodeCounter));
                }, step);
            }
        }, 'json');
    });


    
	
}]);