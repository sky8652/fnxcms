<?php include $this->_include('header'); ?>
    <div class="navigation">
    您当前位置：<a  href="<?php echo SITE_PATH; ?>">首页</a> >> <?php echo catpos($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?>
    </div>
    <div class="blank10 clear"></div>
    <!--page-->
    <div class="helpmain">
        <div class="left">
          <div class="helpleftsite">
          <?php $Pcat = getParentData($catid);  if ($Pcat) { ?>
                <div class="title"><?php echo $Pcat['catname']; ?></div>
                <div class="leftbox">
                <?php $data = getCatNav($catid);  if (is_array($data)) { $count=count($data);foreach ($data as $t) { ?>
                 <a <?php if ($t['catid']==$catid) { ?>class="select"<?php } ?> href="<?php echo $t['url']; ?>"><?php echo $t['catname']; ?></a>
                  <?php } } ?>
                </div>
           <?php } else { ?>
           <div class="title"><?php echo $catname; ?></div>
           <?php } ?>
           </div>
        </div>
        <div class="right">
             <h2><?php echo $catname; ?></h2>
             <div class="clear"></div>
             <div class="notetext">
                <?php echo $content; ?>
				<!--文章内容分页 begin-->
				<?php if ($contentpage) { ?>
				<div class="cpage">
				<?php if (is_array($contentpage)) { $count=count($contentpage);foreach ($contentpage as $i=>$u) { ?>
				<a<?php if ($page!=$i) { ?> href="<?php echo $u; ?>"<?php } ?>><?php echo $i; ?></a>
				<?php } } ?>
				</div>
				<div class="clear blank10"></div>
				<?php } ?>
				<!--文章内容分页 end-->
             </div>
        </div>
    </div>
    <!--page-->
    <div class="clear blank10"></div>
<?php include $this->_include('footer'); ?>