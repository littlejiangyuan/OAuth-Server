<?php if (!defined('THINK_PATH')) exit();?><body>
<div style="text-align:center;">
<h2>Test系统二</h2>
 	<form method="post">
      	<div class="oauth_content" node-type="commonlogin">
        	<p class="oauth_main_info"> 授权  第三方平台 </p>
			<input name="authorized" value="yes" hidden>
			姓名:<input name="username" ><br/>
			密码:<input name="pass" ><br/>
			<button>登陆</button>
			<!--这里做登陆检查：未登录要求登陆，已登陆直接授权-->
		</div>
    </form>
    	
   	</div>
</body>
</html>