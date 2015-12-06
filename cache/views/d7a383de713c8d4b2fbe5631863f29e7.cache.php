<?php include $this->_include('header'); ?>

    <div class="navigation">
    您当前位置：<a  href="<?php echo SITE_PATH; ?>">首页</a> >> <?php echo catpos($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?>
    </div>
    <div class="blank10 clear"></div>
    <div class="mainpdbox">
        <div class="left">
            <!--articlecontent begin-->
			<div class="articlecontent">
			    <h3><?php echo $title; ?></h3>
				<div class="info" style=" color: #999">
                    时间：<?php echo date("Y-m-d H:i:s", $updatetime); ?>
                    <span>点击：<script type="text/javascript" src="<?php echo url('api/hits',array('id'=>$id, 'hits'=>$hits)); ?>"></script>次</span>
                    <span><script type="text/javascript" language="javascript">function ContentSize(size){ document.getElementById('MyContent').style.fontSize=size+'px';}</script>【字体：<a href="javascript:ContentSize(16)">大</a> <a href="javascript:ContentSize(14)">中</a> <a href="javascript:ContentSize(12)">小</a>】</span>
					<span id="scj"><a href="javascript:addfavorite('<?php echo $id; ?>', 'scj');">收藏</a></span>
				</div>
				<hr size=1 color="#e8e8e8" width="620" style="padding-bottom:5px;" />
				<div class="newscontent">
				    <div id="MyContent"><div id='news1' style='display:;'><?php echo $content; ?></div></div>
					<div class="clear blank10"></div>
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
					<!--标签关键字 begin-->
                    <?php if ($kws=get_tag_data($keywords)) { ?>
						<div class="articlekey"><strong>TAG：</strong>
						<?php if (is_array($kws)) { $count=count($kws);foreach ($kws as $t) { ?>
						<a href="<?php echo tag_url($t); ?>"><?php echo $t; ?></a>
						<?php } } ?>
						</div>
                    <?php } ?>
					<!--标签关键字 end-->
                    <div class="clear"></div>
					<div class="articlebook">
                    <?php if ($prev_page) { ?><h2><strong>上一篇：</strong><a href="<?php echo $prev_page['url']; ?>"><?php echo $prev_page['title']; ?></a> </h2><?php }  if ($next_page) { ?><h2><strong>下一篇：</strong><a href="<?php echo $next_page['url']; ?>"><?php echo $next_page['title']; ?></a> </h2><?php } ?>
					</div>
                    <?php if (plugin('digg')) { ?><div class="clear blank10"></div><script type="text/javascript" src="<?php echo url('digg/index/show', array('id'=>$id)); ?>"></script><?php }  if (plugin('mood')) { ?><div class="clear blank10"></div><script type="text/javascript" src="<?php echo url('mood/index/show', array('id'=>$id)); ?>"></script><?php }  if (plugin('comment')) { ?><div class="clear blank10"></div><div style="clear:both;width:600px;padding-left:20px;"><a name="comment"></a><script type="text/javascript" src="<?php echo url('comment/index/list', array('id'=>$id)); ?>"></script></div><?php } ?>
					<div class="clear blank10"></div>
					<div class="xgxw">
						<div class="title">相关文章</div>
                        <div class="xgnewsbox">
                            <ul>
                            <?php $return = $this->_listdata("modelid=$modelid action=relation tag=$keywords id=$id num=5 cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                            <li><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a><span><?php echo date("Y-m-d", $t['updatetime']); ?></span></li>
                            <?php } } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="clear blank10"></div>
                    <?php if ($commentCfg) { ?>
                    <!-- 多说评论框 start -->
                    <div class="ds-thread" data-thread-key="<?php echo $id; ?>" data-title="<?php echo $title; ?>" data-url="<?php echo $pageurl; ?>"></div>
                    <!-- 多说评论框 end -->
                    <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                    <script type="text/javascript">
                        var duoshuoQuery = {short_name:"dayruicms"};
                        (function() {
                            var ds = document.createElement('script');
                            ds.type = 'text/javascript';ds.async = true;
                            ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                            ds.charset = 'UTF-8';
                            (document.getElementsByTagName('head')[0]
                            || document.getElementsByTagName('body')[0]).appendChild(ds);
                        })();
                    </script>
                    <!-- 多说公共JS代码 end -->
                    <?php } ?>
                    <div class="clear blank10"></div>
					<div class="sharebox">
                        <!-- Baidu Button BEGIN -->
                        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                            <a class="bds_qzone">QQ空间</a>
                            <a class="bds_tqq">腾讯微博</a>
                            <a class="bds_tqf">腾讯朋友</a>
                            <a class="bds_tsina">新浪微博</a>
                            <a class="bds_tsohu">搜狐微博</a>
                            <a class="bds_baidu">百度搜藏</a>
                            <a class="bds_hi">百度空间</a>
                            <a class="bds_kaixin001">开心网</a>
                            <span class="bds_more">更多</span>
                            <a class="shareCount"></a>
                        </div>
                        <script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
                        <script type="text/javascript" id="bdshell_js"></script>
                        <script type="text/javascript">
                            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
                        </script>
                        <!-- Baidu Button END -->
                    </div>
					<div class="clear blank10"></div>
                 </div>
			</div>
			<!--articlecontent end-->
        </div>
        <div class="right">
            <!--right02 begin-->
	        <div class="right02">
		        <div class="title"><span>最新TOP10</span></div>
		        <div class="right02box">
		        <ul>
                <?php $return = $this->_listdata("catid=$catid num=10 order=updatetime cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
			    <li><span class="N<?php echo $key+1; ?>"></span><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
			    </ul>
		        </div>
		    </div> 
	        <!--right02 end-->
		    <div class="blank10 clear"></div>
	        <!--right02 begin-->
	        <div class="right02">
		       <div class="title"><span>热点TOP10</span></div>
		       <div class="right02box">
		        <ul>
                <?php $return = $this->_listdata("catid=$catid num=10 order=hits cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
			    <li><span class="N<?php echo $key+1; ?>"></span><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
			    </ul>
		       </div>
		    </div> 
	        <!--right02 end-->
            <div class="blank10 clear"></div>
            <!--right02 begin-->
            <div class="right02">
                <div class="title"><span>热评TOP10</span></div>

                <!-- 多说热评文章 start -->
                <div class="ds-top-threads text_box"  style="" data-range="daily" data-num-items="10"></div>
                <!-- 多说热评文章 end -->
                <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                <script type="text/javascript">
                    var duoshuoQuery = {short_name:"dayruicms"};
                    (function() {
                        var ds = document.createElement('script');
                        ds.type = 'text/javascript';ds.async = true;
                        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                        ds.charset = 'UTF-8';
                        (document.getElementsByTagName('head')[0]
                        || document.getElementsByTagName('body')[0]).appendChild(ds);
                    })();
                </script>
                <!-- 多说公共JS代码 end -->

            </div>
            <!--right02 end-->
       </div>
    </div>
    <div class="clear blank10"></div>
<?php include $this->_include('footer'); ?>