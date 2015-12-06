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
<title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a href="<?php echo url('admin/plugin'); ?>"><em><?php echo lang('dr015'); ?></em></a><span>|</span>
        <a href="<?php echo url('admin/plugin/online/'); ?>" class="on"><em><?php echo lang('dr016'); ?></em></a><span>|</span>
        <a href="<?php echo url('admin/plugin/cache'); ?>"><em><?php echo lang('a-cache'); ?></em></a>
    </div>
</div>
<div class="pad_10">
<div class="table-list" style="padding-top:50px; padding-left:110px">
<img src="<?php echo ADMIN_THEME; ?>images/onLoad.gif"> <?php echo lang('a-plu-51'); ?>
<meta http-equiv="refresh" content="0; url=<?php echo $url; ?>">
</div> 
</div>
</body>
</html>