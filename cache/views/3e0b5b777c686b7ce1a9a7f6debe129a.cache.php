<?php include $this->_include('header'); ?>
    <div class="navigation">
    您当前位置：<a  href="<?php echo SITE_PATH; ?>">首页</a> >> <?php echo catpos($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?>
    </div>
    <div class="blank10 clear"></div>
    <!--主体begin-->
    <div class="piclist">
        <div class="title"><span><?php echo $catname; ?></span></div>
        <div class="piclistbox">
            <ul>
            <?php $return = $this->_listdata("catid=$catid page=$page order=updatetime cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
            <li>
            <div><a href="<?php echo $t['url']; ?>"><img src="<?php echo thumb($t['thumb']); ?>" /></a></div>
            <div class="picname"><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></div>
            </li>
            <?php } } ?>
            </ul>
            <div class="listpage"><?php echo $pagelist; ?></div>
       </div>
    </div>
    <!--主体end-->
    <div class="clear blank10"></div>
<?php include $this->_include('footer'); ?>