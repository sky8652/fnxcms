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
<script type="text/javascript">var sitepath = "<?php echo SITE_PATH;  echo ENTRY_SCRIPT_NAME; ?>";</script>
<script type="text/javascript" src="<?php echo ADMIN_THEME; ?>js/core.js"></script>
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
	<a href="<?php echo url('admin/form/add',array('modelid'=>$modelid, 'cid'=>$cid)); ?>"><em><?php echo lang('a-con-24'); ?></em></a><span>|</span>
	<a href="<?php echo url('admin/form/config',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" class="on"><em><?php echo lang('a-con-60'); ?></em></a><span>|</span>
	<a href="<?php echo $site_url;  echo url('form/post',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" target="_blank"><em><?php echo lang('a-con-61'); ?></em></a><span>|</span>
	<a href="<?php echo $site_url;  echo url('form/list',array('modelid'=>$modelid, 'cid'=>$cid)); ?>" target="_blank"><em><?php echo lang('a-con-62'); ?></em></a>
	</div>
	<div class="bk10"></div>
	<div class="table-list">
		<form method="post" action="" id="myform" name="myform">
		<input type="hidden" value="<?php echo $typeid; ?>" name="typeid" id="typeid" />
		<div class="pad-10">
		<div class="col-tab">
			<ul class="tabBut cu-li">
				<li onClick="SwapTab('setting','on','',7,1);" <?php if ($typeid==1) { ?>class="on"<?php } ?> id="tab_setting_1"><?php echo lang('a-cat-25'); ?></li>
				<li onClick="SwapTab('setting','on','',7,2);" <?php if ($typeid==2) { ?>class="on"<?php } ?> id="tab_setting_2"><?php echo lang('a-con-70'); ?></li>
				<li onClick="SwapTab('setting','on','',7,4);" <?php if ($typeid==3) { ?>class="on"<?php } ?> id="tab_setting_4"><?php echo lang('a-cat-26'); ?></li>
				<li onClick="SwapTab('setting','on','',7,3);" <?php if ($typeid==4) { ?>class="on"<?php } ?> id="tab_setting_3"><?php echo lang('a-cat-27'); ?></li>
				<li onClick="SwapTab('setting','on','',7,5);" <?php if ($typeid==5) { ?>class="on"<?php } ?> id="tab_setting_5"><?php echo lang('a-con-71'); ?></li>
				<li onClick="SwapTab('setting','on','',7,6);" <?php if ($typeid==6) { ?>class="on"<?php } ?> id="tab_setting_6"><?php echo lang('a-cat-29'); ?></li>
				<li onClick="SwapTab('setting','on','',7,7);" <?php if ($typeid==7) { ?>class="on"<?php } ?> id="tab_setting_7"><?php echo lang('a-mod-189'); ?></li>
			</ul>
			<div class="contentList pad-10" id="div_setting_1" style="display: <?php if ($typeid==1) { ?>block<?php } else { ?>none<?php } ?>;">
			<table width="100%" class="table_form">
			<tbody>
				<tr>
					<th width="200"><?php echo lang('a-con-73'); ?>：</th>
					<td>
					<?php echo $join_info; ?>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-74'); ?>：</th>
					<td>
					<input type="radio" <?php if ($model['setting']['form']['post']==1) { ?>checked<?php } ?> value="1" name="setting[form][post]"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if (empty($model['setting']['form']['post'])) { ?>checked<?php } ?> value="0" name="setting[form][post]"> <?php echo lang('a-open'); ?>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-76'); ?>：</th>
					<td>
					<input type="radio" <?php if (empty($model['setting']['form']['code'])) { ?>checked<?php } ?> value="0" name="setting[form][code]"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if ($model['setting']['form']['code']==1) { ?>checked<?php } ?> value="1" name="setting[form][code]"> <?php echo lang('a-open'); ?>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-77'); ?>：</th>
					<td>
					<input type="radio" <?php if (empty($model['setting']['form']['check'])) { ?>checked<?php } ?> value="0" name="setting[form][check]"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if ($model['setting']['form']['check']==1) { ?>checked<?php } ?> value="1" name="setting[form][check]"> <?php echo lang('a-open'); ?>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-78'); ?>：</th>
					<td>
					<input type="radio" <?php if (empty($model['setting']['form']['member'])) { ?>checked<?php } ?> value="0" name="setting[form][member]"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if ($model['setting']['form']['member']==1) { ?>checked<?php } ?> value="1" name="setting[form][member]"> <?php echo lang('a-open'); ?>
					<div class="onShow"><?php echo lang('a-con-79'); ?></div>
					</td>
				</tr>
				<?php if ($join) { ?>
				<tr>
					<th><?php echo lang('a-con-80'); ?>：</th>
					<td>
					<input type="radio" <?php if (empty($model['setting']['form']['showme'])) { ?>checked<?php } ?> value="0" name="setting[form][showme]"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if ($model['setting']['form']['showme']==1) { ?>checked<?php } ?> value="1" name="setting[form][showme]"> <?php echo lang('a-open'); ?>
					<div class="onShow"><?php echo lang('a-con-81'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-mod-145'); ?>：</th>
					<td>
					<input type="radio" <?php if (empty($model['setting']['form']['postme'])) { ?>checked<?php } ?> value="0" name="setting[form][postme]"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if ($model['setting']['form']['postme']==1) { ?>checked<?php } ?> value="1" name="setting[form][postme]"> <?php echo lang('a-open'); ?>
					<div class="onShow"><?php echo lang('a-mod-152'); ?></div>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<th><?php echo lang('a-mod-144'); ?>：</th>
					<td>
					<input type="radio" <?php if (empty($model['setting']['form']['edit'])) { ?>checked<?php } ?> value="0" name="setting[form][edit]"> <?php echo lang('a-close'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if ($model['setting']['form']['edit']==1) { ?>checked<?php } ?> value="1" name="setting[form][edit]"> <?php echo lang('a-open'); ?>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-82'); ?>：</th>
					<td>
					<input type="radio" <?php if (empty($model['setting']['form']['num'])) { ?>checked<?php } ?> value="0" name="setting[form][num]"> <?php echo lang('a-con-83'); ?>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" <?php if ($model['setting']['form']['num']==1) { ?>checked<?php } ?> value="1" name="setting[form][num]"> <?php echo lang('a-con-84'); ?>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-85'); ?>：</th>
					<td>
					<input type="text" class="input-text" size="10" value="<?php echo $model['setting']['form']['ip']; ?>" name="setting[form][ip]"><div class="onShow"><?php echo lang('a-con-86'); ?></div>
					</td>
				</tr>
			</tbody>
			</table>
			</div>
			
			<div class="contentList pad-10" id="div_setting_4" style="display: <?php if ($typeid==4) { ?>block<?php } else { ?>none<?php } ?>;">
			<table width="100%" class="table_form ">
			<tbody>
				<tr>
					<th width="200"><?php echo lang('a-cat-42'); ?>：</th>
					<td>
					<input type="text" class="input-text" size="10" value="<?php echo $model['setting']['form']['pagesize'] ? $model['setting']['form']['pagesize'] : 10; ?>" name="setting[form][pagesize]"><div class="onShow"><?php echo lang('a-con-87'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-88'); ?>：</th>
					<td>
					<input type="text" class="input-text" size="30" value="<?php echo $model['categorytpl']; ?>" name="data[categorytpl]"><div class="onShow"><?php echo lang('a-con-91'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-89'); ?>：</th>
					<td>
					<input type="text" class="input-text" size="30" value="<?php echo $model['listtpl']; ?>" name="data[listtpl]"><div class="onShow"><?php echo lang('a-con-91'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-con-90'); ?>：</th>
					<td>
					<input type="text" class="input-text" size="30" value="<?php echo $model['showtpl']; ?>" name="data[showtpl]"><div class="onShow"><?php echo lang('a-con-91'); ?></div>
					</td>
				</tr>
			</tbody>
			</table>
			</div>

			<div class="contentList pad-10 hidden" id="div_setting_2" style="display: <?php if ($typeid==2) { ?>block<?php } else { ?>none<?php } ?>;">
			<table width="100%" class="table_form ">
			<tbody>
				<tr>
					<th width="200"><?php echo lang('a-con-92'); ?>：</th>
					<td>
						<table>
						<?php if (is_array($model['fields']['data'])) { $count=count($model['fields']['data']);foreach ($model['fields']['data'] as $t) { ?>
						<tr>
							<th><?php echo $t['name']; ?>: </th>
							<td><input type="checkbox" value="<?php echo $t['field']; ?>" name="setting[form][show][]" <?php if (@in_array($t['field'], $model['setting']['form']['show'])) { ?>checked<?php } ?>> <?php echo lang('a-con-93'); ?></td>
						</tr>
						<?php } } ?>
						</table>
					</td>
				</tr>
			</tbody>
			</table>
			</div>

			<div class="contentList pad-10 hidden" id="div_setting_3" style="display: <?php if ($typeid==3) { ?>block<?php } else { ?>none<?php } ?>;">
			<table width="100%" class="table_form ">
			<tbody>
				<tr>
					<th width="200"><?php echo lang('a-cat-47'); ?>：</th>
					<td><input type="text" maxlength="60" size="60" value="<?php echo $model['setting']['form']['meta_title']; ?>" id="meta_title" name="setting[form][meta_title]" class="input-text"></td>
				</tr>
				<tr>
					<th><?php echo lang('a-cat-48'); ?>：</th>
					<td><textarea style="width:90%;height:40px" id="meta_keywords" name="setting[form][meta_keywords]"><?php echo $model['setting']['form']['meta_keywords']; ?></textarea></td>
				</tr>
				<tr>
					<th><?php echo lang('a-cat-49'); ?>：</th>
					<td><textarea style="width:90%;height:50px" id="meta_description" name="setting[form][meta_description]"><?php echo $model['setting']['form']['meta_description']; ?></textarea></td>
				</tr>
			</tbody>
			</table>
			</div>
			
			<div class="contentList pad-10 hidden" id="div_setting_5" style="display: <?php if ($typeid==5) { ?>block<?php } else { ?>none<?php } ?>;">
			<table width="100%" class="table_form ">
			<tbody>
				<tr>
					<th width="200"><?php echo lang('a-con-95'); ?>：</th>
					<td><?php echo $form_url; ?></td>
				</tr>
				<tr>
				  <th><?php echo lang('a-con-105'); ?>：</th>
				  <td>
				  <textarea style="width:90%;height:70px;overflow: hidden;color:#777777"><?php echo $list_code; ?></textarea>
				  </td>
				</tr>
				<?php if ($join_code) { ?>
				<tr>
					<th><?php echo lang('a-con-106'); ?>：</th>
					<td>
					<textarea style="width:90%;height:90px;overflow: hidden;color:#777777"><?php echo $join_code; ?></textarea>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<th><?php echo lang('a-con-96'); ?>：</th>
					<td>
					<textarea style="width:90%;height:330px"><?php echo $form_code; ?></textarea>
					<br>
					<div class="onShow"><?php echo lang('a-con-97'); ?></div>
					</td>
				</tr>
			</tbody>
			</table>
			</div>
			
			<div class="contentList pad-10 hidden" id="div_setting_6" style="display: <?php if ($typeid==6) { ?>block<?php } else { ?>none<?php } ?>;">
			<table width="100%" class="table_form ">
				<tr>
					<th width="200"><?php echo lang('a-con-98'); ?>：</th>
					<td>
						<table width="100%">
							<tr>
							  <th width="120"><?php echo lang('a-con-99'); ?>：</th>
							  <td>index.php?c=form&a=list&modelid=<?php echo $modelid;  if ($join) { ?>&cid=<?php echo lang('a-con-101');  } ?></td>
							</tr>
							<tr>
							  <th style="border:none"><?php echo lang('a-con-100'); ?>：</th>
							  <td style="border:none">index.php?c=form&a=show&modelid=<?php echo $modelid; ?>&id=<?php echo lang('a-con-102'); ?></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-cat-58'); ?>： </th>
					<td><input name="setting[form][url][tohtml]" type="radio" value="1" <?php if ($model['setting']['form']['url']['tohtml']) { ?>checked<?php } ?> onClick="$('#html').show()"> <?php echo lang('a-yes'); ?>  
					&nbsp;&nbsp;&nbsp;
					<input name="setting[form][url][tohtml]" type="radio" value="0" <?php if (!$model['setting']['form']['url']['tohtml']) { ?>checked<?php } ?> onClick="$('#html').hide()"> <?php echo lang('a-no'); ?> </td>
				</tr>
				<tr id="html" style="display:<?php if ($model['setting']['form']['url']['tohtml']) { ?>table-row<?php } else { ?>none<?php } ?>">
					<th><?php echo lang('a-cat-59'); ?>： </th>
					<td><input class="input-text" type="text" name="setting[form][url][htmldir]" value="<?php if (isset($model['setting']['form']['url']['htmldir'])) {  echo $model['setting']['form']['url']['htmldir'];  } else { ?>html<?php } ?>" size="15"/>
					<div class="onShow"><?php echo lang('a-cat-60'); ?></div>
					</td>
				</tr>
				<tr>
					<th><?php echo lang('a-cat-64'); ?>： </th>
					<td><input id="url_show" class="input-text" type="text" name="setting[form][url][show]" value="<?php echo $model['setting']['form']['url']['show']; ?>" size="40"/>
					<div class="onShow">&nbsp;<?php echo lang('a-cat-106'); ?></div>
					</td>
				</tr>
			</table>
			</div>
			
			<div class="contentList pad-10 hidden" id="div_setting_7" style="display: <?php if ($typeid==7) { ?>block<?php } else { ?>none<?php } ?>;">
			<table width="100%" class="table_form">
			<tbody>
				<tr>
					<th width=200><?php echo lang('a-mod-190'); ?>：</th>
					<td>
					<input type="text" class="input-text" size=20 value="<?php echo $model['setting']['form']['callback']; ?>" name="setting[form][callback]" />
					<div class="onShow"><?php echo lang('a-mod-191'); ?></div>
					</td>
				</tr>
				<tr>
					<th width=200><?php echo lang('a-mod-192'); ?>：</th>
					<td><textarea style="width:50%;height:120px" name=""><?php echo $func_code; ?></textarea></td>
				</tr>
			</tbody>
			</table>
			</div>
			
			<div class="bk15"></div>
			<input type="submit" class="button" value="<?php echo lang('a-submit'); ?>" name="submit">
		</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
function SwapTab(name,cls_show,cls_hide,cnt,cur){
	for(i=1;i<=cnt;i++){
		if(i==cur){
			$('#div_'+name+'_'+i).show();
			$('#tab_'+name+'_'+i).attr('class',cls_show);
			$('#typeid').val(cur);
		}else{
			$('#div_'+name+'_'+i).hide();
			$('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
}
</script>