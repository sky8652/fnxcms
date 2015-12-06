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
<script type="text/javascript" src="<?php echo EXT_PATH; ?>edit_area/edit_area_full.js"></script>
<script type="text/javascript" src="<?php echo LANG_PATH; ?>edit_area.js"></script>
<script type="text/javascript">
	setTimeout('$("#myok").hide()', 3000);
editAreaLoader.init({
	id: 'file_content'
	,start_highlight: true
	,allow_toggle: true
	,word_wrap: true
	,language: '<?php echo SYS_LANGUAGE; ?>'
	,syntax: '<?php echo $syntax; ?>'	//语法
});
function show_edit(id) {
	if (id == 2) {
		$('#file_edit').hide();
	} else {
		$('#file_edit').show();
	}
}
</script>
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
		<a href="<?php echo url('admin/theme/index')?>"><em><?php echo lang('a-men-47'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/theme/add', array('cpath'=>$cpath))?>" class="on"><em><?php echo lang('a-add'); ?></em></a><span>|</span>
		<a href="<?php echo url('admin/theme/cache')?>"><em><?php echo lang('a-cache'); ?></em></a>
    </div>
	<div class="bk10"></div>
	<div class="table-list">
		<?php if (!$iswrite) { ?>
		<div class="explain-col" style="color:red">
		    <b><?php echo lang('a-con-125', array('1'=>VIEW_DIR . basename(SITE_THEME))); ?></b>
		</div>
		<?php } ?>
		<div class="bk10"></div>
		<form method="post" action="" id="myform" name="myform">
		<table width="100%" class="table_form" style="margin-bottom:10px;">
		<tr>
			<td align="left">
			<?php if ($a=='add') { ?>
			<select name="filetype" onChange="show_edit(this.value)">
			<option value="1"><?php echo lang('a-con-126'); ?></option>
			<option value="2"><?php echo lang('a-mod-160'); ?></option>
			</select>
			<?php } else {  echo lang('a-con-126'); ?>：
			<?php }  if ($action=='add') {  echo $path; ?> <input type="text" class="input-text" size="20" value="" name="file">
			<div class="onShow"><?php echo lang('a-con-127'); ?></div><?php } else {  echo $name;  } ?></td>
		</tr>
		<tr id="file_edit">
			<td align="left"> 
			<textarea id="file_content" style="height: 300px; width: 100%;" name="file_content"><?php echo htmlspecialchars($file); ?></textarea>
			</td>
		</tr>
		<tr>
			<td align="left"><input type="submit" class="button" value="<?php echo lang('a-submit'); ?>" name="submit">

				<?php if ($is_post) { ?>
				<b style="color: green" id="myok">&nbsp;&nbsp;保存成功</b>
				<?php } ?>
			</td>
		</tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>
