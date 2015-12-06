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
	<div class="content-menu ib-a blue line-x" style="padding-top:8px">
	    <a href="<?php echo url('admin/index/log/'); ?>" class="on"><em><?php echo lang('a-ind-43'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="explain-col">
		<form action="" method="post">
		<?php echo lang('a-user'); ?>：<input type="text" class="input-text" size="20" name="kw">
		&nbsp;&nbsp;
		<input type="submit" class="button" value="<?php echo lang('a-search'); ?>" name="submit">
		</form>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form action="" method="post">
		<table width="100%">
		<thead>
		<tr>
			<th width="70" align="left"><?php echo lang('a-user'); ?></th>
			<th width="70" align="left">controller</th>
			<th width="70" align="left">action</th>
			<th width="230" align="left"><?php echo lang('a-option'); ?></th>
			<th width="133" align="left">ip</th>
			<th width="131" align="left"><?php echo lang('a-time'); ?></th>
			<th align="left"><?php echo lang('a-address'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
		<tr height="25">
			<td align="left"><a href="<?php echo url('admin/index/log', array('username'=>$t['username'])); ?>"><?php echo $t['username']; ?></a></td>
			<td align="left"><?php echo $t['controller']; ?></td>
			<td align="left"><?php echo $t['action']; ?></td>
			<td align="left"><?php echo $t['options']; ?></td>
			<td align="left"><a href="http://www.baidu.com/baidu?wd=<?php echo $t['ip']; ?>" target=_blank><?php echo $t['ip']; ?></a></td>
			<td align="left"><?php echo date(TIME_FORMAT, $t['optiontime']); ?></td>
			<td align="left"><?php echo $t['param']; ?></td>
		</tr>
		<?php } } ?>
		<tr height="25">
			<td colspan="8" align="left"><input type="button" class="button" value="<?php echo lang('a-ind-44'); ?>" name="submit_order" onClick="window.location.href='<?php echo url('admin/index/clearlog/'); ?>'">
			<div class="onShow"><?php echo lang('a-ind-45'); ?></div></td>
		</tr>
		</table>
		<?php echo $pagelist; ?>
		</form>
	</div>
</div>
</body>
</html>