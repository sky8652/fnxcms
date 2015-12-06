<?php include $this->_include('header'); ?>
    <div class="navigation">
    您当前位置：<a  href="<?php echo SITE_PATH; ?>">首页</a> >> <?php echo catpos($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?>
    </div>
    <div class="blank10 clear"></div>
    <!--主体begin-->
    <div class="downlist">
        <div class="floatl">
            <div class="left01">
                <div class="title"><?php echo $title; ?></div>
                <div class="downbox1">
                    <div class="floatl"> <img src="<?php echo thumb($thumb); ?>" height="130" width="160" /></div>
                    <div class="floatr">
                        <ul>
                        <li><span>租　金：</span> <?php echo $zujin; ?> 元/月(<?php echo $zujinleixing; ?>)</li>
                        <li><span>户　型：</span> <?php echo $shi; ?>室<?php echo $ting; ?>厅<?php echo $wei; ?>卫<?php echo $mianji; ?>平方</li>
                        <li><span>类　型：</span> <?php echo $zhuangxiu; ?>，第<?php echo $louceng; ?>层，共<?php echo $zongceng; ?>层 </li>
                        <li><span>配　置：</span> <?php echo implode(',', $peizhi); ?></li>
                        <li><span>区　域：</span> <?php echo linkagepos(1, $quyu, url('content/list', array('catid'=>$catid, 'area'=>'{linkageid}'))); ?><!--你可以在这里自定义url地址--></li>
                        <li><span>小　区：</span> <?php echo $xiaoqu; ?></li>
                        <li><span>地　址：</span> <?php echo $dizhi; ?></li>
                        <li><span>电　话：</span> <?php echo $dianhua; ?></li>
                        <li><span>更　新：</span> <?php echo date("Y-m-d H:i:s", $updatetime); ?></li>
                        <li><span>人　气：</span> <script type="text/javascript" src="<?php echo url('api/hits',array('id'=>$id,'hits'=>$hits)); ?>"></script></li>
                        </ul>
                    </div>
                </div>	
                <div class="clear blank10"></div>  
            </div>
            <div class="clear blank10"></div>
            <div class="left02">
               <div class="title">地图信息</div>
               <div class="downbox2">
                 <?php echo baiduMap($modelid, 'ditu', $ditu, 600, 400); ?>
               </div>
            </div>
            <div class="clear blank10"></div>
            <div class="left02">
               <div class="title">房屋图片</div>
               <div class="downbox2">
                <?php if (is_array($tupian['file'])) { $count=count($tupian['file']);foreach ($tupian['file'] as $k=>$t) { ?>
                     <img src="<?php echo image($t); ?>" /> <br>
                <?php } } ?>
               </div>
            </div>
            <div class="clear blank10"></div>
            <div class="left02">
               <div class="title">介绍信息</div>
               <div class="downbox2">
                  <?php echo $content; ?>
               </div>
            </div>
        </div>
        <div class="right">
            <!--right01 begin-->
            <div class="right01">
                <div class="title"><span>最新TOP10</span></div>
                <div class="right01box">
                <ul>
                <?php $return = $this->_listdata("catid=$catid num=10 order=updatetime cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <li><span class="N<?php echo $key+1; ?>"></span><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
                </ul>
                </div>
            </div> 
            <!--right01 end-->
            <div class="blank10 clear"></div>
            <!--right01 begin-->
            <div class="right01">
               <div class="title"><span>热点TOP10</span></div>
               <div class="right01box">
                <ul>
                <?php $return = $this->_listdata("catid=$catid num=10 order=hits cache=36000"); extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <li><span class="N<?php echo $key+1; ?>"></span><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></li>
                <?php } } ?>
                </ul>
               </div>
            </div> 
            <!--right01 end-->
        </div>
    </div>
    <!--主体end-->
    <div class="clear blank10"></div>
<?php include $this->_include('footer'); ?>