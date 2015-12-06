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
    <script type="text/javascript">
        $(document).ready(
            function(){
                $("#dr_select").click(
                   function()
                   {
                       if($("#dr_select").attr('checked')) {
                           $(".dr_select").attr("checked",true);
                       } else {
                           $(".dr_select").attr("checked",false);
                       }
                   }
                )
            }
        );
    </script>
    <title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a href="<?php echo url('admin/wx/user'); ?>" class="on"><em>用户管理</em></a><span>|</span>
        <a href="<?php echo url('admin/wx/syncUsers'); ?>"><em>同步用户</em></a><span>|</span>
    </div>
    <div class="bk10"></div>
    <div class="table-list">
        <form action="<?php echo url('admin/wx/userSend'); ?>" method="post" name="myform">
            <input name="action" id="action" type="hidden" />
            <table width="100%">
                <thead>
                <tr>
                    <th width="20" align="right"><input name="dr_select" id="dr_select" type="checkbox" onClick="" />&nbsp;</th>
                    <th width="50"align="center">头像</th>
                    <th width="120" align="left">昵称</th>
                    <th width="50" align="center">性别</th>
                    <th width="90" align="left">地区</th>
                    <th width="130" align="left">关注时间</th>
                    <th align="left" class="dr_option">地理位置</th>
                </tr>
                </thead>
                <tbody>
                <?php if (is_array($data)) { $count=count($data);foreach ($data as $t) { ?>
                <tr>
                    <td align="right"><input name="ids[]" type="checkbox" class="dr_select" value="<?php echo $t['id']; ?>" />&nbsp;</td>
                    <td align="center"><img src="<?php echo $t['headimgurl']; ?>46" width="30" height="30"></td>
                    <td align="left"><?php echo $t['nickname']; ?></td>
                    <td align="center"><?php if ($t['sex']==1) { ?>男<?php } else if ($t['sex']==2) { ?>女<?php } else { ?>未知<?php } ?></td>
                    <td align="left"><?php echo $t['province']; ?> - <?php echo $t['city']; ?></td>
                    <td align="left"><?php echo date('Y-m-d',$t['subscribe_time']); ?></td>
                    <td align="left" class="dr_option">
                        <?php if ($t['location_x'] && $t['location_y']) {  echo $t['location_x']; ?>,<?php echo $t['location_y'];  if ($t['location_info']) { ?> （<?php echo $t['location_info']; ?>）<?php }  } ?>
                    </td>
                </tr>
                <?php } } ?>

                <tr>
                    <td colspan="99" align="left">
                        <input type="submit" class="button" name="option" value="推送消息给选中用户" onclick="$('#action').val('sel')">
                        <input type="submit" class="button" name="option" value="推送消息给所有用户" onclick="$('#action').val('all')">
                    </td>
                </tr>
            </table>
            <?php echo str_replace('<a>共' . $total . '条</a>', '<a>耗时' . runtime() . '秒</a><a>共' . $total . '条</a>', $pages); ?>
        </form>
    </div>
</div>

</body>
</html>