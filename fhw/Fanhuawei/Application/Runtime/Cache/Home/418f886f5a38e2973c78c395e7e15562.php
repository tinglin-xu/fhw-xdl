<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="zh-cn">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>个人信息_个人中心_华为商城</title>
<link rel="shortcut icon" href="#">
<link href="/lamp/Fanhuawei/Public/Css/person/ec.core.css" rel="stylesheet" type="text/css">
<link href="/lamp/Fanhuawei/Public/Css/person/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/lamp/Fanhuawei/Public/js/dropzone.js"></script>
<link rel="stylesheet" type="text/css" href="/lamp/Fanhuawei/Public/css/dropzone.css">
<script type="text/javascript" src="/lamp/Fanhuawei/Public/js/jquery-1.10.2.min.js"></script>
</head>

<body>


<!-- 导航 -->


<div class="g">
    <div class="fl u-4-5"><!--栏目 -->
		<div class="part-area clearfix">
			<div class="fl">
				<h3 class="userInfo-title"><span>个人信息</span></h3>
			</div>
		</div>
		<div class="hr-20"></div>
		<!--个人信息 -->
		<div class="userInfo-area">
			<form id="personal-save" action="<?php echo U('PersonCenter/doUserDetail');?>" autocomplete="off" method="post" enctype="multipart/form-data" onsubmit="return return false;">
				<div class="userInfo-form-title">
					<b>基本信息</b>
					<span>（带<em>*</em>为必填项目）</span>
				</div>
				<div class="form-edit-area">
					<div class="form-edit-table">
						<table border="0" cellpadding="0" cellspacing="0" width="90%">
							<tbody>
								<tr>
									<th>用户头像：</th>
									<td><img width="100px" height="100px" src="/lamp/Fanhuawei/Public/<?php echo ($info["avatar"]); ?>"></td>
								</tr>
								<tr>
									<th>用&nbsp;&nbsp;户&nbsp;&nbsp;名：</th>
									<td><span><?php echo ($info["username"]); ?></span>
										
									</td>
								</tr>
								<tr>
									<th><span class="required">*</span>真实姓名：</th>
									<td><input maxlength="20" name="true_name" id="true_name" type="text" class="text vam span-200" value="<?php echo ($list["name"]); ?>" ></td>
								</tr>
								<?php if(empty($info['email'])): ?><tr>
									<th><span class="required">*</span>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</th>
									<td><input maxlength="20" name="email" type="text" class="text vam span-200 input-text" value="<?php echo ($info["email"]); ?>"  id="user_email" datatype="e" nullmsg="请输入邮箱！"><input type="text" name="check" style="border-width:0px;color:red" /></td>
								</tr>
								<?php else: ?>
								<tr>
									<th><span class="required">*</span>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</th>
									<td><?php echo ($info["email"]); ?></td>
								</tr><?php endif; ?>
								
								<tr>
									<th><span class="required">*</span>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</th>
									<td>
									   <?php if($list['sex'] == 0): ?><input name="sex" id="woman" type="radio" class="radio vam" value="0" checked>
										<label for="woman" class="vam">女</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<input name="sex" id="man" type="radio" class="radio vam" value="1" >
										<label for="man" class="vam">男</label>
										<?php else: ?>
										<input name="sex" id="woman" type="radio" class="radio vam" value="0">
										<label for="woman" class="vam">女</label>&nbsp;&nbsp;&nbsp;&nbsp;
										 <input name="sex" id="man" type="radio" class="radio vam" value="1" checked>
										 <label for="man" class="vam">男</label><?php endif; ?>
									</td>
								</tr>
								<tr>
									<th>注册时间：</th>
									<td><?php echo (date("Y-m-d H:i:s",$info["regtime"])); ?></td>
								</tr>
								<tr>
									<th>头像上传：</th>
									<td><input type="file" name="userphoto" id='user_photo'></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="form-edit-action">
				     
					<input type="submit" id="user_info_submit" class="button-action-save vam" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input class="button-action-cancel-2 vam" value=" " type="reset">
				</div>
				<input type="hidden" id="randomFlag" value="ed8df6720c0590632d7f2ed0425b171a">
			</form>
			<!-- 个人中心会员专享信息 -->
			<p><br></p>	
		</div>
	</div>
<script type="text/javascript">
 $(function(){
     var user_info_submit=$("#user_info_submit");//提交按钮
	
	  //单击按钮进行验证
     user_info_submit.click(function(){
             var submit_status=1;
		     var true_name=$("#true_name").val(); //真实姓名
			 var user_email=$("#user_email").val(); //用户的邮箱
			 var user_photo=$('#user_photo').val();//图片参数
			 var sexid;
			 var user_sex=$("input[name=sex]");//用户性别
			 for(var i = 0; i < user_sex.length; i++)
			 {
				if(user_sex[i].checked)
				exid=i;
			 }
             if(true_name.length<1){
			      alert("真实姓名不能为空!");
				  submit_status=0;
				  return ;
			 }
			    //进行后台提交修改

 });
 });

 $(function(){
  $(":input[name='email']").blur(function(){
   var email = $(this).val();
   var reg = /\w+[@]{1}\w+[.]\w+/;
   if(reg.test(email)){
    $(":input[name='check']").val("email合法");
   }else{
    $(":input[name='check']").val("请输入正确的email地址");
   }
  });
 });


</script>
	
	</div>
	<div class="hr-60"></div>
<!--口号-20121025 -->

	</body>
</html>