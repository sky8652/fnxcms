<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo ADMIN_THEME; ?>images/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/dialog.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/switchbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ADMIN_THEME; ?>images/table_form.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/jquery.min.js"></script>
<script language="javascript">var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";</script>
<script language="javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>lang.js"></script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
	<?php echo $join_info; ?><span>|</span>
	<a href="<?php echo url('admin/form/list',array('status'=>1,'modelid'=>$modelid,'cid'=>$cid)); ?>"><em><?php echo lang('a-con-20'); ?>(<?php echo $count[1]; ?>)</em></a><span>|</span>
	<a href="<?php echo url('admin/form/list',array('status'=>0,'modelid'=>$modelid,'cid'=>$cid)); ?>"><em><?php echo lang('a-con-21'); ?>(<?php echo $count[0]; ?>)</em></a><span>|</span>
	<a href="<?php echo url('admin/form/list',array('status'=>3,'modelid'=>$modelid,'cid'=>$cid)); ?>"><em><?php echo lang('a-con-23'); ?>(<?php echo $count[3]; ?>)</em></a><span>|</span>
	<a href="<?php echo url('admin/form/add',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" class="on"><em><?php echo lang('a-con-24'); ?></em></a><span>|</span>
	<?php if (admin_auth($userinfo['roleid'], 'form-config')) { ?><a href="<?php echo url('admin/form/config',array('modelid'=>$modelid, 'cid'=>$cid)); ?>"><em><?php echo lang('a-con-60'); ?></em></a><span>|</span><?php } ?>
	<a href="<?php echo $site_url;  echo url('form/post',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" target="_blank"><em><?php echo lang('a-con-61'); ?></em></a><span>|</span>
	<a href="<?php echo $site_url;  echo url('form/list',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" target="_blank"><em><?php echo lang('a-con-62'); ?></em></a>
	</div>
	<div class="bk10"></div> 
	<div class="table-list">
		<form method="post" action="" id="myform" name="myform">
		<table width="100%" class="table_form">
		<tbody>
		<tr>
			<th width="150"><?php echo lang('a-con-67'); ?>：</th>
			<td><?php echo $model['modelname']; ?></td>
		</tr>
		<?php if ($join) { ?>
		<tr>
			<th><?php echo lang('a-con-68'); ?>：</th>
			<td><input type="text" class="input-text" size="10" value="<?php echo $cid; ?>" name="cid" required /><div class="onShow"><?php echo lang('a-con-69', array('1'=>$join_info)); ?></div></td>
		</tr>
		<?php }  echo $fields; ?>
		<tr>
		<th><?php echo lang('a-con-46'); ?>：</th>
			<td>
			<input type="radio" <?php if (!isset($data['status']) || $data['status']==1) { ?>checked<?php } ?> value="1" name="data[status]" onClick="$('#verify').hide()"> <?php echo lang('a-con-20'); ?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" <?php if (isset($data['status']) && $data['status']==0) { ?>checked<?php } ?> value="0" name="data[status]" onClick="$('#verify').hide()"> <?php echo lang('a-con-21'); ?>
			</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input type="submit" class="button" value="<?php echo lang('a-submit'); ?>" name="submit" onClick="$('#load').show()">
			<span id="load" style="display:none"><img src="<?php echo ADMIN_THEME; ?>images/loading.gif"></span></td>
		</tr>
		</tbody>
		</table>
		<br>
		</form>
	</div>
</div>
</body>
</html>
