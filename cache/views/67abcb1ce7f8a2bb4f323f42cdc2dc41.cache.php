<thead>
<tr>
    <th style="width:20px;" align="left"><input name="deletec" id="deletec" type="checkbox" onClick="setC()" /></th>
    <th style="width:30px;" align="left"><?php echo lang('a-order'); ?></th>
    <th style="width:40px;" align="left">ID </th>
    <?php if (is_array($model['setting']['form']['show'])) { $count=count($model['setting']['form']['show']);foreach ($model['setting']['form']['show'] as $f) { ?>
    <th align="left"><?php echo $model['fields']['data'][$f]['name']; ?></th>
    <?php } }  if ($join) { ?><th style="width:80px;" align="left"><?php echo lang('a-con-64'); ?></th><?php } ?>
    <th style="width:90px;" align="left"><?php echo lang('a-con-30'); ?></th>
    <th style="width:120px;" align="left"><?php echo lang('a-con-31'); ?></th>
    <th style="width:130px;" align="left"><?php echo lang('a-option'); ?></th>
</tr>
</thead>
<tbody>
<?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
<tr>
    <td align="left"><input name="del_<?php echo $t['id']; ?>" type="checkbox" class="deletec" /></td>
    <td align="left"><input type="text" name="order_<?php echo $t['id']; ?>" class="input-text" style="width:25px; height:15px;" value="<?php echo $t['listorder']; ?>" /></td>
    <td align="left"><?php echo $t[id]; ?></td>
    <?php if (is_array($model['setting']['form']['show'])) { $count=count($model['setting']['form']['show']);foreach ($model['setting']['form']['show'] as $f) { ?>
    <td align="left"><?php echo $t[$f]; ?></td>
    <?php } }  if ($join) { ?><td align="left"><a href="<?php echo url('admin/form/list',array('userid'=>$t['userid'],'modelid'=>$modelid,'status'=>$status, 'cid'=>$t['cid'])); ?>"><?php echo $t['cid']; ?></a></td><?php } ?>
    <td align="left"><?php if ($t['username']) { ?><a href="<?php echo url('admin/form/list',array('userid'=>$t['userid'],'modelid'=>$modelid,'status'=>$status, 'cid'=>$cid)); ?>"><?php echo $t['username']; ?></a><?php } else {  echo $t['ip'];  } ?></td>
    <td align="left"><span style="<?php if (date('Y-m-d', $t['updatetime']) == date('Y-m-d')) { ?>color:#F00<?php } ?>"><?php echo date(TIME_FORMAT, $t['updatetime']); ?></span></td>
    <td align="left">
    <?php $del = url('admin/form/del/',array('modelid'=>$modelid,'id'=>$t['id'], 'cid'=>$cid));?>
    <a href="<?php echo $site_url;  echo form_show_url($modelid, $t); ?>" target="_blank"><?php echo lang('a-cat-23'); ?></a> |
    <?php if (admin_auth($userinfo['roleid'], 'form-edit')) { ?><a href="<?php echo url('admin/form/edit',array('id'=>$t['id'],'modelid'=>$modelid, 'cid'=>$cid)); ?>"><?php echo lang('a-edit'); ?></a> | <?php }  if (admin_auth($userinfo['roleid'], 'form-del')) { ?><a href="javascript:;" onClick="if(confirm('<?php echo lang('a-confirm'); ?>')){ window.location.href='<?php echo $del; ?>'; }"><?php echo lang('a-del'); ?></a> <?php } ?>
    </td>
</tr>
<?php } } ?>