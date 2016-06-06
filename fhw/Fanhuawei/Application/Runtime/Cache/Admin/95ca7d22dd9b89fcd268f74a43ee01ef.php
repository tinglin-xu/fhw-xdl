<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/lamp/Fanhuawei/Public/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/lamp/Fanhuawei/Public/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/lamp/Fanhuawei/Public/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/lamp/Fanhuawei/Public/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>编辑用户</title>
</head>
<body>
<div class="pd-20">
  <form action="<?php echo U('Useredit/doEdit');?>" method="post" class="form form-horizontal" id="form-member-add">
  <input type="hidden" value="<?php echo ($id); ?>" name="uid">
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>账号：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo ($info["username"]); ?>" placeholder="6-20位开头为字母的用户名" id="member-username" name="member-username" datatype="*6-20" nullmsg="账号不能为空">
      </div>
      <div class="col-4"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>用户名：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo ($info["name"]); ?>" placeholder="真实名称" id="member-name" name="member-name" datatype="*" nullmsg="用户名不能为空">
      </div>
      <div class="col-4"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>性别：</label>
      <div class="formControls col-5 skin-minimal">
      <?php if($info['sex']==1): ?><div class="radio-box">
          <input type="radio" id="sex-1" name="sex" value="1" datatype="*" nullmsg="请选择性别！" checked>
          <label for="sex-1">男</label>
        </div>
        <div class="radio-box">
          <input type="radio" id="sex-2" value="0" name="sex">
          <label for="sex-2">女</label>
        </div>
        <?php else: ?>
         <div class="radio-box">
          <input type="radio" id="sex-1" name="sex" value="1" datatype="*" nullmsg="请选择性别！">
          <label for="sex-1">男</label>
        </div>
        <div class="radio-box">
          <input type="radio" id="sex-2" value="0" name="sex" checked>
          <label for="sex-2">女</label>
        </div><?php endif; ?>
      </div>
      <div class="col-4"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>手机：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" value="<?php echo ($info["tel"]); ?>" placeholder="11位手机号码" id="member-tel" name="member-tel"  datatype="m" nullmsg="手机不能为空">
      </div>
      <div class="col-4"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>邮箱：</label>
      <div class="formControls col-5">
        <input type="text" class="input-text" placeholder="@" name="email" id="email" datatype="e" nullmsg="请输入邮箱！" value="<?php echo ($info["email"]); ?>">
      </div>
      <div class="col-4"> </div>
    </div>
    <!-- <div class="row cl">
      <label class="form-label col-3">附件：</label>
      <div class="formControls col-5"> <span class="btn-upload form-group">
        <input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly  datatype="*" nullmsg="请添加附件！" style="width:200px">
        <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
        <input type="file" multiple name="file-2" class="input-file">
        </span> </div>
      <div class="col-4"> </div>
    </div> -->
   <!--  <div class="row cl">
      <label class="form-label col-3">所在城市：</label>
      <div class="formControls col-5"> <span class="select-box">
        <select class="select" size="1" name="demo1" datatype="*" nullmsg="请选择所在城市！">
          <option value="" selected>请选择城市</option>
          <option value="1">北京</option>
          <option value="2">上海</option>
          <option value="3">广州</option>
        </select>
        </span> </div>
      <div class="col-4"> </div>
    </div> -->
    <!-- <div class="row cl">
      <label class="form-label col-3">备注：</label>
      <div class="formControls col-5">
        <textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,100)"></textarea>
        <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
      </div>
      <div class="col-4"> </div>
    </div> -->
    <div class="row cl">
      <div class="col-9 col-offset-3">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
      </div>
    </div>
  </form>
</div>
</div>
<script type="text/javascript" src="/lamp/Fanhuawei/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/lamp/Fanhuawei/Public/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/lamp/Fanhuawei/Public/lib/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/lamp/Fanhuawei/Public/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/lamp/Fanhuawei/Public/js/H-ui.js"></script> 
<script type="text/javascript" src="/lamp/Fanhuawei/Public/js/H-ui.admin.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-member-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			// parent.layer.close(index);
		}
	});
});

</script>
</body>
</html>