<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/dialog.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $join_info; ?><span>|</span>
		<a href="<?php echo url('admin/form/list',array('status'=>1,'modelid'=>$modelid,'cid'=>$cid)); ?>" <?php if ($status==1) { ?>class="on"<?php } ?>><em><?php echo lang('a-con-20'); ?>(<?php echo $count[1]; ?>)</em></a><span>|</span>
		<a href="<?php echo url('admin/form/list',array('status'=>0,'modelid'=>$modelid,'cid'=>$cid)); ?>" <?php if ($status==0) { ?>class="on"<?php } ?>><em><?php echo lang('a-con-21'); ?>(<?php echo $count[0]; ?>)</em></a><span>|</span>
		<a href="<?php echo url('admin/form/list',array('status'=>3,'modelid'=>$modelid,'cid'=>$cid)); ?>" <?php if ($status==3) { ?>class="on"<?php } ?>><em><?php echo lang('a-con-23'); ?>(<?php echo $count[3]; ?>)</em></a><span>|</span>
		<?php if (admin_auth($userinfo['roleid'], 'form-add')) { ?><a href="<?php echo url('admin/form/add',array('modelid'=>$modelid, 'cid'=>$cid)); ?>"><em><?php echo lang('a-con-24'); ?></em></a><span>|</span><?php }  if (admin_auth($userinfo['roleid'], 'form-config')) { ?><a href="<?php echo url('admin/form/config',array('modelid'=>$modelid, 'cid'=>$cid)); ?>"><em><?php echo lang('a-con-60'); ?></em></a><span>|</span><?php } ?>
		<a href="<?php echo $site_url;  echo url('form/post',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" target="_blank"><em><?php echo lang('a-con-61'); ?></em></a><span>|</span>
		<a href="<?php echo $site_url;  echo url('form/list',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" target="_blank"><em><?php echo lang('a-con-62'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
		<form action="" method="post">
		<input name="form" type="hidden" value="search" />
		userid：
		<input type="text" class="input-text" size="5" name="userid" />
		<?php echo lang('a-con-63'); ?>：
		<select id="stype" name="stype">
			<option value="0"> ---- </option>
			<?php if (is_array($model['fields']['data'])) { $count=count($model['fields']['data']);foreach ($model['fields']['data'] as $t) { ?>
			<option value="<?php echo $t['field']; ?>"><?php echo $t['name']; ?></option>
			<?php } } ?>
		</select>
		&nbsp;&nbsp;
		<input type="text" class="input-text" size="25" name="kw" />
		<input type="submit" class="button" value="<?php echo lang('a-search'); ?>" name="submit" />
		</form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post" name="myform">
		<input name="form" id="list_form" type="hidden" value="order" />
		<table width="100%">
		<?php include $this->_include($tpl); ?>
		<tr>
			<td colspan="99" align="left">
			<input <?php if (!admin_auth($userinfo['roleid'], 'form-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-order'); ?>" name="submit_order" onClick="$('#list_form').val('order')" />&nbsp;
			<input <?php if (!admin_auth($userinfo['roleid'], 'form-del')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-del'); ?>" name="submit_del" onClick="$('#list_form').val('del');return confirm_del()" />&nbsp;
			<input <?php if (!admin_auth($userinfo['roleid'], 'form-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-36'); ?>" name="submit_status_1" onClick="$('#list_form').val('status_1')" />&nbsp;
			<input <?php if (!admin_auth($userinfo['roleid'], 'form-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-37'); ?>" name="submit_status_0" onClick="$('#list_form').val('status_0')" />&nbsp;
			<input <?php if (!admin_auth($userinfo['roleid'], 'form-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-39'); ?>" name="submit_status_3" onClick="$('#list_form').val('status_3')" />&nbsp;
			<?php if ($join) {  echo lang('a-con-65'); ?>：
			<input type="text" class="input-text" size="10" name="toid" />
			<input <?php if (!admin_auth($userinfo['roleid'], 'form-edit')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-con-66'); ?>" name="submit_join" onClick="$('#list_form').val('join')" />&nbsp;
			<?php } ?>
			</td>
		</tr>
        <?php if ($diy_file) { ?>
        <tr>
            <td colspan="99" align="left" style="font-size:12px">
               当前使用的是表单格式默认模板（views/admin/form_default.html），您可以将默认模板文件复制命名为（<?php echo $diy_file; ?>），这样方便您重新布局列表显示。
            </td>
        </tr>
        <?php } ?>
        </tbody>
		</table>
		<?php echo $pagelist; ?>
		</form>
	</div>
</div>
<script type="text/javascript">
$(function(){
    window.top.art.dialog({id:'clz'}).close();
});
function confirm_del() {
    if (confirm('<?php echo lang('a-confirm'); ?>')) { 
		return true; 
	} else {
	    return false;
	}
}
function setC() {
	if($("#deletec").attr('checked')) {
		$(".deletec").attr("checked",true);
	} else {
		$(".deletec").attr("checked",false);
	}
}
</script>
</body>
</html>