
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
        $(function(){
            if ($(document).width() <= 900) {
                $('#s_title').css('width', '200px');
            }
        });
        function del(id) {
            if (confirm('<?php echo lang('a-cat-11'); ?>')) {
                $('#load').show();
                var url = "<?php echo url('admin/wx/delKeyword/'); ?>&id="+id;
                window.location.href=url;
            }
        }
        function confirm_del() {
            if (confirm('<?php echo lang('a-confirm'); ?>')) {
                $('#load').show();
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
    <title>admin</title>
</head>
<body style="font-weight: normal;">
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a href="<?php echo url('admin/wx/keyword'); ?>" class="on"><em>关键字列表</em></a><span>|</span>
        <a href="<?php echo url('admin/wx/addKeyword'); ?>"><em>添加回复关键字</em></a>
    </div>
    <div class="bk10"></div>
    <div class="table-list">
        <form action="" method="post" name="myform">
            <table width="100%">
                <thead>
                <tr>
                    <th width="50" align="left"><input name="deletec" id="deletec" type="checkbox" onClick="setC()" /></th>
                    <th align="left" width="100">关键字</th>
                    <th align="left" width="150">回复类型</th>
                    <th align="left" class="dr_option">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
                <tr>
                    <td align="left"><input name="ids[]" type="checkbox" value="<?php echo $t['id']; ?>" class="deletec" /></td>
                    <td align="left"><?php echo $t['keyword']; ?></td>
                    <td align="left"><?php echo $t['type'] ? '素材内容' : '文本内容'; ?></font></td>
                    <td align="left">
                        <?php if (admin_auth($userinfo['roleid'], 'wx-editmenu')) { ?><a href="<?php echo url('admin/wx/editKeyword',array('id'=>$t['id'])); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'wx-delmenu')) { ?><a href="javascript:del(<?php echo $t['id']; ?>);"><?php echo lang('a-del'); ?></a> <?php } ?>
                    </td>
                </tr>
                <?php } } ?>
                <tr>
                    <td colspan="10" align="left">
                        <input <?php if (!admin_auth($userinfo['roleid'], 'wx-del_menu')) { ?>disabled<?php } ?> type="submit" class="button" value="<?php echo lang('a-del'); ?>" name="delete" onclick="return confirm_del()" />&nbsp;
                        <span id="load" style="display:none"><img src="<?php echo ADMIN_THEME; ?>images/loading.gif"></span>
                    </td>
                </tr>
                </tbody>
            </table>
            <?php echo str_replace('<a>共' . $total . '条</a>', '<a>耗时' . runtime() . '秒</a><a>共' . $total . '条</a>', $pages); ?>
        </form>
    </div>
</div>
</body>
</html>